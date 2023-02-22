<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_member extends CI_Model
{
    public function get_data_member()
    {
        $query = "SELECT * FROM user";
        return $this->db->query($query)->result_array();
    }
    
}