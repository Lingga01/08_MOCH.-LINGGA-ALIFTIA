<?php
require 'function.php';
$data = query("SELECT * FROM customer");
if (isset($_POST["cari"])) {
    $data = cari($_POST["keyword"]);
}
?>

<div class="container mt-5">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-dark">Data Pelanggan</h6>
        </div>
        <div class="row justify-content-center">








            <!--tombol caari tanggal-->
            <div class="container">
                <div class="d-flex justify-content-beetwen">
                    <form class action="" method="POST">
                        <div class="input-group  mb-2 mt-3">
                            <input type="date" name="keyword" class="form-control" placeholder="Cari Nama Tamu">
                            <button type="submit" name="cari" class="btn btn-outline-primary">Cari</button>
                        </div>

                    </form>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;





                    <!--tombol caari-->

                    <form action="" method="POST">
                        <div class="input-group  mb-2 mt-3">
                            <input type="text" name="keyword" class="form-control" placeholder="Cari Nama Tamu" autocomplete="off" >
                            <button type="submit" name="cari" class="btn btn-outline-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>






            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table -<!--bordered--> table-hover" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Telpon</th>
                                <th>Nama tamu</th>
                                <th>Tipe kamar</th>
                                <th>Tgl checkin</th>
                                <th>Tgl checkout</th>
                                <th>Status</th>
                                <th>Jumlah</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <?php

                        $i = 1;

                        ?>
                        <?php
                        foreach ($data as $pelanggan) {

                            if ($pelanggan["status"] == "proses") {
                                $status = "Proses";
                                $warna = "badge bg-warning";
                            }
                            if ($pelanggan["status"] == "cek in") {
                                $status = "Checkin";
                                $warna = "badge bg-info";
                            }
                            if ($pelanggan["status"] == "cek out") {
                                $status = "Checkout";
                                $warna = "badge bg-success";
                            } else if ($pelanggan["status"] == "batal") {
                                $status = "Batal";
                                $warna = "badge bg-danger";
                            }
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?php echo $pelanggan['telp']; ?></td>
                                    <td><?php echo $pelanggan['nama_tamu']; ?></td>
                                    <td><?php echo $pelanggan['tipe_kamar']; ?></td>
                                    <td><?php echo $pelanggan['tgl_cekin']; ?></td>
                                    <td><?php echo $pelanggan['tgl_cekout']; ?></td>
                                    <td><span class="<?php echo $warna; ?>"><?php echo $status;  ?></span></td>
                                    <td><?php echo $pelanggan['jumblah']; ?></td>



                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-spinner" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $pelanggan['id_customer']; ?>"></i>

                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $pelanggan['id_customer']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Verifikasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="simpan_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                                            <div class="form-group cols-sm-6">
                                                                <label>ID Customer</label>
                                                                <input type="text" name="id_customer" value="<?php echo $pelanggan['id_customer']; ?>" class="form-control" readonly>
                                                            </div>

                                                            <div class="form-group cols-sm-6">
                                                                <label>Verifikasi Pesanan</label>
                                                                <select class="form-control" name="status">
                                                                    <option>==pilih==</option>
                                                                    <option value="proses">proses</option>
                                                                    <option value="cek in">check in</option>
                                                                    <option value="cek out">check out</option>
                                                                    <option value="batal">batal</option>
                                                                </select>
                                                            </div>


                                                            <div class="form-group cols-sm-6">
                                                                <input type="submit" value="submit" class="btn btn-primary">

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--akhir tambah data-->

                                        <!-- delete data -->
                                        <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $pelanggan['id_customer']; ?>"></i>

                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal1<?php echo $pelanggan['id_customer']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    
                                                    <div class="modal-body">
                                                        <form class="text-center">

                                                            <img src="../images/2.png" width="" height="" alt="...">
                                                          <b>  <font face="times new roman "><h6>Yakin Akan Menghapus Data Ini?</h6></font></b>
                                                            <div class="form-group cols-sm-6">
                                                                <button class="btn btn-warning" data-dismiss="modal">Tidak</button>
                                                                <a href="delete_customer.php?id=<?php echo $pelanggan['id_customer']; ?>" class="btn btn-danger">
                                                                    Hapus
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--akhir-->





                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>

                    </table>


                </div>
            </div>


        </div>
    </div>
</div>