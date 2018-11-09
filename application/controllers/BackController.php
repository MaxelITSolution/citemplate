<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackController extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();		
		if (!$this->session->userdata("wrg_username")) {
			redirect("login");
		}
	}
	public function index() {
		$this->load->view('backend/landingView');
	}
	public function tempat($id = '') {
		$this->load->model("BarangModel","barang");
		if ($id == '') {
			$param['list'] = $this->barang->all();
			$this->load->view('backend/barangView',$param);
		} else {
			//$this->load->model("KategoriModel","kategori");
			$param['list_kategori'] = $this->barang->getListkategori();
			$param['list_lokasi'] = $this->barang->getListLokasi();
			$param['list_type'] = $this->barang->getListType();
			if ($id == '0') {
				$this->load->view('backend/barangView_tambah',$param);
			} else {
				$param['item'] = $this->barang->find($id);
				if ($param['item']->barang_status == 0) {
					redirect(site_url("backend/tempat"));
				}
				$this->load->view('backend/barangView_detail',$param);
			}
		}		
	}
	public function tempatPost() {
		$this->load->model("BarangModel","barang");
		if (isset($_POST['btn_delete'])) { 

			$where = "barang_id = '".$this->input->post('barang_id')."'";
			$update['barang_status'] = 0;
			$this->barang->update($update,$where);
			redirect(site_url("backend/tempat"));

		} else if (isset($_POST['btn_update'])) { 
			$id = $this->input->post('barang_id');

			if ($this->input->post("barang_siteplan_delete") != "") {
				$fp = "public/img/barang/".$id."/".$id."_siteplan.jpg";
				if (file_exists($fp)) {
					unlink($fp);
				}
			}
			if (!empty($_FILES['barang_siteplan']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_siteplan.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_siteplan");
			}

			if ($this->input->post("barang_banner_delete") != "") {
				$fp = "public/img/barang/".$id."/".$id."_banner.jpg";
				if (file_exists($fp)) {
					unlink($fp);
				}
			}
			if (!empty($_FILES['barang_banner']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_banner.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_banner");
			}


			if ($this->input->post("barang_cover_delete") != "") {
				$fp = "public/img/barang/".$id."/".$id."_cover.jpg";
				if (file_exists($fp)) {
					unlink($fp);
				}

			}
			if (!empty($_FILES['barang_cover']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_cover.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_cover");
			}

			if ($this->input->post("barang_ebrochure_delete") != "") {
				$fp = "public/img/barang/".$id."/".$id."_ebrochure.pdf";
				if (file_exists($fp)) {
					unlink($fp);
				}

			}
			if (!empty($_FILES['barang_ebrochure']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_ebrochure.pdf';
		        $config['allowed_types'] = 'pdf';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_ebrochure");
			}

			$where = "barang_id = '".$id."'";
			$update['barang_nama'] = $this->input->post("barang_nama");
			$update['kbarang_id'] = $this->input->post("kbarang_id");
			$update['tbarang_id'] = $this->input->post("tbarang_id");
			$update['lokasi_id'] = $this->input->post("lokasi_id");
			$update['barang_size'] = $this->input->post("barang_size");
			$update['barang_satuan'] = $this->input->post("barang_satuan");
			$update['barang_lat'] = $this->input->post("barang_lat");
			$update['barang_lng'] = $this->input->post("barang_lng");
			$update['barang_highlight'] = $this->input->post("barang_highlight",0);
			$update['barang_keterangan'] = $this->input->post("barang_keterangan");
			$update['barang_keterangan_pendek'] = $this->input->post("barang_keterangan_pendek");
			$update['barang_website'] = $this->input->post("barang_website");


			$this->barang->update($update,$where);

			redirect(site_url("backend/tempat/".$id));
		} else if (isset($_POST['btn_insert'])) { 

			$insert['barang_nama'] = $this->input->post("barang_nama");
			$insert['kbarang_id'] = $this->input->post("kbarang_id");
			$insert['tbarang_id'] = $this->input->post("tbarang_id");
			$insert['lokasi_id'] = $this->input->post("lokasi_id");
			$insert['barang_size'] = $this->input->post("barang_size");
			$insert['barang_satuan'] = $this->input->post("barang_satuan");
			$insert['barang_lat'] = $this->input->post("barang_lat");
			$insert['barang_lng'] = $this->input->post("barang_lng");
			$insert['barang_keterangan'] = $this->input->post("barang_keterangan");
			$insert['barang_keterangan_pendek'] = $this->input->post("barang_keterangan_pendek");
			$insert['barang_website'] = $this->input->post("barang_website");
			$insert['barang_highlight'] = $this->input->post("barang_highlight",0);
			$id = $this->barang->insert($insert);
			if (!empty($_FILES['barang_siteplan']['name']) && $id > 0) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_siteplan.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_siteplan");
			}
			if (!empty($_FILES['barang_banner']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_banner.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_banner");
			}
			if (!empty($_FILES['barang_cover']['name'])) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_cover.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_cover");
			}
			if (!empty($_FILES['barang_ebrochure']['name']) && $id > 0) {
		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '_ebrochure.pdf';
		        $config['allowed_types'] = 'pdf';
		        $config['max_size'] = 1000000;

				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("barang_ebrochure");
			}
			redirect(site_url("backend/tempat/0"));
		}
	}
	public function tempatpic($id = '') {
		if ($id == '') {
			redirect('backend/tempat');
		} else {
			
			$this->load->model("BarangModel","barang");
			$param['barang'] = $this->barang->find($id);
			$param['filelist'] = $this->barang->pic_list($id);			
			$param['nextid'] = $this->barang->pic_nextid($id);			
			$this->load->view('backend/barangPicView',$param);
		}		
	}
	//post dan hapus gamabr
	public function tempatpicPost() {
		$this->load->model("BarangModel","barang");
		if (isset($_POST['btn_delete'])) { 
			$id = $this->input->post("barang_id");			
			$fn = $this->input->post("galeri_filename");			
			$fp = "public/img/barang/".$id."/".$fn;
			echo $fp;
			if (file_exists($fp)) {
				unlink($fp);
			}
			redirect(site_url("backend/tempatpic/".$id));
		} else if (isset($_POST['btn_insert'])) { 			
			$id = $this->input->post("barang_id");			
			if (!empty($_FILES['galeri_insert']['name']) && $id > 0) {
				$this->load->model("BarangModel","brg");

				$id2 = $this->brg->pic_nextid($id);

		        $config['upload_path'] = './public/img/barang/'.$id;
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '-'.$id2.'.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("galeri_insert");
			}
			redirect(site_url("backend/tempatpic/".$id));
		}
	}
	public function kantor($id = '') {
		$this->load->model("SettingModel","setting");
		$param = array();
		if ($id == '') {
			$param['list'] = $this->setting->getAllKantor();
			$this->load->view('backend/kantorView',$param);
		} else {
			//$this->load->model("KategoriModel","kategori");
			if ($id == '0') {
				$this->load->view('backend/kantorView_tambah',$param);
			} else {
				$param['item'] = $this->setting->findKantor($id);
				if ($param['item']->kantor_status == 0) {
					redirect(site_url("backend/kantor"));
				}
				$this->load->view('backend/kantorView_detail',$param);
			}
		}		
	}
	public function kantorPost() {
		$this->load->database();
		if (isset($_POST['btn_delete'])) { 
			$where = "kantor_id = '".$this->input->post('kantor_id')."'";
			$update['kantor_status'] = 0;
			$this->db->update("wrg_kantor",$update,$where);
			redirect(site_url("backend/kantor"));
		} else if (isset($_POST['btn_update'])) { 
			$id = $this->input->post('kantor_id');
			$where = "kantor_id = '".$id."'";
			$update['kantor_alamat'] = $this->input->post("kantor_alamat");
			$update['kantor_alamat2'] = $this->input->post("kantor_alamat2");
			$update['kantor_telp'] = $this->input->post("kantor_telp");
			$update['kantor_fax'] = $this->input->post("kantor_fax");
			$update['kantor_email'] = $this->input->post("kantor_email");
			$update['kantor_lat'] = $this->input->post("kantor_lat");
			$update['kantor_lng'] = $this->input->post("kantor_lng");

			$this->db->update("wrg_kantor",$update,$where);

			redirect(site_url("backend/kantor/".$id));
		} else if (isset($_POST['btn_insert'])) { 

			$insert['kantor_alamat'] = $this->input->post("kantor_alamat");
			$insert['kantor_alamat2'] = $this->input->post("kantor_alamat2");
			$insert['kantor_telp'] = $this->input->post("kantor_telp");
			$insert['kantor_fax'] = $this->input->post("kantor_fax");
			$insert['kantor_email'] = $this->input->post("kantor_email");
			$insert['kantor_lat'] = $this->input->post("kantor_lat");
			$insert['kantor_lng'] = $this->input->post("kantor_lng");
			$this->db->insert("wrg_kantor",$insert);
			redirect(site_url("backend/kantor/0"));
		}
	}

	public function portfolio($id = '') {
		$this->load->model("portfolioModel","pf");
		if ($id == '') {
			$param['list'] = $this->pf->all();
			$this->load->view('backend/portfolioView',$param);
		} else {
			$param['list_lokasi'] = $this->pf->getListLokasi();
			if ($id == '0') {
				$this->load->view('backend/portfolioView_tambah',$param);
			} else {
				$param['item'] = $this->pf->find($id);
				if ($param['item']->portfolio_status == 0) {
					redirect(site_url("backend/portfolio"));
				}
				$this->load->view('backend/portfolioView_detail',$param);
			}
		}
		
	}
	public function portfolioPost() {
		$this->load->model("PortfolioModel","pf");
		if (isset($_POST['btn_delete'])) { 

			$where = "portfolio_id = '".$this->input->post('portfolio_id')."'";
			$update['portfolio_status'] = 0;
			$this->pf->update($update,$where);
			redirect(site_url("backend/portfolio"));

		} else if (isset($_POST['btn_update'])) { 
			if (!empty($_FILES['portfolio_img']['name'])) {
		        $config['upload_path'] = './public/img/portfolio';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $this->input->post('portfolio_id').'.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload("portfolio_img")) {
					print_r($this->upload->display_errors());
					exit();
				}
			}
			if (!empty($_FILES['portfolio_textimg']['name'])) {
		        $config['upload_path'] = './public/img/portfolio';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $this->input->post('portfolio_id').'_text.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload("portfolio_textimg")) {
					print_r($this->upload->display_errors());
					exit();
				}
			}
			$where = "portfolio_id = '".$this->input->post('portfolio_id')."'";
			$update['portfolio_judul'] = $this->input->post("portfolio_judul");
			$update['portfolio_text'] = $this->input->post("portfolio_text");
			$update['lokasi_id'] = $this->input->post("lokasi_id");
			$this->pf->update($update,$where);

			redirect(site_url("backend/portfolio/".$this->input->post("portfolio_id")));
		} else if (isset($_POST['btn_insert'])) { 

			$insert['portfolio_judul'] = $this->input->post("portfolio_judul");
			$insert['portfolio_text'] = $this->input->post("portfolio_text");
			$insert['lokasi_id'] = $this->input->post("lokasi_id");
			$id = $this->pf->insert($insert);
			if (!empty($_FILES['portfolio_img']['name']) && $id > 0) {
		        $config['upload_path'] = './public/img/portfolio';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("portfolio_img");
			}
			if (!empty($_FILES['portfolio_textimg']['name']) && $id > 0) {
		        $config['upload_path'] = './public/img/portfolio';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id.'_text.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;

				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload("portfolio_textimg")) {
					print_r($this->upload->display_errors());
					exit();
				}
			}
			redirect(site_url("backend/portfolio/0"));
		}
	}
	public function lokasi($id = '') {
		$this->load->model("lokasiModel","lok");
		if ($id == '') {
			$param['list'] = $this->lok->all();
			$this->load->view('backend/lokasiView',$param);
		} else {
			if ($id == '0') {
				$this->load->view('backend/lokasiView_tambah');
			} else {
				$param['item'] = $this->lok->find($id);
				if ($param['item']->lokasi_status == 0) {
					redirect(site_url("backend/lokasi"));
				}
				$this->load->view('backend/lokasiView_detail',$param);
			}
		}
		
	}
	public function lokasiPost() {
		$this->load->model("lokasiModel","lok");
		if (isset($_POST['btn_delete'])) { 

			$where = "lokasi_id = '".$this->input->post('lokasi_id')."'";
			$update['lokasi_status'] = 0;
			$this->lok->update($update,$where);
			redirect(site_url("backend/lokasi"));

		} else if (isset($_POST['btn_update'])) { 
			$where = "lokasi_id = '".$this->input->post('lokasi_id')."'";
			$update['lokasi_nama'] = $this->input->post("lokasi_nama");
			$this->lok->update($update,$where);

			redirect(site_url("backend/lokasi/".$this->input->post("lokasi_id")));
		} else if (isset($_POST['btn_insert'])) { 
			$insert['lokasi_nama'] = $this->input->post("lokasi_nama");
			$id = $this->lok->insert($insert);
			redirect(site_url("backend/lokasi/0"));
		}
	}
	public function bannerPost() {
		if ($this->input->post('banner_key')) {
            $config['upload_path'] = './public/img/banner';
            $config['overwrite'] = TRUE;
            $config['file_name'] = 'banner_'.$this->input->post('banner_key').'.jpg';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 1000000;

			$this->load->library("upload",$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload("banner_img")) {
				$this->session->set_flashdata("status","1");
			} else {
				$this->session->set_flashdata("status","0");
			}
		}
		redirect("backend/image");
	}
	public function imagePost() {
		if ($this->input->post('img_key')) {
            $config['upload_path'] = './public/img';
            $config['overwrite'] = TRUE;
            $config['file_name'] = $this->input->post('img_key').'.png';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 1000000;

			$this->load->library("upload",$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload("img_img")) {
				$this->session->set_flashdata("status","1");
			} else {
				$this->session->set_flashdata("status","0");
			}
		}
		redirect("backend/image");
	}
	public function image() {
		$this->load->view('backend/imageView');
	}
	public function setting() {
		$this->load->model("SettingModel","setting");
		$param['setting'] = $this->setting->getArray();
		$this->load->view('backend/settingView',$param);	
	}
	public function settingPost() {
		$this->load->model("SettingModel","setting");
		$setting_key = $this->input->post("setting_key");
		$setting_val = $this->input->post("setting_value");
		if ($setting_key == "contactus-sender_pass") {
			$this->load->library('encryption');
			$this->encryption->initialize(
		        array(
		                'cipher' => 'aes-128',
		                'mode' => 'cbc',
		                'key' => md5("waringinwarehouse")
		        )
			);			
			$setting_val = $this->encryption->encrypt($setting_val);
		}
			
		$res = $this->setting->change($setting_key,$setting_val);
		if ($res) { 
			$this->session->set_flashdata("alert","Data berhasil diubah");
		}
		redirect("backend/setting");
	}
	public function cms() {
		$this->load->model("SettingModel","setting");
		$param['setting'] = $this->setting->getArray();
		$this->load->view('backend/cmsView',$param);	
	}
	public function cmsPost() {
		$this->load->model("SettingModel","setting");
		$res = $this->setting->change($this->input->post("setting_key"),$this->input->post("setting_value"));
		if ($res) { 
			$this->session->set_flashdata("alert","Data berhasil diubah");
		}
		redirect("backend/cms");
	}
	public function article($id = '') {
		$this->load->model("articleModel","article");
		$param = array();
		if ($id == '') {
			$param['list'] = $this->article->all();
			$this->load->view('backend/articleView',$param);
		} else {
			if ($id == '0') {
				$this->load->view('backend/articleView_tambah',$param);
			} else {
				$param['item'] = $this->article->find($id);
				if ($param['item']->article_status == 0) {
					redirect(site_url("backend/article"));
				}
				$this->load->view('backend/articleView_detail',$param);
			}
		}		
	}
	public function articlePost() {
		$this->load->model("ArticleModel","article");
		if (isset($_POST['btn_delete'])) { 

			$where = "article_id = '".$this->input->post('article_id')."'";
			$update['article_status'] = 0;
			$this->article->update($update,$where);
			redirect(site_url("backend/article"));

		} else if (isset($_POST['btn_update'])) { 
			$id = $this->input->post('article_id');

			if ($this->input->post("article_image_delete") != "") {
				$fp = "public/img/article/".$id.".jpg";
				if (file_exists($fp)) {
					unlink($fp);
				}
			}
			if (!empty($_FILES['article_image']['name'])) {
		        $config['upload_path'] = './public/img/article/';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("article_image");
			}

			$where = "article_id = '".$id."'";

			$update['article_title'] = $this->input->post("article_title");
			$update['article_content'] = $this->input->post("article_content");
			$update['article_content_short'] = $this->input->post("article_content_short");
			$update['article_url'] = $this->input->post("article_url");
			$update['article_meta_title'] = $this->input->post("article_meta_title");
			$update['article_meta_keyword'] = $this->input->post("article_meta_keyword");
			$update['article_meta_description'] = $this->input->post("article_meta_description");
			$update['article_date'] = $this->input->post("article_date");
			$update['article_updated'] = date("Y-m-d H:i:s");
			$this->article->update($update,$where);

			redirect(site_url("backend/article/".$id));
		} else if (isset($_POST['btn_insert'])) { 

			$insert['article_title'] = $this->input->post("article_title");
			$insert['article_content'] = $this->input->post("article_content");
			$insert['article_content_short'] = $this->input->post("article_content_short");
			$insert['article_url'] = $this->input->post("article_url");
			$insert['article_meta_title'] = $this->input->post("article_meta_title");
			$insert['article_meta_keyword'] = $this->input->post("article_meta_keyword");
			$insert['article_meta_description'] = $this->input->post("article_meta_description");
			$insert['article_date'] = $this->input->post("article_date");
			$insert['article_updated'] = date("Y-m-d H:i:s");
			$insert['article_status'] = 1;
			$id = $this->article->insert($insert);
			if (!empty($_FILES['article_image']['name'])) {
		        $config['upload_path'] = './public/img/article/';
		        $config['overwrite'] = TRUE;
		        $config['file_name'] = $id . '.jpg';
		        $config['allowed_types'] = 'jpg|png';
		        $config['max_size'] = 1000000;
				if (!is_dir($config['upload_path'])) {
				    mkdir($config['upload_path'], 0777, true);
				}
				$this->load->library("upload",$config);
				$this->upload->initialize($config);
				$this->upload->do_upload("article_image");
			}
			redirect(site_url("backend/article/0"));
		}
	}
}
