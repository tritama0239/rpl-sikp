<?php
include '.env';
$limit = 5 * 1024 * 1024;
$ekstensi =  array('png','jpeg','pdf');
$jumlahFile = count($_FILES['dokumen']['name']);

for($x=0; $x<$jumlahFile; $x++){
	$namafile = $_FILES['dokumen']['name'][$x];
	$tmp = $_FILES['dokumen']['tmp_name'][$x];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['dokumen']['size'][$x];	
	if($ukuran > $limit){
		header("location:index.php?alert=gagal_ukuran");		
	}else{
		if(!in_array($tipe_file, $ekstensi)){
			header("location:index.php?alert=gagal_ektensi");			
		}else{		
			move_uploaded_file($tmp, 'file/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO dokumen VALUES(NULL, '$x')");
			header("location:index.php?alert=simpan");
		}
	}
}
?>