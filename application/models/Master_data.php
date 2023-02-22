<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_data extends CI_Model
{
    public function get_provinsi()
    {
        $query = "SELECT nama_provinsi FROM master_provinsi";
        return $this->db->query($query)->result_array();
    }
    

    public function get_keahlian()
    {
        $query = "SELECT nama_keahlian FROM master_bidang_keahlian";
        return $this->db->query($query)->result_array();
    }


    public function get_pendidikan()
    {
        $query = "SELECT nama_pendidikan FROM master_pendidikan";
        return $this->db->query($query)->result_array();
    }
}