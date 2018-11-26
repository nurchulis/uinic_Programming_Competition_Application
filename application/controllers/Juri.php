
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Juri extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model('M_juri');

		$this->load->model('M_home');
		
	}
	public function index($page='Home',$no= null)
	{
		$data['ambil_team_selesai'] = $this->M_juri->ambil_team_selesai();
		$data['ambil_jawaban_per_tim']=$this->M_juri->ambil_jawaban_per_tim($no)->result();
		$data['ambil_soal_selesai'] = $this->M_juri->ambil_soal_selesai($no);
		$this->load->view('Juri/'.$page,$data);
	}
	

	
}
