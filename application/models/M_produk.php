<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
	protected $produk = 'produk';
	protected $kategori = 'kategori';
	protected $merk = 'merk';
	protected $size = 'size';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data_produk($id=null)
	{
		if($id != null){
			$this->db->where("$this->produk.id", $id);
		}
		$this->db->join($this->kategori, "$this->kategori.id = $this->produk.id_kategori");
		$this->db->join($this->merk, "$this->merk.id = $this->produk.id_merk");
		$this->db->join($this->size, "$this->size.id = $this->produk.id_size");
		return $this->db->get($this->produk);
	}
	public function simpan_data_produk($data)
	{
		$this->db->insert($this->produk,$data);
	}

	public function perbaharui_data_produk($data,$idx)
	{
		$this->db->where("$this->produk.id",$idx);
		$this->db->update($this->produk,$data);
	}

	public function hapus_produk($id)
	{
		$this->db->where("$this->produk.id", $id);
		$this->db->delete($this->produk);
	}
}
