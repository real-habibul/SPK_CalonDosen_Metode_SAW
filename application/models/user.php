 <?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class User extends CI_Model
	 {
	 	public function login($username,$password)
	 	{
	 		$this->db->select('users_id,username,password,created_date');
	 		$this->db->from('users');
	 		$this->db->where('username',$username);
	 		$this->db->where('password', MD5($password));
	 		$query = $this->db->get();
	 		if($query->num_rows()==1){
	 			return $query->result();
	 		}else{
	 			return false;
	 		}
	 		
	 	}
	 
	 	
	 	// public function insert()
	 	// {
	 	// 	$data = array(
	 	// 		'username' => $this->input->post('username'),
	 	// 		'password' => md5($this->input->post('password')),
	 	// 		'created_date' => $this->input->post('created_date')
	 	// 	);
	 	// 	$this->db->insert('spk_calondosen',$data);
	 	// }
	 }

	 
	 /* End of file user.php */
	 /* Location: ./application/models/user.php */ ?>