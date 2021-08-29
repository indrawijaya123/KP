<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	protected $admin = 'admin';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function perbaharui_password($data)
	{
		$this->db->where("$this->admin.id_admin",1);
		$this->db->update($this->admin,$data);
	}

	public function validasi_login($username)
	{
		$this->db->where('username', $username);
		return $this->db->get($this->admin);
	}
}
