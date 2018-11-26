<?php
class Kirim extends CI_Controller {
	public $data = array();
	function __construct(){
		parent::__construct();
		$this->load->model('M_home');
		$this->load->library('pagination');
		$this->load->helper('captcha');
		$this->load->library('upload');
		$this->load->helper('url');
	}




  public function kirim_jawaban(){
		$config['upload_path']          = './assets/file_jawaban/';
		$config['allowed_types']        = '*';
  		$config['encrypt_name']= false;
		
		$this->load->library('upload', $config);
  		$this->upload->initialize($config);

		if (!$this->upload->do_upload('jawaban_file')){
						

  		$id_soal = $this->input->post('id_soal');
  		$id_sub_soal = $this->input->post('id_sub_soal');
  		$id_team = $this->input->post('id_team');				
			$data= array(
			'id' =>'',
			'id_soal'=>$this->input->post('id_soal'),
			'id_sub_soal'=>$this->input->post('id_sub_soal'),
  			'id_team' =>$this->input->post('id_team'),
  			'type' => $this->input->post('type'),
  			'jawaban' =>$this->input->post('jawaban'),
  			'jawaban_file' =>'none',
  			'waktu' => date("Y-m-d H-i-s")			
  			);


			$this->M_home->kirim_jawaban($data,$id_soal,$id_sub_soal,$id_team);
			//redirect(base_url('Home'));
		}else{

  		$data = $this->upload->data();

  		$id_soal = $this->input->post('id_soal');
  		$id_sub_soal = $this->input->post('id_sub_soal');
  		$id_team = $this->input->post('id_team');
			$data= array(
			'id' =>'',
			'id_soal'=>$this->input->post('id_soal'),
			'id_sub_soal'=>$this->input->post('id_sub_soal'),
  			'id_team' =>$this->input->post('id_team'),
  			'type' => $this->input->post('type'),
  			'jawaban' =>$this->input->post('jawaban'),
  			'jawaban_file' =>$data['file_name'],
  			'waktu' => date("Y-m-d H-i-s")			
  			);

			$this->M_home->kirim_jawaban($data,$id_soal,$id_sub_soal,$id_team);
			
		}
	}


	public function edit_jawaban(){
				$config['upload_path']          = './assets/file_jawaban/';
				$config['allowed_types']        = '*';
  				$config['encrypt_name']= false;
		
				$this->load->library('upload', $config);
  				$this->upload->initialize($config);

				if(!$this->upload->do_upload('jawaban_file')){

						$data= array(
						'id' =>$this->input->post('id'),
						'id_soal'=>$this->input->post('id_soal'),
						'id_sub_soal'=>$this->input->post('id_sub_soal'),
  						'id_team' =>$this->input->post('id_team'),
  						'type' => $this->input->post('type'),
  						'jawaban' =>$this->input->post('jawaban'),
  						'jawaban_file' =>'none',
  						'waktu' => date("Y-m-d H-i-s")			
  						);

					$where = array(
						'id' =>$this->input->post('id'));			
					$this->M_home->update_jawaban($where,$data,'selesai');

					redirect(base_url("Home"));

				}else{
					$data = $this->upload->data();
					$config['upload_path']          = './assets/file_jawaban/';
					$config['allowed_types']        = '*';
  					$config['encrypt_name']= false;
		
					$this->load->library('upload', $config);
  					$this->upload->initialize($config);
					
						$data= array(
						'id' =>$this->input->post('id'),
						'id_soal'=>$this->input->post('id_soal'),
						'id_sub_soal'=>$this->input->post('id_sub_soal'),
  						'id_team' =>$this->input->post('id_team'),
  						'type' => $this->input->post('type'),
  						'jawaban' =>$this->input->post('jawaban'),
  						'jawaban_file' =>$data['file_name'],
  						'waktu' => date("Y-m-d H-i-s")			
  						);

					$where = array(
						'id' =>$this->input->post('id'));			
					$this->M_home->update_jawaban($where,$data,'selesai');

					redirect(base_url("Home"));
				}
			}	






}