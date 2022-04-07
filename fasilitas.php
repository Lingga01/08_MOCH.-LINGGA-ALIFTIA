


<section class="text-center" >

<div class="container">
  <div class="row text-center  mb-5">
    <div class="col" data-aos="fade-down">
      <p>
     
  <h1>
    <font face="times new roman">Fasilitas Hotel</font>
</p>
  </h1>
 </div>
      </div>
</div>
</div>

<?php
require 'koneksi.php';
$sql = mysqli_query($koneksi, "select * from fs_hotel");
while ($data = mysqli_fetch_array($sql)) {

?>


    <div class="container">
      

      <div class="row justify-content-center">
        <div class="col-9 md-6 mb-3">
          <div class="card">
            <img src="admin/gambar/<?php echo $data['gambar']; ?>" class="card-img-top" alt="Project 11" width="200" />
            <div class="card-body">
                
                  <h5 class="card-title"><?php echo $data['nama_fasilitas']; ?></h5>
                  
                  <ul>
                    <li><?php echo $data['keterangan']; ?></li>
                  </ul>
              </div>
          </div>
        </div>
      </div>



    </div>
    </div>
  </section><?php } ?>




 