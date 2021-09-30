<?php

class Model extends CI_model

{

    public function vypisZaku()
    {
        $query = $this->db->query("SELECT * FROM automobily ORDER BY idautomobily ASC");  
        return $query->result(); 
    }
}    