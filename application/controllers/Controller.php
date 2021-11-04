<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Controller extends CI_Controller
{
    public function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->model('Model');
		

	 }

    public function basic()
    {
        
        if(!$this->ion_auth->logged_in())$this->load->view('templates/Header_logout');
		else $this->load->view('templates/header_admin');
        $this->load->view('pages/hlavni_strana');
		$this->load->view('templates/footer');
    } 
    public function vypisNaMapu()
    {
        $data["vypis_skoly"] = $this->Model->vypisPrijeti();

        $this->load->view('templates/Header_logout');   
        $this->load->view('pages/vypisNaMapu', $data);
		$this->load->view('templates/footer');
    }
    public function vypisSkol()
    {
        $data["skola"] = $this->Model->vypisPrijeti();

        if(!$this->ion_auth->logged_in())$this->load->view('templates/Header_logout');
		else $this->load->view('templates/header_admin'); 
        $this->load->view('pages/vypisSkol', $data);
		$this->load->view('templates/footer');
    }

    public function pridaniSkoly()
    {
        $data["mesta"] = $this->Model->vypisMest();

        $this->load->view('templates/Header_admin');   
        $this->load->view('pages/pridaniSkoly', $data);
		$this->load->view('templates/footer');
    }
    public function zapisSkoly()
    {
        $this->load->library('form_validation');  
        $this->form_validation->set_rules("nazev", "nazev", 'required');  
        $this->form_validation->set_rules("mesto", "mesto", 'required|numeric');  
        $this->form_validation->set_rules("geo_lat", "geo_lat", 'required');
        $this->form_validation->set_rules("geo_long", "geo_long", 'required');
  
        if($this->form_validation->run())  
        {  
             $data = array(  
                  "nazev"     =>$this->input->post("nazev"),  
                  "mesto"  =>$this->input->post("mesto"),
                  "geo_lat"     =>$this->input->post("geo_lat"), 
                  "geo_long"     =>$this->input->post("geo_long"));

                  $this->Model->NovaSkola($data);  
        } 
        
        if(!$this->ion_auth->logged_in())$this->load->view('templates/Header_logout');
		else $this->load->view('templates/header_admin');
                $this->load->view('pages/hlavni_strana');
		$this->load->view('templates/footer');
    }




}    