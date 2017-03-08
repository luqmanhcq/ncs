<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('nominal_titik'))
{
	function nominal_titik($nilai)
	{
		$nilaiRupiah 	   = "";
		$jumlahAngka  = strlen($nilai);
		while($jumlahAngka > 3)
		{
			$nilaiRupiah    = "." . substr($nilai,-3) . $nilaiRupiah;
			$sisaNilai         = strlen($nilai) - 3;
			$nilai       = substr($nilai,0,$sisaNilai);
			$jumlahAngka = strlen($nilai);
		}

		$nilaiRupiah       = "Rp " . $nilai . $nilaiRupiah;
		return $nilaiRupiah;
	}
}