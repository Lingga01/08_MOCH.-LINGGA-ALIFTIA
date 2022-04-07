<?php
require '../koneksi.php';  
$id = $_POST['id_customer'];
$st=$_POST['status'];

$sql=mysqli_query($koneksi,"UPDATE  customer set status='$st' where id_customer='$id' ");


if ($sql)
{
    ?>
    <script type="text/javascript">
          
            window.location='resepsionis.php?url=data_pelanggan';
        </script>
        <?php   
}
?>
