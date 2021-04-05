<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{


    public function index()
    {
        $this->load->view('coba/test');
    }
    public function tambah()
    {
        $this->load->view('coba/tambah');
    }
}
