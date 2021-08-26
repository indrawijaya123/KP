<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis extends CI_Model
{
	protected $jenis = 'kategori';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data_jenis($id = null)
	{
		if ($id != null) {
			$this->db->where("$this->jenis.id", $id);
		}
		$this->db->order_by("$this->jenis.id", "DESC");
		return $this->db->get($this->jenis);
	}

	public function simpan_data_jenis($data)
	{
		$this->db->insert($this->jenis,$data);
	}

	public function perbaharui_data_jenis($data,$idx)
	{
		$this->db->where("$this->jenis.id",$idx);
		$this->db->update($this->jenis,$data);
	}

	public function hapus_jenis($id)
	{
		$this->db->where("$this->jenis.id", $id);
		$this->db->delete($this->jenis);
	}


}
