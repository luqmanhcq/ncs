<?php
 class Detail_user {
	 protected $_ci;
	 function __construct(){
		$this->load->model('karyawan_model', '', TRUE);
	 }

	 function duser($nama){
		$knt = $this->karyawan_model->get_by_username($nama)->row();
		if(isset($knt->IDKARYAWAN))
			$id = $knt->IDKARYAWAN;
		else
			$id = '';
		return $id;
	 }
}