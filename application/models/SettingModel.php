<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingModel extends CI_Model {

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
  	protected $table = "wrg_setting";

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
			->order_by("setting_key","asc")
			->get();
		return $ret->result();
	}
	public function getArray() {
		$all = $this->all();
		foreach($all as $a) {
			$ret[$a->setting_key] = $a->setting_value;
		}
		return $ret;
	}
	public function find($id) {
		$ret = $this
			->db
			->from($this->table)
			->where("setting_key",$id)
			->get();
		return $ret->row();
	}
	public function change($key,$value) {
		$this
			->db
			->delete($this->table,'setting_key = "'.$key.'"');
		$insert["setting_key"] = $key;
		$insert["setting_value"] = $value;
		$ret = $this
			->db
			->insert($this->table,$insert);
		return $ret;
	}
	public function getAllKantor() {
		$ret = $this
			->db
			->from("wrg_kantor")
			->where("kantor_status",1)
			->order_by("kantor_alamat2","ASC")
			->get();
		return $ret->result();
	}
	public function findKantor($id) {
		$ret = $this
			->db
			->from("wrg_kantor")
			->where("kantor_id",$id)
			->get();
		return $ret->row();
	}
}
