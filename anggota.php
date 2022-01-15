<?php
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $query_delete = mysqli_query($konek,"DELETE FROM anggota WHERE id_anggota = '$id'");
    if($query_delete){
        ?>
        <div class ='alert alert-success'>
        </div>
        <?php
    }
}
if(isset($_POST['save']))
{
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$tgl_lahir = $_POST['tanggal_lahir'];
$tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];

    $query_insert = mysqli_query($konek,"INSERT INTO anggota VALUES('','$nis','$nama','$kelas','$jurusan','$tgl_lahir','$tlp','$alamat','$jk')");
if($query_insert){
?>
    <div class="alert alert- success">
    Data Berhasil Disimpan !!!
    </div>
    <?php
    header('refresh:2; URL=http://localhost/RAFIFZALFA_RPL2/admin.php?page=anggota');
}else{
    ?>
        <div class='alert alert- danger'>
        Data Gagal Disimpan !!!
        </div>
        <?php
    }
}
    ?>
<center><h1 class="mt-4 mb-3">Data Anggota</h1></center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tampil Tambah Data
</button>
<table class="table table-striped table-hover">
    <tr class="text-center">
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>tanggal_lahir</th>
        <th>no_telepon</td>
        <th>Alamat</th>
        <th>jenis_kelamin</th>
        <th>--Action--</th>
    </tr>
    <?php
        $query = mysqli_query($konek,"SELECT * FROM anggota");
        $no = 1;
        foreach ($query as $row) {
    ?>
    <tr>
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td valign="middle"><?php echo $row['nis']; ?></td>
        <td valign="middle"><?php echo $row['nama']; ?></td>
        <td valign="middle"><?php echo $row['kelas']; ?></td>
        <td valign="middle"><?php echo $row['jurusan']; ?></td>
        <td valign="middle"><?php echo $row['tanggal_lahir']; ?></td>
        <td valign="middle"><?php echo $row['no_telepon']; ?></td>
        <td valign="middle"><?php echo $row['alamat']; ?></td>
        <td align="center" valign="middle"><?php echo $row['jenis_kelamin']; ?></td>
        <td valign="middle">
        <a href="?page=anggota&delete&id=<?php echo $row['id_anggota']; ?></td>">
            <button class="btn btn-danger"><i class="fas fa-trash-alt">Delete</i></button>
            </a>
            <button class="btn btn-warning"><i class="fas fa-edit">update</i></button>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>
<!------------------------------------------------------------------------------------>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action=""method="post">
      <div class="form-group">
                <input type="text" class="form-control" name="nis" placeholder="Nis" require>
            </div>
            <div class="form-group mt-2">
                <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" require>
            </div>
            <div class="form-group mt-2">
                <SELECT class="form-control" name="kelas">
                    <option value="">---PILIH KELAS---</option>
                    <option value="XIIRPL1">XIIRPL1</option>
                    <option value="XIIRPL2">XIIRPL2</option>
                    <option value="XIIRPL3">XIIRPL3</option>
                </SELECT>
            </div>
            <div class="form-group mt-3">
                <SELECT class="form-control" name="jurusan">
                    <option value="">---PILIH JURUSAN---</option>
                    <option value="RPL">REKAYASA PERANGKAT LUNAK</option>
                    <option value="TITL">TENAGA INSTALASI TENAGA LISTRIK</option>
                    <option value="TKR">TEKNIK KENDARAAN RINGAN</option>
                </SELECT>
            </div>
            <div class="form-group mt-2">
                <input type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="form-group mt-2">
                <input type="text" class="form-control" name="no_tlp" placeholder="No_Telpon" require>
            </div>
            <div class="form-group mt-2">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" require>
            </div>
            <div class="form-group mt-3">
                <SELECT class="form-control" name="jenis_kelamin">
                    <option value="">---JENIS KELAMIN---</option>
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                </SELECT>
            </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name ="save">Save</button>
        </form>
      </div>
    </div>
  </div>
  </div>