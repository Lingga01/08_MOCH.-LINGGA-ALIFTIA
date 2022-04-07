<?php
require 'cari2.php';
$data = query("SELECT * FROM fs_kamar");
if (isset($_POST["cari"])) {
    $data = cari($_POST["search"]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>




<!-- AWAL TAMBAH DATA-->
<div class="container mt-5">
<body id="page-top">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fasilitas tambahan</h6>
        </div>

        <div class="card-body">
            <a href="" data-toggle="modal" data-target="#Edit" class="btn btn-primary btn-icon-split">
                <span class="text">Tambah Data</span>
            </a><br><br>

            <!-- AwalModal -->
            <div class="modal fade" id="Edit">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!--isi -->
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Fasilitas Kamar</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="card-body">
                                <form action="simpan_data_fs_kamar.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="form-group cols-sm-6">
                                        <label>Tipe Kamar</label>
                                        <input type="text" name="tipe_kamar" value="" class="form-control" >
                                    </div>

                                    <div class="form-group cols-sm-6">
                                        <label>Nama Fasilitas</label>
                                        <textarea class="form-control" rows="7" name="nama_fasilitas"></textarea>
                                    </div>

                                    <div class="form-group cols-sm-6">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <input type="reset" value="Kosongkan" class="btn btn-warning">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--akhir tambah data-->
        
            <!--tombol caari-->
            <form action="" method="POST">
                <div class="input-group mb-3 col-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari" autocomplete="off" >
                    <button type="submit" name="cari" class="btn btn-outline-primary">Cari</button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table -<!--bordered--> table-hover" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Tipe Kamar</th>
                            <th class="text-center">Nama Fasilitas</th>
                            <!-- <th class="text-center">Gambar</th>-->
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data as $kamar) {
                    ?>
                        <tbody>
                            <tr>
                                <td class="text-center"><?php echo $kamar['tipe_kamar']; ?></td>
                                <td class="text-center"><?php echo$kamar['nama_fasilitas']; ?></td>
                                <td class="text-center">
                                    <!--button-->
                                    <!--AWAL EDIT KAMAR-->
                                    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit" data-toggle="modal" data-target="#Editfs<?php echo $kamar['id_kamar']; ?>"></i>
                                    </button>
                                    <!-- awalModal -->
                                    <div class="modal fade" id="Editfs<?php echo $kamar['id_kamar']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!--isi -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Fasilitas Kamar</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body text-left">
                                                    <form action="update_fs_kamar.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-group cols-sm-6">
                                                            <label>ID Kamar</label>
                                                            <input type="text" name="id_kamar" value="<?php echo $kamar['id_kamar']; ?>" class="form-control" readonly>
                                                        </div>
                                                        <div class="form-group cols-sm-6">
                                                            <label>Tipe Kamar</label>
                                                            <input type="text" name="tipe_kamar" value="<?php echo$kamar['tipe_kamar']; ?>" class="form-control">
                                                        </div>
                                                <div class="form-group cols-sm-6">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="7" name="nama_fasilitas">
                                                       <?php echo $kamar['nama_fasilitas']; ?>
                                                         </textarea>
                                                 </div> 
                                                        <div class="form-group cols-sm-6">
                                                            <input type="submit" value="Edit Data" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- AKHIR EDIT DATA-->

                                    <!-- LIHAT DATA-->

                                    <!--AWAL lihat data-->
                                    <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-fw fa-eye" data-toggle="modal" data-target="#Lihat1<?php echo$kamar['id_kamar']; ?>"></i>
                                    </button>
                                    <!-- awalModal -->
                                    <div class="modal fade" id="Lihat1<?php echo $kamar['id_kamar']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!--isi -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Lihat Data Kamar</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body text-left">
                                                 <form action="update_fs_kamar.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-group cols-sm-6">
                                                            <label>ID Kamar</label>
                                                            <input type="text" name="id_kamar" value="<?php echo$kamar['id_kamar']; ?>" class="form-control" readonly>
                                                        </div>
                                                        <div class="form-group cols-sm-6">
                                                            <label>Tipe Kamar</label>
                                                            <input type="text" name="tipe_kamar" value="<?php echo $kamar['tipe_kamar']; ?>" class="form-control" readonly>
                                                        </div>
                                                        <div class="form-group cols-sm-6">
                                                            <label>Nama Fasilitas</label>
                                                            <input type="text" name="nama_fasilitas" value="<?php echo $kamar['nama_fasilitas']; ?>" class="form-control" readonly>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- -->
                                    <!--AWAL delete data-->
                                    <button type="button" class="btn btn-danger btn-circle"> <i class="fa fa-trash" data-toggle="modal" data-target="#deletefs<?php echo $kamar['id_kamar']; ?>"></i>
                                        </button>
                                        <!-- awalModal -->
                                        <div class="modal fade" id="deletefs<?php echo $kamar['id_kamar']; ?>" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!--isi -->
                                                        <form class="text-center">
                                                            <img src="../images/2.png" width="" height="" alt="...">
                                                            <b>
                                                                <font face="times new roman ">
                                                                    <h6>Yakin Akan Menghapus Data Ini?</h6>
                                                                </font>
                                                            </b>
                                                            <div class="form-group cols-sm-6">
                                                                <button class="btn btn-warning" data-dismiss="modal">Tidak</button>
                                                                <a href="deletefs_kamar.php?id=<?php echo $kamar['id_kamar']; ?>" class="btn btn-danger">
                                                                    Hapus
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- -->
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

  



    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>