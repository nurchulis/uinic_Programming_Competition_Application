<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model('M_home');
		 if($this->session->userdata('status') != "login"){
			redirect(base_url("/Login"));
                        $this->session->set_userdata('username','1');
		} 
	}
	public function index()
	{	$ini =$this->session->userdata("nama");
		$fact=$this->db->query('select * from player where username="'.$ini.'"');
		$crut=$fact->result();
		$okey=$crut[0]->id_team;

		$data_session = array(
				'nama_team' => $okey,
				'id_team' =>$okey

				);
		$this->session->set_userdata($data_session);

		$data['jumlah_soal']=$this->M_home->count_sub_soal();
		$data['jumlah_soal_selesai']=$this->M_home->count_sub_soal_selesai($okey);
		$data['nama_player'] = $this->M_home->ambil_player();
		$data['data_team'] = $this->M_home->ambil_team($okey);
		$data['ambil_soal'] = $this->M_home->ambil_soal();
		$data['ambil_soal_selesai'] = $this->M_home->ambil_soal_selesai($okey);
		$this->load->view('Home/Home',$data);
	}
    

	
}