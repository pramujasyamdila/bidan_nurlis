<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelbidan extends CI_Model
{


    public function getbidan()
    {
        $data = $this->db->get('tbl_bidan');
        return $data;
    }

    public function simpan($namaFotoBaru)
    {
        $data = [
            'foto' => $namaFotoBaru,
            'nama_bidan' => $this->input->post('nama_bidan'),
            'posisi_bidan' => $this->input->post('posisi_bidan')
        ];
        $this->db->insert('tbl_bidan', $data);
    }
}
