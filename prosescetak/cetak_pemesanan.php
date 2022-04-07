<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="../https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="../https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- AOS -->


  <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

  <!-- My CSS -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="../stylesheet" href="style1.css" />

  <title>HOTEL ASTON</title>
</head>



<body >


  
        <!-- cetak -->
        <div class="card shadow mb-3">
              <!-- tombol kembali-->
    <div class="card-body">
        <div class="form-group cols-sm-3 mt-5">
            <a href="../index.php?url=dashboard" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>



            <div class="card-header py-3">

            </div>
            <div class="card-body">
                <h3 class="m-0 font-weight-bold text-seconary" align="center">SELAMAT DATANG</h3>
                <h4 class="m-0 font-weight-bold text-seconary" align="center">HOTEL ASTON</h4>
                <h6 class="m-0 font-weight-bold text-seconary" align="center">Jl. Umbulsari, Karang Rejo, Paleran,Kode Post 68166</h6>
                <br><br><br>
                <h5 class="m-0 font-weight-bold text-danger" align="center">Bukti Pemesanan</h5>
                <br><br>
                <div class="table-responsive" >
                    <table class="table table-bordered " width="100%" cellspacing="0">

                        <tr>
                            
                            <th >email</th>
                            <th>telpon</th>
                            <th>nama tamu</th> 
                            <th>tipe kamar</th>
                            <th>Tanggal cek in</th>
                            <th>Tanggal cek out</th>
                            <th>Jumlah</th>
                        </tr>




 
                        </tr>

                        <?php
                        require '../koneksi.php';
                        $sql = mysqli_query($koneksi, "SELECT * from customer  order by id_customer desc limit 1 ");
                        while ($data = mysqli_fetch_array($sql)) {

                        ?>

                            <tbody>
                                <tr>
                                  
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['telp']; ?></td>
                                    <td><?php echo $data['nama_tamu']; ?></td>
                                    <td><?php echo $data['tipe_kamar']; ?></td>
                                    <td><?php echo $data['tgl_cekin']; ?></td>
                                    <td><?php echo $data['tgl_cekout']; ?></td>
                                    <td><?php echo $data['jumblah']; ?></td>









                                </tr>

                            </tbody>
                       
                    </table>


                </div>
                <br>
                <br>
                <h6 class="m-0 font-weight-bold text-seconary" align="right">Paleran, <?php echo date('d M Y'); ?></h6>
                <h6 class="m-0 font-weight-bold text-seconary" align="right">Pemesan</h6>
                <br><br><br><br>
                
                <h6 class="m-0 font-weight-bold text-danger" align="right"><?php echo $data['nama_tamu']; ?></h6> <?php } ?>
            </div>
        </div>

    </div>



    <script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="../https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="../https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="../https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>



<script>
  const scriptURL = '../https://script.google.com/macros/s/AKfycbzjWwvjJihKz3-24SxEnHM5XFjNPgQd_dv3uD_fgjLSp_4AAXsC6IC4C_ECvWyLkGsuBg/exec';
  const form = document.forms['wpu-contact-form'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    // ketika tombol submit diklik
    // tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then((response) => {
        // tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tampilkan alert
        myAlert.classList.toggle('d-none');
        // reset formnya
        form.reset();
        console.log('Success!', response);
      })
      .catch((error) => console.error('Error!', error.message));
  });
</script>

<script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
  VanillaTilt.init(document.querySelectorAll('.keyboard-box'), {
    max: 35,
    speed: 1000,
    glare: true,
  });
</script>

    <script>
        $(document).ready(function() {
            $('#printInvoice').click(function() {
                window.print();
            });
        });
    </script>
     <script type="text/javascript">
        window.print();
        </script>


</body>

</html>