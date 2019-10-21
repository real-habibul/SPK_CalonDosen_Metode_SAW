<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UjiLolos extends CI_Controller {

	public function index()
	{
		$data['title'] = 'UJI Calon Dosen';
		$data['allData'] = $this->M_db->get_all('bobot_kriteria');
		$data['dataKelompok'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

	public function hitung()
	{
		//TASK 1
		// $bkTotal = $this->M_db->get_all('bobot_kriteria'); 
		$this->db->trans_begin();
		$jumlah = $this->db->query('SELECT SUM(nilai) AS jumlah FROM bobot_kriteria');
		$jumlah1 = $this->M_db->query('SELECT SUM(nilai) AS jumlah FROM bobot_kriteria');
		$data['jumlah1'] = $jumlah1;

		if ($this->db->trans_status() === FALSE)
		{
			printf("salah");die();
		    $this->db->trans_rollback();
		}
		else
		{
	        $this->db->trans_commit();
		}













		$data['title'] = 'UJI Calon Dosen';
		$data['allData'] = $this->M_db->get_all('bobot_kriteria');
		$data['dataKelompok'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);	
	}

}

/* End of file UjiLolos.php */
/* Location: ./application/controllers/UjiLolos.php */