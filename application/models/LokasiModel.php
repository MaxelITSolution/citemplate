<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiModel extends CI_Model {

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
  	protected $table = "wrg_lokasi as l";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{

	}
	public function all() {
		$ret = $this
			->db
			->from($this->table)
			->where("l.lokasi_status",1)
			->order_by("l.lokasi_nama","asc")
			->get();
		return $ret->result();
	}
	public function find($id) {
		$ret = $this
			->db
			->select("*")
			->from($this->table)
			->where("l.lokasi_id",$id)
			->where("l.lokasi_status",1)
			->get();
		return $ret->row();
	}
	public function insert($data) {
		$this
			->db
			->insert("wrg_lokasi",$data);
		return $this->db->insert_id();
	}
	public function update($data,$where) {
		return $this
			->db
			->where($where)
			->update($this->table,$data);
	}
}
