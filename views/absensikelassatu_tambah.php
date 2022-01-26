<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Absensi Kelas 1</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nis</th> 
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Status Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tabel_siswa where kelas=1";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                   
                                
                                <!--Tutup Perulangan data-->
                            
                            <td><div class="form-group">
                            <div class="col-sm-5">
                                <select name="status" class="form-control">
                            <option value="Pemateri">Hadir</option>
                            <option value="Tamu">Sakit</option>
                            <option value="Tamu">Izin</option>
                            <option value="Tamu">Alfa</option>
                             </select>
                            </div>
                        </div>
                            </tr>
                            
                            <?php 
                            
                        
                        } ?>
                        </tbody>
                    </table>
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

<?php 
  if(isset($_POST['simpan'])){
    $cekdata="SELECT id from tbl_absensi2 where id='".$_POST['id']."'"; 
    $ada=mysqli_query($koneksi, $cekdata) or die(mysqli_error());
    $data="SELECT * from tbl_absensi2";
    $aya=mysqli_query($koneksi, $data) or die(mysqli_error());
    if(mysqli_num_rows($ada)>0) { 
      writeMsg('tamu.sama');
    } else { 
     $query="INSERT INTO tbl_absensi2 (id_absensi, nis,  nama, kelas, id_status)
             VALUES ('".$_POST['id']."',
                    '".$_POST['nis']."',
                    '".$_POST['nama']."',
                    '".$_POST['kelas']."',
                    '".$_POST['id_status']."')"; 
      mysqli_query($koneksi, $query) or die("Gagal menyimpan data karena :").mysqli_error(); 
      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?page=index&actions=admin">';
    } 
  } 

  ?>
