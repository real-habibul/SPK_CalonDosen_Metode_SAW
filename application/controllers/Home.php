<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		// $data['allData'] = $this->M_db->get_all_order('contact','contact_id','Desc');
		// $data['content'] = 'Dashboard/AllData.php';
		$this->load->view('Home/Index.php', $data);
	}

}