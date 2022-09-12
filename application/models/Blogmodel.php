<?php

class Blogmodel extends CI_Model{

    public function add($data){
        $query = $this->db->insert("master_blogs",$data);
        return $query;
    }

    public function getblog()
    {
        $query = $this->db->select("*")
                      ->from("master_blogs")
                      ->where("status",0)
                      ->get()
                      ->result_array();

        return $query;
    }
}
