<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('template');
	}
	 
	public function index()
	{
	// $this->template->displayb('frondand/coba','');
		$this->load->view('frondand/coba');
	}
	
	function contoh_parameter(){
	 $this->template->display('view_parameter',
	 array('judul'=>'judul View')); }
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */