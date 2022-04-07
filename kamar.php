
<section class="text-center">

<div class="container">
  <div class="row text-center  mb-5">
    <div class="col" data-aos="fade-down">
      <p>
      <h1>
    <font face="times new roman">Tipe Kamar</font>
</p>
  </h1>
 </div>
      </div>
</div>
</div>


<?php
require 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * from kamar, fs_kamar WHERE kamar.id_kamar = fs_kamar.id_kamar");
while ($data = mysqli_fetch_array($sql)) {

?>

  
    <div class="container">
      

      <div class="row justify-content-center">
        <div class="col-9 md-5 mb-3">
          <div class="card">
            <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="card-img-top" alt="Project 11" width="100" />
            <div class="card-body">
                
                  <h5 class="card-title"><?php echo $data['tipe_kamar']; ?></h5>
                  
                  <ul>
                    <li>Kamar berukuran 3*5</li>
                    <li>tv</li>
                    <li>Kamar Mandi</li>
                    <li><?php echo $data['nama_fasilitas']; ?></li>
                  </ul>
              </div>
          </div>
        </div>
      </div>



    </div>
    </div>
  </section><?php } ?>
 
</body>



 



   
  

