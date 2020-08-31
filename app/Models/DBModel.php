<?php

namespace Project\Models;

use Project\Core\App;

abstract class DBModel 
{
    protected $db;
    protected $last_id;
    protected $table;

    public function __construct()
    {
        try {
            $this->db = App::get('database');
        } catch (\Exception $e) {
            // some code to handle exception...
        }
    }

    public function getLastId()
    {
        return $this->last_id;
    }

    public function getbyId(int $id)
    {
        $row = $this->db->get_row("SELECT * FROM " . $this->table . " WHERE id = " . $id);
        
        return $row;
    }

    public function getAll()
    {
        $res = $this->db->get_results("SELECT * FROM " . $this->table);
        return $res;
    }

    public function create($data)
    {
        // $this->db->query("SET session wait_timeout=2890", FALSE);
        // $this->db->query("SET session interactive_timeout=2890", FALSE);
        
        $this->db->insert($this->table, $data);
        $this->last_id = $this->db->getInsert_Id();
    }

    public function update(int $id, array $data)
    {
        $query = $this->db->update($this->table, $data, ['id' => $id]);
        $this->last_id = $this->db->getInsert_Id;
    }

    public function delete(int $id)
    {
        //some code to delete
    }
}