<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Absensi Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tabel_absensi WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Absensi SD NEGERI 091641 BANDAR TINGGI</h2>
                        <h4>Bandar Tinggi, Bandar Tinggi, Kec. Bandar Masilam, <br> Kab. Simalungun, Sumatera Utara, dengan kode pos 21184.</h4>
                        <hr>
                        <h3>DATA ABSENSI</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nis</td> <td><?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
								

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Hamlun, S.pd<strong></u><br>
                                        NIP.12345678919
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
