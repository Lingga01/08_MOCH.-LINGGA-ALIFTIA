<?php
require '../koneksi.php';  
$id = $_POST['id_kamar'];
$tipe=$_POST['tipe_kamar'];
$fs=$_POST['nama_fasilitas'];



$sql=mysqli_query($koneksi,"UPDATE  fs_kamar set tipe_kamar='$tipe', nama_fasilitas='$fs' where id_kamar='$id'");

 
if ($sql)
{
    ?>
    <script type="text/javascript">
            window.location='admin.php?url=fs_kamar';
        </script>
        <?php   
}
?>
