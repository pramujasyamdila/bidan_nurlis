<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homeuser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelbidan');
        $this->load->model('Modellanding');
        $this->load->model('Modelpasien');
    }

    public function index()
    {
        $data['bidan2'] = $this->Modelbidan->getbidan()->result_array();
        $this->load->view('template/headerlanding');
        $this->load->view('homeuser/index', $data);
        $this->load->view('template/footerlanding');
    }

    public function register()
    {
        $this->load->view('template/headerlanding');
        $this->load->view('homeuser/registerpasien');
        $this->load->view('template/footerlanding');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_ortu', 'Nama Ibu/Suami', 'required|trim');
        $this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required|trim');
        $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|trim');
        $this->form_validation->set_rules('umur_hamil', 'Umur Hamil', 'required|trim');
        $this->form_validation->set_rules('hamil_ke_gpa', 'Hamil ke GPA', 'required|trim');
        $this->form_validation->set_rules('hpht_pasien', 'HPHT', 'required|trim');
        $this->form_validation->set_rules('taksiran_persalinan', 'Taksiran persalinan', 'required|trim');
        $this->form_validation->set_rules('keterangan_pasien', 'Keterangan', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Form Pasien";
            $this->load->view('template/headerlanding');
            $this->load->view('homeuser/registerpasien', $data);
            $this->load->view('template/footerlanding');
        } else {
            $data = [
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat_pasien' => $this->input->post('alamat_pasien'),
                'umur_ibu' => $this->input->post('umur_ibu'),
                'umur_hamil' => $this->input->post('umur_hamil'),
                'hamil_ke_gpa' => $this->input->post('hamil_ke_gpa'),
                'hpht_pasien' => $this->input->post('hpht_pasien'),
                'taksiran_persalinan' => $this->input->post('taksiran_persalinan'),
                'keterangan_pasien' => $this->input->post('keterangan_pasien'),
            ];
            $this->Modellanding->simpan($data);
            $this->session->set_flashdata('message', 'data berhasil ditambahkan');
            redirect('homeuser');
        }
    }
}
