<?php

class Careermodel extends CI_Model{
    public function add($data)
    {
        $query = $this->db->insert("tbl_career",$data);
        return $query;
    }
}

?>