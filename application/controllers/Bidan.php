<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Modelbidan');
    }


    public function index()
    {
        $data['bidan'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bidan2'] = $this->Modelbidan->getbidan()->result_array();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('bidan/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama_bidan', 'Nama Bidan', 'required|trim');
        $this->form_validation->set_rules('posisi_bidan', 'Posisi Bidan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('bidan/tambah');
            $this->load->view('template/footer');
        } else {
            $foto = $_FILES['foto']['name'];

            if (!$foto) {
                $this->session->set_flashdata('message', 'gagal diupload');
                redirect('bidan');
            } else {
                $config['allowed_types'] = 'gif|jpg|png|bidan';
                $config['max_size'] = 2048;
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                } else {
                    $namaFotoBaru = $this->upload->data('file_name');
                    $this->Modelbidan->simpan($namaFotoBaru);
                    $this->session->set_flashdata('message', 'data berhasil ditambahkan');
                    redirect('bidan');
                }
            }
        }
    }
    public function profilbidannurlis()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('bidan/profilbidannurlis');
        $this->load->view('template/footer');
    }
    public function profilbidandini()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('bidan/profilbidandini');
        $this->load->view('template/footer');
    }
    public function profilbidanlira()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('bidan/profilbidanlira');
        $this->load->view('template/footer');
    }
}
