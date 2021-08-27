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

		return $this->db->get($this->produk);
	}
	public function get_data_merk($id=null)
	{
		if($id != null){
			$this->db->where("$this->produk.id", $id);
		}
		$this->db->join($this->merk, "$this->merk.id = $this->produk.id_merk");

		return $this->db->get($this->produk);
	}
	public function get_data_size($id=null)
	{
		if($id != null){
			$this->db->where("$this->produk.id", $id);
		}
		$this->db->join($this->size, "$this->size.id = $this->produk.id_size");

		return $this->db->get($this->produk);
	}
}
