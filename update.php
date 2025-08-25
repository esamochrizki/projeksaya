<?php include "boot.php";
include "koneksi.php";
$id = $_GET["id"];
$tampil = $konek->query("select * from siswa where no=$id");
$data = $tampil->fetch_array();
?>

<div class="container col-4 ">
    <div class="card bg-info">
        <div class="card-body">
            <form action="" method="post">
                <div class="text-center">
                    <label for=""><b>Edit nama siswa</b></label>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><i class="bi bi-people-fill"></i>Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="nama" value="<?= $data['nama'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><i class="bi bi-building"></i>Kelas</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="kelas" value="<?= $data['kelas'] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><i class="bi bi-broadcast-pin"></i>Jurusan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="jurusan" value="<?= $data['jurusan'] ?>">
                </div>

                <div class="text-center">
                    <button type="submit" name="simpan" class="btn btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
if (isset($_POST["simpan"])) {

    include "koneksi.php";
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $simpan = $konek->query("update siswa set nama='$_POST[nama]',kelas='$_POST[kelas]',jurusan='$_POST[jurusan]' where no='$id'");



}

?>