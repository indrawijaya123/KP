<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_merek extends CI_Model
{
	protected $merek = 'merk';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data_merek($id = null)
	{
		if ($id != null) {
			$this->db->where("$this->merek.id", $id);
		}
		return $this->db->get($this->merek);
	}


}
