<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UjiLolos extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Bobot Kriteria';
		$data['allData'] = $this->M_db->get_all('bobot_kriteria');
		$data['dataKelompok'] = $this->M_db->get_all('kelompok_kriteria');
		$data['content'] = 'UjiLolos/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

}

/* End of file UjiLolos.php */
/* Location: ./application/controllers/UjiLolos.php */