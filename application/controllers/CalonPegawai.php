<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalonPegawai extends CI_Controller {

	function index() {
		$data	= $this->public_data;
		$data['title']='CalonPegawai';
		$data['page']='CalonPegawai';
		$data['content']='Home/index';
		$this->load->view('Home/index', $data);
	}

	public function saveData()
	{
		$id = $this->input->post('calon_pegawai_id');
		$data = array(
			'name' => $this->input->post('name'),
			'usia' => $this->input->post('usia'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'tempat_pendidikan' => $this->input->post('tempat_pendidikan'),
			'pengalaman_kerja' => $this->input->post('pengalaman_kerja'),
			'status_pernikahan' => $this->input->post('status_pernikahan'),
			'jarak' => $this->input->post('jarak'),
			'is_active' => $this->input->post('is_active'),
		);
		if($id){
			$this->db->where('calon_pegawai_id',$id)->update('calon_pegawai',$data);
		}else{
			$this->db->insert('calon_pegawai',$data);
		}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			echo 'failed'; die;
		}else{
			$this->db->trans_commit();
			echo 'success';
		}
	}

	public function update()
	{
		
	}

}

/* End of file KelKriteria.php */
/* Location: ./application/controllers/KelKriteria.php */