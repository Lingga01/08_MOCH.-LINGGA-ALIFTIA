<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "delete from customer where id_customer='$id' ");
 
if ($sql)
{
    ?>
    <script type="text/javascript">
       
        window.location='resepsionis.php?url=data_pelanggan';
        </script>
        <?php
}
?>