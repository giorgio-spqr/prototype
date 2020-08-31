<?php 

namespace Project\Controllers;

use Project\Models\Applications;
use Project\Models\Partners;
use Project\Utils\AskToDeal;

class ApplicationsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Applications;
    }

    public function index()
    {
        return view('index');
    }

    public function store()
    {
        $email = $_POST['email'];
        $summ = $_POST['summ'];
        $success = ''; 
        $errors = []; 

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Check e-mail address!';
        }
        if (empty($summ) || !is_numeric($summ)){
            $errors['summ'] = 'Input sum!';
        }
    
        if (count($errors) == 0) {

            //inserting deal to the db
            $data = [
                'email' => $email,
                'summ'   => $summ
            ];

            $this->model->create($data);
            $application_id = $this->model->getLastId();

            //Getting partner we need
            $partners = new Partners;
            $partner = $partners->matchPartner($summ);

            //email txt for partner
            $msg = 'Application from ' . $email . '\n';
            $msg .= 'for the amount: ' . $summ .'\n';
            
            //getting all we need data to array
            $data = [
                'partner_id' => $partner->id,
                'partner_email' => $partner->email,
                'msg' => $msg,
                'application_id' => $application_id,
            ];

            //Sending to Rabbit queue
            AskToDeal::send('rabbitmq', $data); 

            $success = 'Success!';
        }
        
        return view('index', ['errors' => $errors, 'success' => $success]);
    }
}