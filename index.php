<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Peserta Magang</title>
    <?php
    require_once('tcpdf/tcpdf.php');
    ?>
</head>
<body>
    <h1>Generate Kartu Peserta Magang</h1>
    <hr>
    <?php
    if(isset($_GET['submit'])) 
    { 
    $idpeserta=$_GET['txtnoid']; 
    $namapeserta=$_GET['txtnama']; 
    $dtmulai=''; 
    $dtselesai='';
    $tipe=$_GET['txttipe'];
    $data=''; 
    
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    } else { 
        $idpeserta=''; 
        $namapeserta=''; 
        $dtmulai=''; 
        $dtselesai='';
        $data=''; 
        echo 'tidak ada';
    }
    ?>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
       <tr>
        <td>No ID:</td><td> </td><td colspan="4"><input type="text" name="txtnoid" id="txtnoid" value="<?=$idpeserta;?>"></td>
        </tr> 
        <tr>
        <td>Nama Peserta:</td><td> </td><td colspan="4"><input type="text" name="txtnama" id="txtnama" value="<?=$namapeserta;?>"></td>
        </tr> 
        <tr>
        <td>Tgl Mulai:</td><td> </td><td><input type="date" name="dtmulai" id="dtmulai" value=""></td><td>  </td><td>Tgl Selesai :</td><td><input type="date" name="dtselesai" id="dtselesai" value=""></td>
       </tr> 
       <td>Tipe Kartu:</td><td> </td><td colspan="4">
        <select name="txttipe" id="txttipe">
            <option value="1D" <?= $tipe=="1D"?"selected":""; ?>>1D Code 128</option>
            <option value="2D" <?= $tipe=="2D"?"selected":""; ?>>2D QR Code</option>
            <option value="both" <?= $tipe=="both"?"selected":""; ?>>Both</option>
        </select></td>
        </tr> 
    </table>
        <button type="submit" name="submit">Generate Kartu !</button>
    </form>
    <hr>
<p id="kartuheader">
<?php
    if(isset($_GET['submit'])) 
    { 
        if($_GET['tipe'])
    }
?>
</p>    
<p id="kartumiddle">

</p>    
<p id="kartufooter">

</p>    


</body>
</html>