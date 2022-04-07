<?php
require '../koneksi.php';  
$id = $_POST['id'];
$fs=$_POST['nama_fasilitas'];
$ket=$_POST['keterangan'];
$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];


$sql=mysqli_query($koneksi,"UPDATE  fs_hotel set  nama_fasilitas='$fs',keterangan='$ket', gambar='$ft' where id='$id'");
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
