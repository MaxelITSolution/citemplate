<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {

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
  	protected $table = "wrg_barang as b";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{

	}
	public function find($kode = "") {
		$ret = $this
			->db
			->from($this->table)
			->join("wrg_barang_kategori as k","k.kbarang_id = b.kbarang_id")
			->join("wrg_barang_type as t","t.tbarang_id = b.tbarang_id")
			->join("wrg_lokasi as l","l.lokasi_id = b.lokasi_id")
			->where("b.barang_id",$kode)
			->where("b.barang_status","1")
			->order_by("barang_nama","asc")
			->get();
		return $ret->row();
	}
	public function getList($cat = "",$type="",$location="") {
		$this->db
			->from($this->table)
			->join("wrg_barang_kategori as k","k.kbarang_id = b.kbarang_id")
			->join("wrg_lokasi as l","l.lokasi_id = b.lokasi_id")
			->where("b.barang_status","1")
			->order_by("barang_nama","asc");
		if ($cat != "") {
			$this->db->where("b.kbarang_id",$cat);
		}
		if ($type != "") {
			$this->db->where("b.tbarang_id",$type);
		}
		if ($location != "") {
			$this->db->where("b.lokasi_id",$location);
		}
		$ret = $this->db->get();
		return $ret->result();
	}
	public function getListHighlight() {
		$ret = $this
			->db
			->from($this->table)
			->join("wrg_barang_kategori as k","k.kbarang_id = b.kbarang_id")
			->join("wrg_lokasi as l","l.lokasi_id = b.lokasi_id")
			->where("b.barang_highlight","1")
			->where("b.barang_status","1")
			->order_by("barang_nama","asc")
			->limit(0,4)
			->get();
		return $ret->result();
	}
	public function getListKategori() {
		$ret = $this
			->db
			->from("wrg_barang_kategori")
			->order_by("kbarang_nama","asc")
			->get();
		return $ret->result();
	}
	public function getListType() {
		$ret = $this
			->db
			->from("wrg_barang_type")
			->order_by("tbarang_nama","asc")
			->get();
		return $ret->result();
	}
	public function getListLokasi() {
		$ret = $this
			->db
			->from("wrg_lokasi")
			->where("lokasi_status",'1')
			->order_by("lokasi_nama","asc")
			->get();
		return $ret->result();
	}

	public function insert($data) {
		$this
			->db
			->insert("wrg_barang",$data);
		return $this->db->insert_id();
	}
	public function update($data,$where) {
		return $this
			->db
			->where($where)
			->update($this->table,$data);
	}
	public function all() {
		$ret = $this
			->db
			->from($this->table)
			->join("wrg_barang_kategori as k","k.kbarang_id = b.kbarang_id")
			->join("wrg_barang_type as t","t.tbarang_id = b.tbarang_id")
			->join("wrg_lokasi as l","l.lokasi_id = b.lokasi_id")
			->where("b.barang_status","1")
			->order_by("barang_nama","asc")
			->get();
		return $ret->result();
	}
	public function search($term) {
		$ret = $this
			->db
			->select("b.*, k.kbarang_nama")
			->from("kjm_barang b")
			->join("kjm_barang_kategori as k","k.kbarang_id = b.kbarang_id")
			->where("(k.kbarang_nama LIKE '%".$term."%' OR b.barang_nama LIKE '%".$term."%' OR b.barang_keterangan LIKE '%".$term."%')")
			->where("b.barang_status",1)
			->where("k.kbarang_status",1)
			->get();
		return $ret->result();
	}
	public function pic_list($id) {
		$ret = glob("./public/img/barang/$id/$id-*.jpg");
		return $ret;
	}
	public function pic_nextid($id) {
		$fn = glob("./public/img/barang/$id/$id-*.jpg");
		$maxid = 0;
		$num = 0;
		foreach($fn as $row) {
			$num = basename($row);
			$num = str_replace($id."-", "", $num);
			$num = str_replace(".jpg", "", $num);
			if (is_numeric($num)) {
				if ($maxid < $num) $maxid = $num;
			}
		}		
		return ++$maxid;
	}
}
