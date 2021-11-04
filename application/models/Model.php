<?php

class Model extends CI_model

{

    public function vypisPrijeti()
    {
        $query = $this->db->query("SELECT skola.geo_lat, skola.geo_long, pocet_prijatych.pocet, pocet_prijatych.rok, skola.nazev AS nazevSkol, obor.nazev FROM `pocet_prijatych`
        JOIN skola ON pocet_prijatych.skola = skola.id
        JOIN obor ON pocet_prijatych.obor = obor.id
        ORDER BY pocet_prijatych.id ASC");  
        return $query->result(); 
    }
    public function vypisMest()
    {
        $query = $this->db->query("SELECT * FROM `mesto` ORDER BY id ASC");
        return $query->result(); 
    }
    public function NovaSkola($data)
    {
        $this->db->insert("skola", $data);
    }
    

}    