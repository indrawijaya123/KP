<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_size extends CI_Model
{
	protected $size = 'size';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data_size($id = null)
	{
		if ($id != null) {
			$this->db->where("$this->size.id", $id);
		}
		$this->db->order_by("$this->size.id", "DESC");
		return $this->db->get($this->size);
	}

	public function simpan_data_size($data)
	{
		$this->db->insert($this->size,$data);
	}

	public function perbaharui_data_size($data,$idx)
	{
		$this->db->where("$this->size.id",$idx);
		$this->db->update($this->size,$data);
	}

	public function hapus_size($id)
	{
		$this->db->where("$this->size.id", $id);
		$this->db->delete($this->size);
	}


}
