<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function pdf_create($html, $filename='', $stream=TRUE, $n) 
{
    require_once("dompdf/dompdf_config.inc.php");
    
    $dompdf = new DOMPDF();
	
	if($n==1){
		$paperSize =array(0,0,612.00,937.00);
	}else if($n==2){
		$paperSize =array(0,0,612.00,500.00);
	}else if($n==3){
		$paperSize =array(0,0,937.00,612.00);
	}
	
	$dompdf->set_paper($paperSize);

    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
}
?>