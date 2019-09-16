<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_DB extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function query($q){
		$query = $this->db->query($q);
		return $query;
	}

	public function peserta($id)
	{
		$this->db->where('member_id', $id);
		return $this->db->get('hgent_members_detail')->result_array();
	}

	public function get_all($table)
	{
		$query = $this->db->get($table);
		return $query;
	}

	public function get_all_order($table,$field,$order)
	{
		$query = $this->db->order_by($field, $order)->get($table);
		return $query;
	}

	public function update($table, $where, $data)
	{
		$query = $this->db->where($where)->update($table, $data);
		return $query;
	}

	public function simpan($table, $data)
	{
		$query = $this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function cek($table,$select,$where)
	{
		$query = $this->db->select($select)->where($where)->get($table);
		return $query;
	}

	public function jumlah_total($table, $where)
	{
		$this->db->select('*')->where($where);
		$query = $this->db->get($table);
		return $query->num_rows();
	}

}

/* End of file M_DB.php */
/* Location: ./application/models/M_DB.php */