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
		$this->db->order_by("$this->merek.id", "DESC");
		return $this->db->get($this->merek);
	}

	public function simpan_data_merek($data)
	{
		$this->db->insert($this->merek,$data);
	}

	public function perbaharui_data_merek($data,$idx)
	{
		$this->db->where("$this->merek.id",$idx);
		$this->db->update($this->merek,$data);
	}

	public function hapus_merek($id)
	{
		$this->db->where("$this->merek.id", $id);
		$this->db->delete($this->merek);
	}


}
