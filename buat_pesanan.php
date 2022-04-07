<div class="container mt-3">
<?php
        if (!empty($_SESSION['berhasil'])) {
            echo $_SESSION['berhasil'];
            unset($_SESSION['berhasil']);
        }
        ?>
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





       
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>email</th>
                        <th>telpon</th>
                        <th>nama</th>
                        <th>kamar</th>
                        <th>cek in</th>
                        <th>cek out</th>
                        <th>Jumlah</th>
                        <th>Option</th>
                    </tr>
                </thead>



                <?php

                require 'koneksi.php';
                $sql = mysqli_query($koneksi, "SELECT * from customer order by id_customer desc limit 1 ");
                while ($data = mysqli_fetch_array($sql)) {


                    $i = 1;
                ?>


                    <tbody>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['nama_tamu']; ?></td>
                            <td><?php echo $data['tipe_kamar']; ?></td>
                            <td><?php echo $data['tgl_cekin']; ?></td>
                            <td><?php echo $data['tgl_cekout']; ?></td>
                            <td><?php echo $data['jumblah']; ?></td>




                            <td>
                                <!--aksi-->

                                <a href="prosescetak/cetak_pemesanan.php" target="_blank" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="bi bi-printer"></i>
                                    </span>
                                    <span class="text">Cetak</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                <?php } ?>
            </table>
            <div class="text">
                <font color="red"> *Unduh Bukti Cetak untuk di serahkan ke recepsionis </font>
            </div>
        </div>
    </div>
</div>

</div>