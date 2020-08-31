<?php

namespace Project\Models;

use Project\Models\DBModel;

class Partners extends DBModel
{
    protected $table = 'partners';

    public function matchPartner(int $summ)
    {
        if ($summ >= 5000) {
            $id = 1;
        } else {
            $id = 2;
        }

        return $this->getbyId($id);
    }
}