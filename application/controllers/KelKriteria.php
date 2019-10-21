<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelKriteria extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Kelompok Kriteria';
		$data['allData'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'KelKriteria/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

	public function saveData()
	{
		$this->db->trans_begin();
		// $session_user = $this->session->userdata('session_user');
		$this->form_validation->set_rules('name', 'Nama Kriteria', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('error', validation_errors());
		} else {
				$range_1 = $this->input->post('range_1');
					if ($range_1 == '') { $range_1 = NULL; }
				$nilai_r1 = $this->input->post('nilai_r1');
					if ($nilai_r1 == '0') { $nilai_r1 = NULL; }

				$range_2 = $this->input->post('range_2');
					if ($range_2 == '') { $range_2 = NULL; }
				$nilai_r2 = $this->input->post('nilai_r2');
					if ($nilai_r2 == '0') { $nilai_r2 = NULL; }

				$range_3 = $this->input->post('range_3');
					if ($range_3 == '') { $range_3 = NULL; }
				$nilai_r3 = $this->input->post('nilai_r3');
					if ($nilai_r3 == '0') { $nilai_r3 = NULL; }

				$range_4 = $this->input->post('range_4');
					if ($range_4 == '') { $range_4 = NULL; }
				$nilai_r4 = $this->input->post('nilai_r4');
					if ($nilai_r4 == '0') { $nilai_r4 = NULL; }

				$range_5 = $this->input->post('range_5');
					if ($range_5 == '') { $range_5 = NULL; }
				$nilai_r5 = $this->input->post('nilai_r5');
					if ($nilai_r5 == '0') { $nilai_r5 = NULL; }
			
			$data = array(
				'name' => $this->input->post('name'),
				'jenis' => $this->input->post('jenis'),
				'range_1' => $range_1,
				'nilai_r1' => $nilai_r1,
				'range_2' => $range_2,
				'nilai_r2' => $nilai_r2,
				'range_3' => $range_3,
				'nilai_r3' => $nilai_r3,
				'range_4' => $range_4,
				'nilai_r4' => $nilai_r4,
				'range_5' => $range_5,
				'nilai_r5' => $nilai_r5,
				// 'modified_by' => $session_user,
				// 'modified_date' => date('Y-m-d H:i:s')
				'is_active' => 1
				);
			// print_r($data);die();
			$this->M_db->simpan('kelompok_kriteria', $data);
			$this->db->trans_commit();
		}
		redirect(base_url().'AdmIn/Kelompok-Kriteria');
	}

	public function updateData()
	{
		$this->db->trans_begin();
		$where = array (
			'kelompok_kriteria_id' => $this->input->post("id")
			);

		$range_1 = $this->input->post('range_1');
			if ($range_1 == '') { $range_1 = NULL; }
		$nilai_r1 = $this->input->post('nilai_r1');
			if ($nilai_r1 == '0') { $nilai_r1 = NULL; }

		$range_2 = $this->input->post('range_2');
			if ($range_2 == '') { $range_2 = NULL; }
		$nilai_r2 = $this->input->post('nilai_r2');
			if ($nilai_r2 == '0') { $nilai_r2 = NULL; }

		$range_3 = $this->input->post('range_3');
			if ($range_3 == '') { $range_3 = NULL; }
		$nilai_r3 = $this->input->post('nilai_r3');
			if ($nilai_r3 == '0') { $nilai_r3 = NULL; }

		$range_4 = $this->input->post('range_4');
			if ($range_4 == '') { $range_4 = NULL; }
		$nilai_r4 = $this->input->post('nilai_r4');
			if ($nilai_r4 == '0') { $nilai_r4 = NULL; }

		$range_5 = $this->input->post('range_5');
			if ($range_5 == '') { $range_5 = NULL; }
		$nilai_r5 = $this->input->post('nilai_r5');
			if ($nilai_r5 == '0') { $nilai_r5 = NULL; }

		$data = array(
			'name' => $this->input->post('name'),
			'jenis' => $this->input->post('jenis'),
			'range_1' => $range_1,
			'nilai_r1' => $nilai_r1,
			'range_2' => $range_2,
			'nilai_r2' => $nilai_r2,
			'range_3' => $range_3,
			'nilai_r3' => $nilai_r3,
			'range_4' => $range_4,
			'nilai_r4' => $nilai_r4,
			'range_5' => $range_5,
			'nilai_r5' => $nilai_r5,
			// 'modified_by' => $session_user,
			// 'modified_date' => date('Y-m-d H:i:s')
			'is_active' => 1
			);

		// print_r($data);die();
		$this->M_db->update('kelompok_kriteria', $where, $data);
		$this->db->trans_commit();

		redirect(base_url().'AdmIn/Kelompok-Kriteria');
	}

}

/* End of file KelKriteria.php */
/* Location: ./application/controllers/KelKriteria.php */