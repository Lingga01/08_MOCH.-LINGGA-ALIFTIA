<?php
session_start();
if (!isset($_SESSION['nama'])) {
    die("Anda Belum Login");
}
if ($_SESSION['level'] != "resepsionis") {
    die("Anda bukan resepsionis");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- AOS -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" />

    <!-- My CSS -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style1.css" />

    <title>HOTEL ASTON</title>
</head>

<body style="background-color: #F2F3F3;">


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  shadow-sm sticky-top" style="background-color: #000000;">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="../admin/gambar/as.png" alt="" width="80" height="60">

                <font face="times new roman">HOTEL ASTON</font>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
               
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?url=data_pelanggan">Data Pelanggan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Keluar</a>
                    </li>
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    <div class="text-center mt-2">
                    <i class="bi bi-person-circle"></i>
                        <b><?php echo $_SESSION['nama']; ?></b>
                    </div>


                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- include-->
    <?php
    if (isset($_GET['url'])) {
        $url = $_GET['url'];

        switch ($url) {
            case 'data_pelanggan';
                include 'data_pelanggan.php';
                break;
            case 'proses';
                include 'proses.php';
                break;
            case 'tambah_data_customer';
                include 'tambah_data_customer.php';
                break;
        }
    } else {
        include 'data_pelanggan.php';
    }?>

    <!-- Footer -->
<footer class="sticky-footer text-dark" >
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <b><span>&copy; UKK LINGGALIFTIA</span></b>
    </div>
  </div>
</footer>
<!-- Footer --> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>



    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzjWwvjJihKz3-24SxEnHM5XFjNPgQd_dv3uD_fgjLSp_4AAXsC6IC4C_ECvWyLkGsuBg/exec';
        </script>

    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
   
</body>

</html>