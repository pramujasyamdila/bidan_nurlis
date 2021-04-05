<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalBidan extends CI_Controller
{


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('jadwalbidan/index');
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('jadwalbidan/tambah');
        $this->load->view('template/footer');
    }
}
