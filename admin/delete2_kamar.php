<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from fs_hotel where id='$id' ");
 
if ($sql) 
{
    ?>
    <script type="text/javascript">
       
        window.location='admin.php?url=fs_hotel';
        </script>
        <?php
}
?>