<?php

namespace Project\Models;

use Project\Models\DBModel;

class Deals extends DBModel
{
    protected $table = 'deals';

    public function updateRows($ids)
    {
        $sql = "UPDATE deals SET dt_send = NOW() WHERE id IN ('" . implode("','", $ids) . "');";
        $this->db->query($sql);
        
        return;
    }

    public function getOffers()
    {
        $query = "
            SELECT a.email as email, d.id as deal_id 
            FROM deals d
            LEFT JOIN applications a
            ON a.id = d.applications_id
            WHERE d.offer_type = 'offer' AND d.dt_send IS NULL
        ";
        return $this->db->get_results($query, ARRAY_A);
    }
}