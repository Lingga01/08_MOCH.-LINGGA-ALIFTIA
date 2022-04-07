<?php
require '../koneksi.php';  
$tipe=$_POST['tipe_kamar'];
$fs=$_POST['nama_fasilitas'];



$sql=mysqli_query($koneksi,"INSERT INTO fs_kamar (tipe_kamar,nama_fasilitas) VALUES('$tipe','$fs')");


if ($sql)
{
    ?>
    <script type="text/javascript">
            window.location='admin.php?url=fs_kamar';
        </script>
        <?php   
}
?>
