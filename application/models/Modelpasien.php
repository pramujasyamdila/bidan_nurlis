<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelpasien extends CI_Model
{


    public function getpasien()
    {
        $data = $this->db->get('tbl_pasien');
        return $data;
    }

    public function simpan()
    {
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
        $this->db->insert('tbl_pasien', $data);
    }
}
