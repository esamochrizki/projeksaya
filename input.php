<?php include "boot.php"; ?>

<div class="container col-4">
    <div class="card">
  <div class="card-body">
<form action="" method="post">
    <div class="text-center">
    <label for=""><b>Input Data Siswa</b></label>
</div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kelas</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kelas">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jurusan">
    </div>
    
<div class="text-center">
    <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
</div>
</form>

</div>
</div>
</div>

<?php 
if(isset($_POST["simpan"])){

include "koneksi.php";
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];

$simpan=$konek->query("insert into siswa (nama,kelas,jurusan) value('$nama','$kelas','$jurusan')");
}
?>
