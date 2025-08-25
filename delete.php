<?php
 include "koneksi.php";
  $id=$_GET["id"];
  
  $del =$konek -> query("delete from siswa where no ='$id'");
   
  ?>

<script>
    document.location.href="siswa.php";
</script>