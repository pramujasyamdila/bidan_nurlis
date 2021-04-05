<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporanpersalinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Modelpersalinan');
    }

    public function index()
    {
        $data['persalinan'] = $this->Modelpersalinan->getpersalinan()->result_array();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('laporanpersalinan/index', $data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
        $this->form_validation->set_rules('nama_suami', 'Nama Suami', 'required|trim');
        $this->form_validation->set_rules('umur_persalinan', 'Umur Persalinan', 'required|trim');
        $this->form_validation->set_rules('alamat_persalinan', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('anak_ke', 'Anak ke', 'required|trim');
        $this->form_validation->set_rules('tgl_persalinan', 'Tgl Persalinan', 'required|trim');
        $this->form_validation->set_rules('jenis_persalinan', 'Jenis Persalinan', 'required|trim');
        $this->form_validation->set_rules('Keadaan_bayi', 'Keadaan Bayi', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('bb/tb_persalinan', 'BB/TB', 'required|trim');
        $this->form_validation->set_rules('tgl_kematianibu', 'Tgl Kematian ibu', 'required|trim');
        $this->form_validation->set_rules('keterangan_persalinan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Form Persalinan";
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('laporanpersalinan/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nama_suami' => $this->input->post('nama_suami'),
                'umur_persalinan' => $this->input->post('umur_persalinan'),
                'alamat_persalinan' => $this->input->post('alamat_persalinan'),
                'anak_ke' => $this->input->post('anak_ke'),
                'tgl_persalinan' => $this->input->post('tgl_persalinan'),
                'jenis_persalinan' => $this->input->post('jenis_persalinan'),
                'Keadaan_bayi' => $this->input->post('Keadaan_bayi'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'bb/tb_persalinan' => $this->input->post('bb/tb_persalinan'),
                'tgl_kematianibu' => $this->input->post('tgl_kematianibu'),
                'keterangan_persalinan' => $this->input->post('keterangan_persalinan'),
            ];
            $this->Modelpersalinan->simpan($data);
            $this->session->set_flashdata('message', 'data berhasil ditambahkan');
            redirect('laporanpersalinan');
        }
    }
}
