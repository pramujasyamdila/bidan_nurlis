<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelpersalinan extends CI_Model
{


    public function getpersalinan()
    {
        $data = $this->db->get('tbl_persalinan');
        return $data;
    }

    public function simpan($data)
    {
        $result = $this->db->insert('tbl_persalinan', $data);
        return $result;
    }
}
