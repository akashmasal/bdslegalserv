<?php

class Contactmodel extends CI_Model
{
    public function add($data)
    {
        $query = $this->db->insert("tbl_contactus",$data);
        return $query;
    }
}


?>