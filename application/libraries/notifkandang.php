<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');

class Notifkandang
  {
    protected $CI;

    public function __construct()
    {
      $this->CI =& get_instance(); // Existing Code Igniter Instance
    }

    public function get_notif($idKandang)
    {
      // Your Code Here
      // can communicate back with CI by using $this->CI
      // $this->CI->load->view(....);
      // $this->CI->load->model(...);
      // ETC
	  
	  $this->CI->load->model('peternak_model');
		$this->CI->load->model('karyawan_model', '', TRUE);
		$this->CI->load->model('jabatan_model', '', TRUE);
		$this->CI->load->model('kontrak_model', '', TRUE);
		$this->CI->load->model('kandang_model', '', TRUE);
		$this->CI->load->model('aktifitaskandang_model', '', TRUE);
		$this->CI->load->model('kirimmakanan_model', '', TRUE);
		$this->CI->load->model('pindahmakanan_model', '', TRUE);
		$this->CI->load->model('pinjammakanan_model', '', TRUE);
		$this->CI->load->model('penjualanayam_model', '', TRUE);
		$this->CI->load->model('kedatangandoc_model', '', TRUE);
		$this->CI->load->model('cabang_model', '', TRUE);
		$this->CI->load->model('setting_model', '', TRUE);
		
		$akt = $this->CI->aktifitaskandang_model->getAktifitasKandang_by_kandang($idKandang)->result();
		$isiNotifKandang = '';
		$jmlStatusKandang =0;
		if(!empty($akt)){
					foreach ($akt as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updateaktifitaskandang/index/'.$lk->IDAKTIFITASKANDANG.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Aktivitas kandang baru hari ke '.$lk->HARIAKTIFITASKANDANG.'
								</a>
							</li>';
							
						}
					}
				}
		
		
		$km = $this->CI->kirimmakanan_model->get_by_idka($idKandang)->result();
		
		if(!empty($km)){
					foreach ($km as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatekirimmakanan/index/'.$lk->IDKIRIMMAKANAN.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Kirim pakan baru tanggal '.date('d-m-Y', strtotime($lk->TGLKIRIMMAKANAN)).'
								</a>
							</li>';
							
						}
					}
				}
				
		$pmd = $this->CI->pindahmakanan_model->get_pindah_dari_makanan_by_kandang($idKandang)->result();
		
		if(!empty($pmd)){
					foreach ($pmd as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatepindahmakanan/index/'.$lk->IDPINDAHMAKANAN.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Pindah pakan baru tanggal '.date('d-m-Y', strtotime($lk->TGLPINDAHMAKANAN)).'
								</a>
							</li>';
							
						}
					}
				}
		
		$pmt= $this->CI->pindahmakanan_model->get_pindah_tujuan_makanan_by_kandang($idKandang)->result();
		
		if(!empty($pmt)){
					foreach ($pmt as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatepindahmakanan/index/'.$lk->IDPINDAHMAKANAN.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Pindah pakan baru tanggal '.date('d-m-Y', strtotime($lk->TGLPINDAHMAKANAN)).'
								</a>
							</li>';
							
						}
					}
				}
		
		$pimd = $this->CI->pinjammakanan_model->get_pinjam_dari_makanan_by_kandang($idKandang)->result();
		
		if(!empty($pimd)){
					foreach ($pimd as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatepinjammakanan/index/'.$lk->IDPINJAMMAKANAN.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Pinjam pakan baru tanggal '.date('d-m-Y', strtotime($lk->TGLPINJAMMAKANAN)).'
								</a>
							</li>';
							
						}
					}
				}
		
		$pimt= $this->CI->pinjammakanan_model->get_pinjam_tujuan_makanan_by_kandang($idKandang)->result();
		
		if(!empty($pimt)){
					foreach ($pimt as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatepinjammakanan/index/'.$lk->IDPINJAMMAKANAN.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Pindah pakan baru tanggal '.date('d-m-Y', strtotime($lk->TGLPINJAMMAKANAN)).'
								</a>
							</li>';
							
						}
					}
				}
		
		$pa= $this->CI->penjualanayam_model->get_by_idka($idKandang)->result();
		
		if(!empty($pa)){
					foreach ($pa as $lk) {
						if($lk->STATUSNOTIF==1){
							$jmlStatusKandang++;
							$isiNotifKandang .= '
							<li>
								<a href="'.base_url().'frontend/updatepenjualanayam/index/'.$lk->IDPENJUALANAYAM.'">
								<span class="label label-success">
								<i class="icon-plus"></i>
								</span>
								Penjualan ayam baru tanggal '.date('d-m-Y', strtotime($lk->TGLPENJUALANAYAM)).'
								</a>
							</li>';
							
						}
					}
				}
				
		$data['notifKandang'] = $jmlStatusKandang;
		$notif = array();
		$notif['jumlah'] = $jmlStatusKandang;
		$notif['isi'] = $isiNotifKandang;
		return $notif;
	  
    }
  }