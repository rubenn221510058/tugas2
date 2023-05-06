<?php
include("koneksi.php");
$sql="select * from mahasiswa";
$proses=mysqli_query($koneksi, $sql);
while ($isi = mysqli_fetch_assoc($proses)){
    echo " NIM  : ".$isi['nim'] . "<br>";
    echo " Nama : ".$isi['nama'] . "<br>";
    echo " Jenis Kelamin  : ".$isi['jenkel'] . "<br>";
    echo " Tempat Tanggal Lahir : ".$isi['lahir'] . "<br>";
    echo " Nomor HP  : ".$isi['hp'] . "<br><br>";
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->