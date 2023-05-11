<?php
    if(isset($_GET['submit'])) 
    {     
    // Load TCPDF library
    require_once('tcpdf/tcpdf.php');
    $idpeserta=$_GET['txtnoid']; 
    $namapeserta=$_GET['txtnama']; 
    $dtmulai=$_GET['dtmulai'];  
    $dtselesai=$_GET['dtselesai']; 
    $tipe=$_GET['txttipe'];
    $data=$idpeserta.'/'.$namapeserta.'/'.$dtmulai.'/'.$dtselesai; 
    
    // Initialize TCPDF object
    $pdf = new TCPDF('P', 'mm', 'A7', true, 'UTF-8', false);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetMargins(0, 0, true);
    $pdf->SetHeaderMargin(0);
    $pdf->SetFooterMargin(0);
    // Add new page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);
    // Set barcode format and height
    $barcode_format = 'C128';
    $barcode_height = 10;
    $qrcode_size = 25;

        if($tipe=='1D'){
            
            $pdf->writeHTML('<h3 style="text-align: center;">Kartu Peserta Magang</h3><h3 style="text-align: center;">PT. Unza Vitalis</h3>');
            $pdf->writeHTML('<p style="text-align:center;"><center><img src="./images/peserta.jpg" width="75" height="75" style="text-align:center; display:block;"></center></p>');
            //  $pdf->Image("./images/peserta.jpg",5,5,50,50,null,null,'RTLM',false,null,'C');
            $pdf->writeHTML('<h2 style="text-align: center;">'.$namapeserta.'</h2><br>');
            $pdf->write1DBarcode( $idpeserta, $barcode_format, '25', '', '', $barcode_height, 0.4, null, 'N');
            
        } elseif($tipe=='2D'){
            $pdf->writeHTML('<h3 style="text-align: center;">Kartu Peserta Magang</h3><h3 style="text-align: center;">PT. Unza Vitalis</h3>');
            $pdf->writeHTML('<p style="text-align:center;"><img src="./images/peserta.jpg" width="50" height="50"></p>');
            $pdf->writeHTML('<h3 style="text-align: center;">'.$namapeserta.'</h3>');
            $pdf->write2DBarcode($data, 'QRCODE,H', '23', '', $qrcode_size, $qrcode_size, null, 'N');

            
        } else{
            $pdf->writeHTML('<h3 style="text-align: center;">PT. Unza Vitalis</h3><br>');
            $pdf->write2DBarcode($data, 'QRCODE,H', '23', '', $qrcode_size, $qrcode_size, null, 'N');
            $pdf->writeHTML('<br><h4 style="text-align: center;">Kartu Peserta Magang</h4>');
            $pdf->writeHTML('<h2 style="text-align: center;">'.$namapeserta.'</h2><br>');
            $pdf->write1DBarcode( $idpeserta, $barcode_format, '25', '', '', $barcode_height, 0.4, null, 'N');
        }
        $pdf->Output('barcode.pdf', 'I');
    }
?>