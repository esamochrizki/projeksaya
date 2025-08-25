<?php include 'boot.php'; ?>
<div class="container">

</div>
<table class="table ">
  <thead>
  <tbody>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">jurusan</th>
      <th>Aksi</th>
    </tr>
    </thead>
  </tbody>

  <?php include "koneksi.php";
  $tampil = $konek->query("select * from siswa");
  foreach ($tampil as $data) {
    @$no++;
    ?>
    <tr>
      <th scope="row"><?= $no; ?></th>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['kelas']; ?></td>
      <td><?= $data['jurusan']; ?></td>
      <td>
        <a href="delete.php?id=<?= $data['no']; ?>" onclick="return confirm ('Apakah anda yakin?')"><button
            class="btn btn-danger"><i class="bi bi-trash"></i></button>
        </a>

        <a href="update.php?id=<?= $data['no']; ?>"><button class="btn btn-warning"><i
              class="bi bi-pencil-fill"></i></button>
        </a>
      </td>
    </tr>
    </tbody>
  <?php } ?>
</table>
</div>