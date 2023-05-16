<?php
try{
$db_name="test";
$db_user =  "root";
$db_password = "";
$db_server ="localhost";
$db_drive = "mysql";

$database = "$db_drive:host=$db_server;dbname=$db_name";
	$conn = new PDO($database,$db_user, $db_password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
} catch (PDOException $e){
	echo "Error Connection ". $e->getMessage();
	die;
}


    $barkode = $_GET['idpeserta'];
    $datapeserta = explode('/',$barkode);
    $idpeserta = $datapeserta[0];
    $nim = $datapeserta[1];
    
    $pesertaQ = $conn->prepare("SELECT * FROM pesertamagang where id_magang = ? and nim_magang = ? ");
	// var_dump($pesertaQ);
    // die;
    $pesertaQ ->execute(array($idpeserta,$nim));
	$result = $pesertaQ->fetch();
    echo $result['username'].'<br>';
    echo $result['nama_magang'].'<br>';
    echo $result['asal'].'<br>';



?>