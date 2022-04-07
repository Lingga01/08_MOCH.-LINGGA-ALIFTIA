<?php
require '../koneksi.php';  
$fs=$_POST['nama_fasilitas'];
$ket=$_POST['keterangan'];
$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name']; 


$sql=mysqli_query($koneksi,"INSERT INTO fs_hotel (nama_fasilitas,keterangan,gambar) VALUES('$fs','$ket','$ft')");
move_uploaded_file($file, "gambar/".$ft);

if ($sql)
{
    ?>
    <script type="text/javascript">
            window.location='admin.php?url=fs_hotel';
        </script>
        <?php   
}
?>
