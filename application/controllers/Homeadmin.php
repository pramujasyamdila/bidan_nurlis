<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homeadmin extends CI_Controller
{


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('homeadmin/index');
        $this->load->view('template/footer');
    }
}
