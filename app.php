<?php
include "koneksi.php";
session_start();
if(!$_SESSION['sukses'] == true){
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Aplikasi Pegawai</title>
   
    <link href="bootstrap-5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Nindri APP</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <!-- ini nav -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Index
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">
              <span data-feather="file" class="align-text-bottom"></span>
              tambah Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Edit Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Hapus Data
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style= "min-height: 95vh;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title?></h1>
      </div>
      <div class="table-responsive">

      <!-- Disini Isi -->

