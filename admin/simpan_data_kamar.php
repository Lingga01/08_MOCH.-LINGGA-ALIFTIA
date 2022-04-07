<?php
require '../koneksi.php';
$nama = $_POST['nama_kamar'];
$total = $_POST['total_kamar'];

$ft=$_FILES['gambar']['name'];
$file=$_FILES['gambar']['tmp_name'];


$sql = mysqli_query($koneksi, "insert into kamar(nama_kamar,total_kamar,gambar) values('$nama','$total','$ft')");
move_uploaded_file($file, "gambar/".$ft); 


if ($sql) {
?>
    <script type="text/javascript">
      
        window.location = 'admin.php?url=kamar';
    </script>
<?php
}
?>