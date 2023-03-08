<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @extends('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengalaman Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengalaman Kuliah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Pengalaman kami adalah :</h5>
              Assalamualaikum Wr.Wb.<br>
                Selamat datang di Politeknik Negeri Malang, kampus yang mencetak calon tenaga kerja yang profesional dan berdaya saing global. Sebagai salah satu perguruan tinggi vokasi terbaik di Indonesia, Politeknik Negeri Malang atau yang dikenal dengan POLINEMA berupaya untuk menghadirkan pendidikan yang berkualitas dan berkontribusi dalam mencerdaskan anak bangsa.
                Dengan pendidikan hard skill dan soft skill, pendekatan link and match serta sistem pendidikan yang menyajikan project-based learning dan case method, POLINEMA menghasilkan lulusan dengan pengetahuan, keterampilan serta sikap/attitude yang sesuai dengan kebutuhan industri.
                POLINEMA memiliki 7 Jurusan dengan 46 Program Studi pada jenjang Diploma II, Diploma III, Diploma IV dan Magister Terapan di kampus utama dan tiga kampus PSDKU yang ada di Kota Kediri, Kabupaten Lumajang dan Kabupaten Pamekasan.
                Dalam rangka mencapai visi nya menjadi lembaga pendidikan tinggi vokasi yang unggul dalam persaingan global, POLINEMA saat ini memiliki 8 Program Studi kelas internasional dan 10 Program Studi Double Degree yang bekerja sama dengan Management and Science University (MSU) Malaysia, Shenyang Jianzu University (SJU) China, Shandong University of Science and Technology (SDUST) China, dan Shenyang Aerospace University (SAU) China.
                POLINEMA juga memiliki jaringan kerja sama yang luas di dalam dan luar negeri dengan institusi pendidikan, lembaga pemerintah, industri, organisasi non pemerintah dan berbagai pihak lainnya. Bersama mitranya, POLINEMA bersinergi dalam berbagai program, diantaranya pembelajaran, penyusunan kurikulum, magang mahasiswa, dosen industri, penelitian, pengabdian masyarakat, beasiswa dan rekrutmen.
                POLINEMA mengundang anda untuk merasakan pengalaman akademis di  salah satu kampus hijau versi UI GreenMetric World University Ranking dengan lingkungan yang dinamis dan ramah.
                Wassalamualaikum warahmatullahi wabarakatuh<br>
                dan kami berdua merasa bangga kuliah di Politeknik Negeri Malang<br>
            </div>
            
</section>
@extends('layouts.footer')