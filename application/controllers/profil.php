<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');

class Profil extends CI_Controller {

	private $limit = 20;

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('form','url'));
		
	}

	function index()
	{	
		$this->template->display("profil");
	}
	
	

}
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */