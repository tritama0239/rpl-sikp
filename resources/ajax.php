<?php

//membuat koneksi ke database
$koneksi = include '.env';

//variabel nim yang dikirimkan form.php
$nim = $_GET['nim'];

//mengambil data
$query = mysqli_query($koneksi, "SELECT * FROM pengajuan_kp WHERE nim='$nim'");
$query1 = mysqli_query($koneksi, "SELECT * FROM users WHERE nim='$nim'");
$user = mysqli_fetch_array($query1);
$kp = mysqli_fetch_array($query);
$data = array(
            'name'      =>  $user['name'],
            'ruang'      =>  $kp['ruang'],
            'penguji'   =>  $kp['penguji'],
            'jdwl_ujian'      =>  $kp['jdwl_ujian'],);

//tampil data
echo json_encode($data);
?>