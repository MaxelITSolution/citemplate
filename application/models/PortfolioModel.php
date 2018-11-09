<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PortfolioModel extends CI_Model {

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
  	protected $table = "wrg_portfolio as pf";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{

	}
	public function all() {
		$this->db
			->from($this->table)
			->join("wrg_lokasi as l","l.lokasi_id = pf.lokasi_id")
			->where("pf.portfolio_status","1")
			->order_by("portfolio_judul","asc");
		$ret = $this->db->get();
		return $ret->result();
	}
	public function find($kode = "") {
		$ret = $this
			->db
			->from($this->table)
			->join("wrg_lokasi as l","l.lokasi_id = pf.lokasi_id")
			->where("pf.portfolio_id",$kode)
			->where("pf.portfolio_status","1")
			->order_by("portfolio_judul","asc")
			->get();
		return $ret->row();
	}
	public function getList($lokasi="1",$page=0) {
		$this->db
			->from($this->table)
			->join("wrg_lokasi as l","l.lokasi_id = pf.lokasi_id")
			->where("portfolio_status","1")
			->where("pf.lokasi_id",$lokasi);
		if ($page > 0) {
			$this->db->limit(4,(($page-1) * 4));
		}			
		$this->db->order_by("portfolio_judul","asc");
		$ret = $this->db->get();
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
			->insert("wrg_portfolio",$data);
		return $this->db->insert_id();
	}
	public function update($data,$where) {
		return $this
			->db
			->where($where)
			->update($this->table,$data);
	}
}
