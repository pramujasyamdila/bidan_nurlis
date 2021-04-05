<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modellanding extends CI_Model
{


    public function getpasien()
    {
        $data = $this->db->get('tbl_pasien');
        return $data;
    }

    public function simpan($data)
    {
        $result = $this->db->insert('tbl_pasien', $data);
        return $result;
    }
}
