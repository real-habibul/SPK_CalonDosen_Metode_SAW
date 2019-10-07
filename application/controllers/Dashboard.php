<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		// $data['allData'] = $this->M_db->get_all_order('contact','contact_id','Desc');
		$data['content'] = 'Dashboard/AllData.php';
		$this->load->view('AdmIn/vTemplete', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */