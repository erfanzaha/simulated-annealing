<?php
//menggabungkan semua bagian layout menjadi satu
//if($this->session->userdata('akses')=='3'){
			require_once('breadcum.php');
			require_once('css.php');
			require_once('header.php');
			require_once('js.php');
			require_once('footer.php');
			require_once('modal.php');
			require_once('navbar.php');
			
//}else{
	//	$this->session->set_flashdata('warning', 'Anda Belum Login');
    //       redirect(base_url('login'),'refresh');
//}