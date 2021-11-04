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
        $this->load->view('templates/Header_logout');   
        $this->load->view('pages/vypisNaMapu');
		$this->load->view('templates/footer');
    }
    public function vypisSkol()
    {
        $data["skola"] = $this->Model->vypisPrijeti();

        $this->load->view('templates/Header_logout');   
        $this->load->view('pages/vypisSkol', $data);
		$this->load->view('templates/footer');
    }
    public function upravaSouradnic()
    {
        $this->load->view('templates/Header_admin');   
        $this->load->view('pages/upravaSouradnic');
		$this->load->view('templates/footer');
    }
    public function upravaSkol()
    {
        $this->load->view('templates/Header_admin');   
        $this->load->view('pages/upravaSkoly');
		$this->load->view('templates/footer');
    }
    public function pridaniSkoly()
    {
        $this->load->view('templates/Header_admin');   
        $this->load->view('pages/pridaniSkoly');
		$this->load->view('templates/footer');
    }


}    