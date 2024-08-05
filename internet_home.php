<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard 2</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="adminLTE/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="adminLTE/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-dark">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Beranda</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Kontak</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Cari">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">
<div class="media">
<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Telepon saya kapan saja...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
</div>
</div>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<div class="media">
<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Saya sudah menerima pesanmu, bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
</div>
</div>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<div class="media">
<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Pesan masuk di sini</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Jam Lalu</p>
</div>
</div>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">Lihat Semua Pesan</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifikasi</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 pesan baru
<span class="float-right text-muted text-sm">3 menit</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 permintaan pertemanan
<span class="float-right text-muted text-sm">12 jam</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 laporan baru
<span class="float-right text-muted text-sm">2 hari</span>
</a>
</div>
<a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="index3.html" class="brand-link">
<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Cari" aria-label="Cari">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="dashboard_admin.php" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="internet_home.php" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>Internet Home</p>
</a>
</li>
<li class="nav-header">CONTOH</li>
<li class="nav-item">
<a href="kalender.php" class="nav-link">
<i class="nav-icon fas fa-calendar-alt"></i>
<p>
Kalender
<span class="badge badge-info right">2</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-envelope"></i>
<p>
Kotak Surat
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="pages/mailbox/mailbox.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inbox</p>
</a>
</li>
<li class="nav-item">
<a href="pages/mailbox/compose.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Buat Pesan</p>
</a>
</li>
<li class="nav-item">
<a href="pages/mailbox/read-mail.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Baca Surat</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-search"></i>
<p>
Pencarian
</p>
</a>
</li>
<li class="nav-header">LABEL</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
<p class="text">Penting</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Perhatian</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-info"></i>
<p>Informasi</p>
</a>
</li>
</ul>
</nav>
</div>
</aside>

<div class="content-wrapper">
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Data Pelanggan</h1>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah-pelanggan">Tambah Pelanggan</button>
    <button class="btn btn-success btn-sm ml-2" data-toggle="modal" data-target="#modal-input-pembayaran">Input Pembayaran</button>
</div>
<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Nama</th>
<th>No HP</th>
<th>Alamat</th>
<th>Paket Wifi</th>
<th>Tanggal Aktivasi</th>
<th>Aksi</th>
<th>Riwayat Pembayaran</th>
</tr>
</thead>
<tbody>
<?php
                $conn = new mysqli("localhost", "root", "", "pilarapp");

                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM pelanggan";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        $statusButtonClass = $row['status'] == 'Aktif' ? 'btn-success' : 'btn-danger';
                        echo "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . $row['nama_pelanggan'] . "</td>
                                <td>" . $row['no_wa'] . "</td>
                                <td>" . $row['alamat'] . "</td>
                                <td>" . $row['paket_wifi'] . "</td>
                                <td>" . $row['tanggal_aktivasi'] . "</td>
                                <td>
                                    <button id='status-button-" . $row['pelanggan_id'] . "' 
                                            class='btn $statusButtonClass' 
                                            onclick='toggleStatus(" . $row['pelanggan_id'] . ", \"" . $row['status'] . "\")'>" . $row['status'] . "</button>
                                </td>
                                <td><a href='history_pembayaran.php?pelanggan_id=" . $row['pelanggan_id'] . "' class='btn btn-primary'>Klik di sini</a></td>
                            </tr>";
                    }
                }
                $conn->close();
                ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>

<div class="modal fade" id="modal-tambah-pelanggan">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Tambah Pelanggan</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" action="tambah_pelanggan.php">
<div class="card-body">
<div class="form-group">
<label for="nama">Nama</label>
<input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama">
</div>
<div class="form-group">
<label for="nomor_hp">Nomor HP</label>
<input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP">
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
</div>
<div class="form-group">
<label for="paket_wifi">Paket Wifi</label>
<input type="text" class="form-control" id="paket_wifi" name="paket_wifi" placeholder="Masukkan Paket Wifi">
</div>
<div class="form-group">
<label for="tanggal_aktivasi">Tanggal Aktivasi</label>
<input type="date" class="form-control" id="tanggal_aktivasi" name="tanggal_aktivasi">
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modal-input-pembayaran">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Input Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="history_pembayaran.php" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_z" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="nominal_bayar">Jumlah Pembayaran</label>
                            <input type="text" class="form-control" id="nominal_bayar" name="nominal_bayar" placeholder="Masukkan Jumlah Pembayaran">
                        </div>
                        <div class="form-group">
                            <label for="kurang_bayar">Sisa Tagihan</label>
                            <input type="text" class="form-control" id="kurang_bayar" name="kurang_bayar" placeholder="Masukkan Sisa Tagihan">
                        </div>
                        <div class="form-group">
                            <label for="bukti_tf">Bukti Transfer</label>
                            <input type="file" class="form-control" id="bukti_tf" name="bukti_tf">
                        </div>
                        <div class="form-group">
                            <label for="terbilang">Terbilang</label>
                            <input type="text" class="form-control" id="terbilang" name="terbilang" placeholder="Masukkan Terbilang Pembayaran">
                        </div>
                        <div class="form-group">
                            <label for="untuk_pembayaran">Untuk Pembayaran</label>
                            <input type="text" class="form-control" id="untuk_pembayaran" name="untuk_pembayaran" placeholder="Masukkan Untuk Pembayaran">
                        </div>
                        <input type="hidden" id="pelanggan_id" name="pelanggan_id">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="adminLTE/plugins/jquery/jquery.min.js"></script>
<script src="adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="adminLTE/dist/js/adminlte.js?v=3.2.0"></script>

<script>
function showInputPembayaranModal(pelangganId) {
    document.getElementById("pelanggan_id").value = pelangganId;
    $('#modal-input-pembayaran').modal('show'); // Tampilkan modal
}
</script>

<script>
function toggleStatus(button, pelangganId) {
button.classList.toggle("btn-success");
button.classList.toggle("btn-danger");
button.innerHTML = button.innerHTML === "Aktif" ? "Nonaktif" : "Aktif";
// Lakukan panggilan AJAX untuk mengupdate status pelanggan di server menggunakan pelangganId
}

function setPelangganId(pelangganId) {
document.getElementById("pelanggan_id").value = pelangganId;
}
</script>
</body>
</html>
