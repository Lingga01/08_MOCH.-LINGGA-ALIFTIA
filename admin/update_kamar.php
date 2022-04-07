<?php
require '../koneksi.php';
$id = $_POST['id_kamar'];
$nama = $_POST['nama_kamar'];
$total = $_POST['total_kamar'];

$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];

$sql = mysqli_query($koneksi, "UPDATE kamar set nama_kamar='$nama', total_kamar='$total',  gambar='$ft' where id_kamar='$id' ");
move_uploaded_file($file, "gambar/".$ft);

if ($sql) { 
?>
    <script type="text/javascript">
        window.location = 'admin.php?url=kamar';
    </script>
<?php
}
?>

 