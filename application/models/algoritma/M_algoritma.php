<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_algoritma extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function list_setting()
    {
        $query=$this->db->get('perjalanan');
        return $query->row();
    }

    public function getData(){
        return $this->db->get_where('perjalanan',['id'=>1])
                 ->row();
    }

    public function prosesdeteksi()
    {
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        
        //insert ke perjalanan
        $this->db->insert('perjalanan', [
        'tanggal' => $created_at]);
    }
}