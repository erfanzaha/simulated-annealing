<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algoritma extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		isAuth();
		$this->load->library(array("googlemaps"));
		$this->load->model('algoritma/M_algoritma');
	}

	public function index(){
        $data['title']      = "Algoritma";
		$data['subTitle']   = "Algoritma";	
		$data['active']     = "Algoritma";
		
        $this->load->library('googlemaps');
        $setting = $this->m_algoritma->list_setting();
		// $datas 			  = $this->m_algoritma->getData();
        $config['center'] = "$setting->latitude, $setting->longitude";
        $config['zoom']   = '$setting->zoom';
        $this->googlemaps->initialize($config);

        $marker['position']  = "$setting->latitude, $setting->longitude";
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        
        $map 	 = $this->googlemaps->create_map();
        $maps 	 = array(
					'title' 	=> APP_NAME . $setting->tanggal,
					'title2' 	=> 'titik lokasi',
					'map' 		=> $map,
					'setting' 	=> $setting,
					'isi' 		=> 'algoritma/form/form-algoritma',
				);
		$this->themes->Def('algoritma/index',$data);
		// $this->load->view('themes/def/v_wrapper',$maps,false);
	}

	public function proses(){
		$data = $this->M_algoritma->proses();
		echo json_encode($msg);
	}

	// public function add()
 //    {
 //        $this->load->library('googlemaps');
 //        $setting            = $this->m_setting->list_setting();
 //        $config['center']   = "$setting->latitude, $setting->longitude";
 //        $config['zoom']     = "$setting->zoom";
 //        $this->googlemaps->initialize($config);

 //        $marker['position'] = "$setting->latitude, $setting->longitude";
 //        $marker['draggable']= true;
 //        $marker['ondragend']= 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
 //        $this->googlemaps->add_marker($marker);

 //        $map = $this->googlemaps->create_map();
 //        $this->form_validation->set_rules('latitude', 'Latitude', 'required',
 //            array('required' => '%s Harus Diisi'));
 //        $this->form_validation->set_rules('longitude', 'Longitude', 'required',
 //            array('required' => '%s Harus Diisi'));


 //        $data = array(
 //                    'title'     => APP_NAME. $setting->nama_wilayah,
 //                    'title2'    => 'Pilih titik',
 //                    'marker'  => $this->m_marker->lists(),
 //                    'map'       => $map,
 //                );
 //        $this->themes->Def('algoritma/index',$data);
 //    }
}
