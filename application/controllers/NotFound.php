<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index(){
		$this->themes->Def('errors/error-404-customer');
	}

}
