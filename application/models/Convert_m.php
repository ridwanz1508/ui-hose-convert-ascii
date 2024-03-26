<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Convert_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function conv_1()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1012');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_2()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1013');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_3()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1014');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_4()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1015');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_5()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1016');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_6()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1017');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_7()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1018');
		$query = $this->db->get();
		return $query->result();
	}

	public function conv_8()
	{
		$this->db->select('*');
		$this->db->from('tb_convert');
		$this->db->where('freg_code', 'D1019');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Convert_m.php */
/* Location: ./application/models/Convert_m.php */