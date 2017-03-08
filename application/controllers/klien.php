<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');

class Klien extends CI_Controller {

	private $limit = 20;

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('form','url'));
		
	}

	function index()
	{	
		$this->template->display("klien");
	}
	
	

}
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */