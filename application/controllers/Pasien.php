<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Modellanding');
    }


    public function index()
    {
        $data['pasien'] = $this->Modellanding->getpasien()->result_array();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pasien/index', $data);
        $this->load->view('template/footer');
        $this->load->view('pasien/ajax');
    }
}
