<?php
class M_home extends CI_Model{

function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
function ambil_player(){
		$nim =$this->session->userdata("nama");
		$this->db->select('*');
		$this->db->from('player');
		$this->db->join('tim as team','team.id_team = player.id_team');
		$this->db->where('username',$nim);
		return $query = $this->db->get()->result();
	}
function ambil_team($okey){
	$this->db->select('*');
	$this->db->from('player');
	$this->db->join('tim as team','team.id_team = player.id_team');
	$this->db->where('player.id_team',$okey);	
	return $query = $this->db->get()->result();
}
//function ambil_soal(){
//		return $this->db->get('sub_soal')->result();
//	}

public function ambil_soal()
{
    $this->db->order_by('id_soal','ASC');
    $query = $this->db->get('soal');
    $return = array();
    foreach ($query->result() as $category)
    {
        $return[$category->id_soal] = $category;
        $return[$category->id_soal]->subs = $this->ambil_sub_soal($category->id_soal);
     
    }
    return $return;
}

public function count_sub_soal(){
		return $this->db->count_all_results('sub_soal');
	}
public function count_sub_soal_selesai($okey){
		$this->db->where('id_team',$okey);
		return $this->db->count_all_results('selesai');
	}

function update_waktu_mulai($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
}	




public function ambil_sub_soal($id)
{            

   	$this->db->select('*');
	$this->db->from('sub_soal');
    $this->db->where('id_soal', $id);
    $this->db->order_by('sub_soal.id_sub_soal','ASC');
	return $query = $this->db->get()->result();
}

public function ambil_soal_selesai()
{
    $this->db->order_by('id_soal','ASC');
    $query = $this->db->get('soal');
    $return = array();
    foreach ($query->result() as $category)
    {
        $return[$category->id_soal] = $category;
        $return[$category->id_soal]->subs = $this->ambil_sub_soal_selesai($category->id_soal);
     
    }
    return $return;
}


public function ambil_sub_soal_selesai($id)
{            

	$ini =$this->session->userdata("nama_team");
   	$this->db->select('*');
	$this->db->from('selesai');
    $this->db->where('id_soal', $id);
    $this->db->where('id_team',$ini);
    $this->db->order_by('id_sub_soal','ASC');
	return $query = $this->db->get()->result();
}

function kirim_jawaban($data,$id_soal,$id_sub_soal,$id_team){
	$this->db->where('id_soal', $id_soal);
	$this->db->where('id_sub_soal', $id_sub_soal);
	$this->db->where('id_team',$id_team);
	$query = $this->db->get('selesai');
	if($query->num_rows() > 0)
	{
		 echo "<script>alert('Soal Sudah Di Jawab Silakan Edit Jawaban!'); location.href='".base_url()."Home';</script>";
	}else {	
			echo "<script>alert('Jawaban Sudah terikirim!'); location.href='".base_url()."Home';</script>";
	return $this->db->query("Insert into selesai value ('".$data['id']."','".$data['id_soal']."','".$data['id_sub_soal']."','".$data['id_team']."','".$data['jawaban']."','".$data['jawaban_file']."','".$data['type']."','".$data['waktu']."')");
	
	}

	
	}

function update_jawaban($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	


function update_status_online($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}