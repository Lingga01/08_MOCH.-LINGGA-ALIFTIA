<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from kamar where id_kamar='$id' ");
 
if ($sql) 
{
    ?>
    <script type="text/javascript">
       
        window.location='admin.php?url=kamar';
        </script>
        <?php
}
?>