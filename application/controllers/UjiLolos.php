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
		$this->db->trans_begin();
		$jumlah=0;
		$data['bobotKriteria'] = $this->M_db->get_all('bobot_kriteria');
		foreach ($data['bobotKriteria']->result() as $value) {
			$jumlah+=$value->nilai;
		}
		$bobot = [];
		foreach ($data['bobotKriteria']->result() as $value) {
			$bobot[$value->bobot_kriteria_id] = $value->nilai / $jumlah;
		}
		$data['bobot']=$bobot;

		//TASK 2
		$data['calonPegawai'] = $this->M_db->get_all('calon_pegawai');
		
		//TASK 3
		$c1 = [];
		$data['kelompok_kriteria'] = $this->M_db->get_all('kelompok_kriteria');
		
		foreach ($data['calonPegawai']->result() as $cp) {
			$usia = $cp->usia;
			var_dump($usia);die();
		}

		$data['title'] = 'UJI Calon Dosen';
		$data['kelompokKriteria'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);	
	}

}

/* End of file UjiLolos.php */
/* Location: ./application/controllers/UjiLolos.php */