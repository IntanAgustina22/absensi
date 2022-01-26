<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Absensi Kelas 1</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT tbl_siswa.*, tbl_status.id as nama from tbl_siswa left join tbl_status on tbl_siswa.id=tbl_status.id where tbl_siswa.id='$_GET[id]'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Absensi</button>
                            </div>
                        </div>
                </div>
                
                <div class="panel-footer">
                    <a href="?page=absensi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Absensi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
