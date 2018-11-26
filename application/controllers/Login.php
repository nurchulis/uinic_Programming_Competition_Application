<?php
class Login extends CI_Controller {
	public $data = array();
	function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->helper('url');
		
	
	}
	function index(){
			 if($this->session->userdata('status') == "login"){
			redirect(base_url("home"));
		}else { 
		$this->load->view('Home/Login');
	}
}
	function aksi_login(){

		 if($this->session->userdata('status') == "login"){
			redirect(base_url("home"));
		}else { 
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
		'username' => $username,
		'password' => $password);
		$cek = $this->M_home->cek_login("player",$where)->num_rows();
		
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
		$ceklur=$this->db->query('select * from player where username="'.$username.'"');
  		$set=$ceklur->result();
  		$alah=$set[0]->sesi;

  		if($alah == 1){

		echo "<script>alert('Sesi Anda Sudah Berakhir!'); location.href='".base_url()."Login';</script>";
  		}
  		else{	
			
		$this->session->set_userdata($data_session);
		$ini =$this->session->userdata("nama");
		$data = array(
  		'status' => 1);
  		$where = array(
  		'username' => $ini
  		);
  		
  		
  			$ini =$this->session->userdata("nama");
		    $dataku = array(
  		    'sesi' => 1
  	        );


  	        $whereku = array(
  		    'username' => $ini
  	         );
  	      $this->M_home->update_status_online($whereku,$dataku,'player');		


  		$this->M_home->update_status_online($where,$data,'player');	

  		$fact=$this->db->query('select * from player where username="'.$ini.'"');
		$crut=$fact->result();
		$okey=$crut[0]->id_team;

		$fact2=$this->db->query('select * from waktu where id_team="'.$okey.'"');
		$crut2=$fact2->result();
		$okey2=$crut2[0]->id_waktu;

		$data2= array(
			'id_waktu' =>$okey2,
			'id_team'=>$okey,
			'waktu_mulai'=>date("Y-m-d H-i-s"),
  			'waktu_akhir' => date("Y-m-d H-i-s")			
  			);
		$where2 = array(
			'id_waktu'=> $okey2
		);

			$this->M_home->update_waktu_mulai($where2,$data2,'waktu');	

		
			redirect(base_url('Home'));
		}
		}else{
		  
			redirect(base_url('Login?login=Login Gagal'));
		}}
	}


	function logout(){
		$ini =$this->session->userdata("nama");
		$data = array(
  		'status' => 0
  	);


  	$where = array(
  		'username' => $ini
  	);
  	$this->M_home->update_status_online($where,$data,'player');	

  	$fact=$this->db->query('select * from player where username="'.$ini.'"');
		$crut=$fact->result();
		$okey=$crut[0]->id_team;

		$fact2=$this->db->query('select * from waktu where id_team="'.$okey.'"');
		$crut2=$fact2->result();
		$okey2=$crut2[0]->id_waktu;
		$waktu_mulai=$crut2[0]->waktu_mulai;
  		$data2= array(
			'id_waktu' =>$okey2,
			'id_team'=>$okey,
			'waktu_mulai'=>$waktu_mulai,
  			'waktu_akhir' => date("Y-m-d H-i-s")			
  			);
		$where2 = array(
			'id_waktu'=> $okey2
		);

			$this->M_home->update_waktu_mulai($where2,$data2,'waktu');	



		$this->session->sess_destroy();
		redirect(base_url('/Login'));
	}	
	}