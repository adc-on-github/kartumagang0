<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Peserta Magang</title>

</head>
<body>
    <h1>Generate Kartu Peserta Magang</h1>
    <hr>
    <?php

    ?>
    <form method="get" action="cetakbarcode.php">
    <table>
       <tr>
        <td>No ID:</td><td> </td><td colspan="4"><input type="text" name="txtnoid" id="txtnoid" value=""></td>
        </tr> 
        <tr>
        <td>Nama Peserta:</td><td> </td><td colspan="4"><input type="text" name="txtnama" id="txtnama" value=""></td>
        </tr> 
        <tr>
        <td>Tgl Mulai:</td><td> </td><td><input type="date" name="dtmulai" id="dtmulai" value=""></td><td>  </td><td>Tgl Selesai :</td><td><input type="date" name="dtselesai" id="dtselesai" value=""></td>
       </tr> 
       <td>Tipe Kartu:</td><td> </td><td colspan="4">
        <select name="txttipe" id="txttipe">
            <option value="1D" >1D Code 128</option>
            <option value="2D" >2D QR Code</option>
            <option value="both" >Both</option>
        </select></td>
        </tr> 
    </table>
        <button type="submit" name="submit">Generate Kartu !</button>
    </form>
    <hr>
    


</body>
</html>