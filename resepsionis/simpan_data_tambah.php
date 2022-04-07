<!-- simpan data pemesanan tamu ke database -->
<?php 
require '../koneksi.php';
$id=$_POST['id_customer'];
$email=$_POST['email'];
$telp=$_POST['telp']; 
$nama=$_POST['nama_tamu'];
$tipe=$_POST['tipe_kamar']; 
$cekin=$_POST['tgl_cekin']; 
$cekout=$_POST['tgl_cekout']; 
$jumblah=$_POST['jumblah'];
$st=$_POST['status'];

$sql=mysqli_query($koneksi,"insert into customer values('$id','$email','$telp','$nama','$tipe','$cekin','$cekout','$jumblah','$st')");


if ($sql > 0) 
{
    
    ?>
     <script type="text/javascript">
            alert ('Data Berhasil disimpan, ');
            window.location="resepsionis.php?url=data_pelanggan";
        </script> 
        <?php   
     

}
?>
