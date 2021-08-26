<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
	protected $produk = 'produk';
	protected $kategori = 'kategori';
	protected $merk = 'merk';
	protected $ukuran = 'size';

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
		$this->db->join($this->kategori, "$this->kategori.id = $this->produk.kategori_id");

		return $this->db->get($this->produk);
	}

}
