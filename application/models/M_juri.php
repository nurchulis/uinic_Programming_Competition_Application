<?php
class M_juri extends CI_Model{

function ambil_team_selesai(){

   	$this->db->select('*');
	$this->db->from('tim');
	$this->db->order_by('wak.waktu_akhir','DESC');
	$this->db->join('waktu as wak','wak.id_team = tim.id_team');
    return $query = $this->db->get()->result();
}
  function ambil_jawaban_per_tim($no){

      		$this->db->where('id_team', $no);
      		return $this->db->get('selesai');
      	}

public function ambil_soal_selesai()
{	
	$no=$this->uri->segment('3');
    $this->db->order_by('id_soal','ASC');
    $query = $this->db->get('soal');
    $return = array();
    foreach ($query->result() as $category)
    {
        $return[$category->id_soal] = $category;
        $id=$category->id_soal;
        $return[$category->id_soal]->subs = $this->ambil_sub_soal_selesai($id,$no);
     
    }
    return $return;
}


public function ambil_sub_soal_selesai($id,$no)
{ 

   	$this->db->select('*');
	$this->db->from('selesai');
    $this->db->where('id_soal', $id);
    $this->db->where('id_team',$no);
    $this->db->order_by('id_sub_soal','ASC');
	return $query = $this->db->get()->result();
}
}

?>