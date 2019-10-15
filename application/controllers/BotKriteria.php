<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BotKriteria extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Bobot Kriteria';
		$data['allData'] = $this->M_db->get_all('bobot_kriteria');
		$data['dataKelompok'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'BotKriteria/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

	public function saveData()
	{
		$this->db->trans_begin();
		// $session_user = $this->session->userdata('session_user');
		$this->form_validation->set_rules('nama', 'Nama Bobot Kriteria', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('error', validation_errors());
		} else {
			
			$data = array(
				'nama' => $this->input->post('nama'),
				'nilai' => $this->input->post('nilai'),
				'kelompok_kriteria' => $this->input->post('kelompok_kriteria'),
				'costbenefit' => $this->input->post('costbenefit')
				// 'modified_by' => $session_user,
				// 'modified_date' => date('Y-m-d H:i:s')
				// 'is_active' => 1
				);
			// print_r($data);die();
			$this->M_db->simpan('bobot_kriteria', $data);
			$this->db->trans_commit();
		}
		redirect(base_url().'AdmIn/Bobot-Kriteria');
	}

	public function updateData($bobot_kriteria_id)
	{
		$this->input->get("bobot_kriteria_id");
		$this->db->trans_begin();
	}
}

/* End of file BotKriteria.php */
/* Location: ./application/controllers/BotKriteria.php */