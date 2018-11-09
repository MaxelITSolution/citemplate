<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleModel extends CI_Model {

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
  	protected $table = "wrg_article as a";

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
      ->where("a.article_id",$kode)
      ->where("a.article_status","1")
      ->order_by("article_date","desc")
      ->get();
    return $ret->row();
  }
	public function findFromUrl($url) {
		$ret = $this
			->db
			->from($this->table)
			->where("a.article_url",$url)
			->where("a.article_status","1")
			->get();
		return $ret->row();
	}
	public function insert($data) {
		$this
			->db
			->insert("wrg_article",$data);
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
			->where("a.article_status","1")
			->order_by("article_date","desc")
			->get();
		return $ret->result();
	}
	public function getIdFromUrl($url) {
		$id = 0;
		$ret = $this
			->db
			->from($this->table)
			->where("a.article_url",$url)
			->order_by("article_date","desc")
			->get();
		$res = $ret->row();		
		if ($res != null && $res->article_id > 0) $id = $res->article_id;
		return $id;
	}
}
