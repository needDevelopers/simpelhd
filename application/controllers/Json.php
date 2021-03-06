<?php

/**
* 
*/
require APPPATH.'third_party/api/Grid_Controller.php';


class Json extends Grid_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function get_groups_post()
	{
		$data = $this->db->get('groups')->result_array();
		$this->response($data);
	}

	public function get_nik_post()
	{
		$data = $this->db->get('person')->result_array();
		$this->response($data);
	}

	public function get_name_post()
	{
		$data = array(
			array('name'=>'ammar'),
		);
		$this->response($data);
	}

	// person
	public function get_religions_post()
	{
		$data = array(
			array('name'=>'Islam'),
			array('name'=>'Kristen Protestan'),
			array('name'=>'Kristen Katolik'),
			array('name'=>'Hindu'),
			array('name'=>'Buddha'),
			array('name'=>'Kong Hu Cu')
		);
		$this->response($data);
	}
	public function get_pekerjaan_post()
	{
		$data = array(
			array('name'=>'Arsitek'),
			array('name'=>'Apoteker'),
			array('name'=>'Akuntan'),
			array('name'=>'Aktor/Aktris'),
			array('name'=>'Atlet'),
			array('name'=>'Bidan'),
			array('name'=>'Dokter'),
			array('name'=>'Dosen'),
			array('name'=>'Direktur'),
			array('name'=>'Desainer'),
			array('name'=>'Guru'),
			array('name'=>'Hakim'),
			array('name'=>'Jaksa'),
			array('name'=>'Kasir'),
			array('name'=>'Kondektur'),
			array('name'=>'Koki'),
			array('name'=>'Karyawan'),
			array('name'=>'Masinis'),
			array('name'=>'Model'),
			array('name'=>'Nelayan'),
			array('name'=>'Novelis'),
			array('name'=>'Nakhoda'),
			array('name'=>'Penyanyi'),
			array('name'=>'Pengacara'),
			array('name'=>'Programmer'),
			array('name'=>'Polisi'),
			array('name'=>'Pramugari'),
			array('name'=>'Perawat'),
			array('name'=>'Penerjemah'),
			array('name'=>'Pilot'),
			array('name'=>'Pramusaji'),
			array('name'=>'Presiden'),
			array('name'=>'Penari'),
			array('name'=>'Pemadam Kebakaran'),
			array('name'=>'Pelayan'),
			array('name'=>'Petani/Pekebun'),
			array('name'=>'Resepsionis'),
			array('name'=>'Satpam'),
			array('name'=>'Seniman'),
			array('name'=>'Sopir'),
			array('name'=>'Sekretaris'),
			array('name'=>'Tentara'),
			array('name'=>'Video-editor'),
			array('name'=>'Wartawan'),
			array('name'=>'Pelajar/Mahasiswa')
		);
		$this->response($data);
	}

	public function get_desa_post()
	{
		$json_file 		= APPPATH.'json/desa.json';
		$json_content 	= file_get_contents($json_file);
		$data 			= json_decode($json_content, true);
		$this->response($data);
	}

	public function get_kecamatan_post()
	{
		$json_file 		= APPPATH.'json/kecamatan.json';
		$json_content 	= file_get_contents($json_file);
		$data 			= json_decode($json_content, true);
		$this->response($data);
	}

	public function get_kota_kabupaten_post()
	{
		$json_file 		= APPPATH.'json/kota-kabupaten.json';
		$json_content 	= file_get_contents($json_file);
		$data 			= json_decode($json_content, true);
		$this->response($data);
	}

	public function get_provinsi_post()
	{
		$json_file 		= APPPATH.'json/provinsi.json';
		$json_content 	= file_get_contents($json_file);
		$data 			= json_decode($json_content, true);
		$this->response($data);
	}
}