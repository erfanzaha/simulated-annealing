<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		isAuth();
	}

	public function index(){
        $data['title']      = "Tentang";
		$data['subTitle']   = "Tentang";	
		$data['active']     = "Tentang";
		$this->themes->Def('tentang/index',$data);
	}

}
