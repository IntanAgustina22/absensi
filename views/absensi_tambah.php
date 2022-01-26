<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Absensi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
								<input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="Nis" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="nama" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="kelas" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="status" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Absensi</button>
                            </div>
                        </div>
                    </form>
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

<?php
if($_POST){
    //Ambil data dari form
    
    $nis=$_POST['nis'];
	$nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $status=$_POST['status'];
    //buat sql
    $sql="INSERT INTO tabel_absensi VALUES ('$nis','$nama','$kelas','$status','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Absensi Error");
    if ($query){
        echo "<script>window.location.assign('?page=absensi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
