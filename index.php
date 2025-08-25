<?php include 'boot.php';?>
<div class="container">
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
          </ul>
          <form class="d-flex" role="search" action="cari.php" method="post" target="YG">
            <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    

    
    
    <div class="row mt-3">
      
      <div class="col-2">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true"> <i class="bi bi-person"></i>LIST</li>
          <a href="siswa.php" class="list-group-item" target="YG">DAFTAR SISWA</a>
        <a href="input.php" class="list-group-item" target="YG">INPUT NAMA SISWA</a>
        <li class="list-group-item">KETERANGAN</li>
      </ul>
    </div>
    <div class="col-10">
      <iframe name="YG" src="" frameborder="0" width="100%" height="700px"></iframe>
    </div>
  </div>
</div>
  