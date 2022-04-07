<!-- simpan data pemesanan tamu ke database -->
<?php 
require 'koneksi.php';

$email=$_POST['email'];
$telp=$_POST['telp']; 
$nama=$_POST['nama_tamu'];
$tipe=$_POST['tipe_kamar'];
$cekin=$_POST['tgl_cekin']; 
$cekout=$_POST['tgl_cekout']; 
$jumblah=$_POST['jumblah'];


$sql=mysqli_query($koneksi, "insert into customer(email,telp,nama_tamu,tipe_kamar,tgl_cekin,tgl_cekout,jumblah) values('$email','$telp','$nama','$tipe','$cekin','$cekout','$jumblah')");


if ($sql > 0) 
{
    session_start();
    $_SESSION['berhasil']='<div class="alert alert-success" role="alert">
    Data berhasil di disimpan
    </div>';
    header('location:prosescetak/cetak_pemesanan.php');
    
    
     

}
?>
