<?php
//error_reporting(0);
//if (!isset($_SESSION['nama'])) {
// $_SESSION['login'] = '<div class="alert alert-danger" role="alert">
//  Anda belum login,silahkan login
//</div>';
//}
?>
<script type="text/javascript">
    //  alert('anda belum login');
    // window.location="login.php";
</script>
<?php
?>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">

            <!--   <div class="col-xl-9 col-lg-11 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">-->

            <div class="card shadow">
                <!-- tombol kembali-->
                <div class="card-body">
                    <div class="form-group cols-sm-3 mt-5">
                        <a href="?url=dashboard" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>


                    <div class="container mt-2">
                        <div class="d-flex justify-content-center">
                            <form action="simpan_tamu.php" method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-sm form-floating mb-3 mt-3">
                                        <input type="date" class="form-control" name="tgl_cekin" required>
                                        <label for="tgl_cekin"> Check In</label>
                                    </div>
                                    <div class="col-sm form-floating mb-3 mt-3">
                                        <input type="date" class="form-control" name="tgl_cekout" required>
                                        <label for="tgl_cekout"> Check Out</label>
                                    </div>
                                    <div class="col-sm form-floating mb-3 mt-3">
                                        <input type="number" class="form-control" name="jumblah" required>
                                        <label for="jumblah">Jumlah Kamar</label>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group cols-sm-5 mt-3">
                            <label>nama tamu</label>
                            <input type="text" name="nama_tamu" value="" class="form-control" autocomplete="off"  required>
                        </div>

                        <div class="form-group cols-sm-5 mt-3">
                            <label>Email</label>
                            <input type="email" name="email" value="" class="form-control" autocomplete="off"  required>
                        </div>

                        <div class="form-group cols-sm-5 mt-3">
                            <label>telpon</label>
                            <input type="tel" name="telp" value="" class="form-control" autocomplete="off" required>
                        </div>


                        <div class="form-group cols-sm-5 mt-3">
                            <label>tipe kamar</label>
                            <select class="form-control" name="tipe_kamar" required>
                                <option>==pilih==</option>
                                <?php
                                require 'koneksi.php';
                                $sql = mysqli_query($koneksi, "select * from fs_kamar");
                                while ($data = mysqli_fetch_array($sql)) {
                                    echo "<option value=$data[tipe_kamar]> $data[tipe_kamar] </option>";
                                }
                                ?>
                            </select>
                        </div>




                        <div class="form-group cols-sm-5 mt-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <input type="reset" value="Kosongkan" class="btn btn-warning">
                        </div>
                      
                        </select>
                    </div>

                </div>
            </div>
        </div>

        </form>
    </div>


</body>