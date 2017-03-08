<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acsess{
	public $user;
	
	/**
	* Constructor
	*/
	function _construct(){
		$this->CI = get_instance();
		$auth = $this->CI->config->item('auth');
		$this->CI->load->helper('cookie');
		$this->CI->load->model('users_model');
		
		$this->users_model = $this->CI->users_model;
	}
	
	/**
	* Cek login user
	*/
	function login($username, $password){
		$result = $this->users_model->get_login_info($username);
		if($result){
			$password = md5($password);
			if($password == $result->password){
				//start session
				$this->CI->session->set_userdata('user_id',$result->user_id);
				return TRUE;
			}
		}
		return FALSE;
	}
	
	/**
	* cek apakah udah login
	*/
	function is_login(){
		return (($this->CI->session->userdata('user_id')) ? TRUE : FALSE);
	}
	
	/**
	* Logout
	*/
	function logout(){
		$this->CI->session-unset_userdata('user_id');
	}
}