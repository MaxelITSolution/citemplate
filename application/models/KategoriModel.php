<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  	protected $table = "kjm_barang_kategori as b";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{

	}
	public function all($kode = "") {
		$ret = $this
			->db
			->from("kjm_barang_kategori")
			->order_by("kbarang_nama","asc")
			->where("kbarang_status",1)
			->get();
		return $ret->result();
	}
	public function find($id) {
		$ret = $this
			->db
			->from("kjm_barang_kategori")
			->where("kbarang_id",$id)
			->get();
		return $ret->row();
	}
	public function insert($data) {
		$this
			->db
			->insert('kjm_barang_kategori',$data);
		return $this->db->insert_id();
	}
	public function update($data,$where) {
		return $this
			->db
			->where($where)
			->update($this->table,$data);
	}
}
