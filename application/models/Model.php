<?php

class Model extends CI_model

{

    public function vypisPrijeti()
    {
        $query = $this->db->query("SELECT pocet_prijatych.pocet, pocet_prijatych.rok, skola.nazev AS nazevSkol, obor.nazev FROM `pocet_prijatych`
        JOIN skola ON pocet_prijatych.skola = skola.id
        JOIN obor ON pocet_prijatych.obor = obor.id
        ORDER BY pocet_prijatych.id ASC");  
        return $query->result(); 
    }
}    