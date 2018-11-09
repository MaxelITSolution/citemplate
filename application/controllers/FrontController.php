<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {
	public function __call($name,$args = "") {
		redirect(site_url(""));
	}
  /*/
	public function search($term) {
		$this->load->model("ArticleModel","article");
		$article_id = $this->article->getIdFromUrl($term);
		if ($article_id > 0) {
			$this->article($article_id);
		} else {
			$this->$term();
		}
	}
  /*/
	public function __construct() {
		parent::__construct();
		$this->load->model("SettingModel","setting");
		if ($this->session->userdata("first") == "") {
			$this->session->set_userdata("first","1");
      $this->session->unset_userdata("cmslang");
      $this->session->unset_userdata("lang");
      $this->session->set_userdata("cmslang","_en");
      $this->session->set_userdata("lang","en");
		}
		$this->config->set_item("index_page",$this->session->userdata("lang"));
		if ($this->session->userdata("lang") == "en") {
			$this->lang->load("general","english");
		} else {
			$this->lang->load("general","indonesia");
		}
	}
	public function index() {
		$param["title"] = "Waringin";
		$param["page"] = "home";
		$param["cms"] = $this->setting->getArray();

		$this->load->model("BarangModel","barang");		
		$param["allBarang"] = $this->barang->all();
		$param["listBarang"] = $this->barang->getListHighlight();
		$param["listLokasi"] = $this->barang->getListLokasi();

		$this->load->view('frontend/landingView',$param);
	}
	public function about() {
		$param["page"] = "about";
		$param["title"] = "Waringin - About";
		$param["cms"] = $this->setting->getArray();
		$this->load->view('frontend/aboutView',$param);
	}
	public function contact() {
		$param["page"] = "contact";
		$param["title"] = "Waringin - Contact";
		$param["cms"] = $this->setting->getArray();
		$param["kantor"] = $this->setting->getAllKantor();
		$this->load->view('frontend/contactView',$param);
	}
	public function portfolio($lokasi = 1,$page = 1) {

		$param["page"] = "portfolio";
		$param["title"] = "Waringin - Portfolio";
		$param["cms"] = $this->setting->getArray();

		$param["param_lokasi"] = $lokasi;
		$param["param_page"] = $page;

		$this->load->model("PortfolioModel","pf");
		$param["listPortfolio"] = $this->pf->getList($lokasi,$page);
		$param["listLokasi"] = $this->pf->getListlokasi();

		$this->load->library("pagination");
		$config["base_url"] = base_url("portfolio/".$lokasi);
		$config["total_rows"] = count($this->pf->getList($lokasi));
		$config["per_page"] = 4;
		$config["uri_segment"] = 3;
		$config["num_links"] = 2;
		$config['num_tag_open'] = "&nbsp;&nbsp;";
		$config['num_tag_close'] = "&nbsp;&nbsp;";
		$config['full_tag_open'] = "page: ";
		$config['use_page_numbers'] = TRUE;
		$config['prev_link'] = "< PREV";
		$config['next_link'] = "NEXT >";
		$config['attributes']['style'] = "text-decoration: none";
		$this->pagination->initialize($config);

		$this->load->view('frontend/portfolioView',$param);
	}

	public function lease($cat="1",$location="") {
		if ($cat == "warehouse") $cat = 1; else $cat = 2;
		$this->browse("2",$cat,$location);
	}
	public function sale($cat="1",$location="") {
		if ($cat == "warehouse") $cat = 1; else $cat = 2;
		$this->browse("1",$cat,$location);
	}
	public function browse($type="1",$cat="1",$location="") {
		$param["type"] = $type;
		$param["cat"] = $cat;
		$param["location"] = $location;
		$param["cat_text"] = ($cat == 1 ? "warehouse" : "land");
		$param["type_text"] = ($type == 1 ? "sale" : "lease");
		
		$param["page"] = $param["type_text"];
		$param["title"] = "Waringin - To " . ucwords($param["type_text"]);

		$this->load->model("BarangModel","barang");		
		$param["listBarang"] = $this->barang->getList($cat,$type,$location);
		$param["listLokasi"] = $this->barang->getListLokasi();
		$param["cms"] = $this->setting->getArray();
		$this->load->view('frontend/browseView',$param);
	}
	public function detail($id="") {
		if ($id == "") {
			redirect("");
		} else { 
			$param["page"] = "detail";
			$param["title"] = "Waringin - Detail";
			$param["cms"] = $this->setting->getArray();

			$this->load->model("BarangModel","barang");		
			$param["barang"] = $this->barang->find($id);

			$this->load->view('frontend/detailView',$param);
		}
	}
	public function lang($lang = "") {
		$this->session->unset_userdata("cmslang");
		$this->session->unset_userdata("lang");
		if ($lang == "en") {			
			$this->session->set_userdata("cmslang","_en");
			$this->session->set_userdata("lang","en");
		}
		redirect(base_url($lang));
	}
  public function article($url = "") {
    $this->load->model("ArticleModel","article");
    $param = array();
    $param["cms"] = $this->setting->getArray();
    $param["page"] = "article";
    $param["title"] = "Waringin - Article";
    if ($url == "") {
      $param["listArticle"] = $this->article->all();
      $this->load->view('frontend/articleView',$param);
    } else { 
      if ($this->article->getIdFromUrl($url) > 0) {        
        $param["article"] = $this->article->findFromUrl($url);
        $this->load->view('frontend/articleDetailView',$param);
      } else {
        redirect(site_url("article"));
      }
    }
  }
  /*/
	public function article($id="",$title="") {
		$this->load->model("ArticleModel","article");
		$param = array();
		$param["cms"] = $this->setting->getArray();
		$param["page"] = "article";
		$param["title"] = "Waringin - Article";
		if ($id == "") {
			$param["listArticle"] = $this->article->all();
			$this->load->view('frontend/articleView',$param);
		} else { 
			$param["article"] = $this->article->find($id);
			$this->load->view('frontend/articleDetailView',$param);
		}
	}
  /*/
  public function sendemail() {  
    $ret["status"] = "0";

      $this->load->library('encryption');
      $this->encryption->initialize(
            array(
                    'cipher' => 'aes-128',
                    'mode' => 'cbc',
                    'key' => md5("waringinwarehouse")
            )
      );      
      
      $this->load->model("SettingModel","setting");
      $setting = $this->setting->getArray();

      $smtp_user = $setting["contactus-sender_email"];
      $smtp_pass = $this->encryption->decrypt($setting["contactus-sender_pass"]);
      $receiver_email = $setting["contactus-receiver_email"];

      $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => $smtp_user,
          'smtp_pass' => $smtp_pass,
          'mailtype'  => 'html', 
          'newline'  => "\r\n", 
          'charset'   => 'iso-8859-1'
      );
      $this->load->library('email');
      $this->email->initialize($config);

      $mail_from_email = $smtp_user;
      $mail_from_name = "Waringin Warehouse Website";
      $mail_sender_email = $this->input->post("email_txt");
      $mail_sender_name = $this->input->post("name_txt");

      // if ($mail_sender_email != "") {

        $mail_to = $receiver_email;
        $mail_subject = $this->input->post("subject_txt");
        $mail_message = "This message was sent from http://waringinwarehouse.com Contact form
          <br>
          <br>Sender: $mail_sender_name [$mail_sender_email]
          <br>Subject: $mail_subject
          <br>Message:
          <div style='padding:10px; background-color: #EEEEEE'>
            ".nl2br($this->input->post("message_txt"))."
          </div>
          ";

      $this->email->from(  $mail_from_email, $mail_from_name);
      $this->email->reply_to(  $mail_sender_email,$mail_sender_name);
      $this->email->to($mail_to);

      $this->email->subject($mail_subject);
      $this->email->message($mail_message);

      $online = 0;
    try {
      if (!$online && $this->email->send(FALSE)) {
        $ret["status"] = 1;
      }
    } catch (Exception $e) {
    }

    try {
      if ($ret["status"] == 0 && $this->sendemail2()) {
        $ret["status"] = 1;
      }
    } catch (Exception $e) {
    }
      
      
    // }
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($ret));  
  }
  public function sendemail2() {	
	  $this->load->library('encryption');
	  $this->encryption->initialize(
          array(
                  'cipher' => 'aes-128',
                  'mode' => 'cbc',
                  'key' => md5("waringinwarehouse")
          )
	  );			
	  
	  $this->load->model("SettingModel","setting");
	  $setting = $this->setting->getArray();

  	$smtp_user = $setting["contactus-sender_email"];
  	$smtp_pass = $this->encryption->decrypt($setting["contactus-sender_pass"]);
  	$receiver_email = $setting["contactus-receiver_email"];

	  $config = Array(
	      'protocol' => 'mail',
	      'mailtype'  => 'html', 
	      'newline'  => "\r\n", 
	      'charset'   => 'iso-8859-1'
	  );
	  $this->load->library('email');
    $this->email->initialize($config);

    $mail_from_email = $smtp_user;
    $mail_from_name = "Waringin Warehouse Website";
    $mail_sender_email = $this->input->post("email_txt");
    $mail_sender_name = $this->input->post("name_txt");

  	$ret["status"] = 0;
    // if ($mail_sender_email != "") {

	    $mail_to = $receiver_email;
	    $mail_subject = $this->input->post("subject_txt");
	    $mail_message = "This message was sent from http://waringinwarehouse.com Contact form
	    	<br>
	    	<br>Sender: $mail_sender_name [$mail_sender_email]
	    	<br>Subject: $mail_subject
	    	<br>Message:
	    	<div style='padding:10px; background-color: #EEEEEE'>
	    		".nl2br($this->input->post("message_txt"))."
	    	</div>
	    	";

		$this->email->from(	$mail_from_email, $mail_from_name);
		$this->email->reply_to(	$mail_sender_email,$mail_sender_name);
		$this->email->to($mail_to);

		$this->email->subject($mail_subject);
		$this->email->message($mail_message);

    $ret["status"] = 0;
    if ($this->email->send(FALSE)) {
		//if (mail($mail_to,$mail_subject,$mail_message)) {
			$ret["status"] = 1;
		} else {      
			// echo "gagal send";
			// echo $this->email->print_debugger(array('headers'));
		}
    	
    // }
  	return $ret["status"];
  }
  public function serverstatus() {  
    phpinfo();
  }
}
