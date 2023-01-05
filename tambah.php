<?php

// ini koneksi ygy
include "koneksi.php";
$title = "Tambah Data";

if(isset($_POST['submit'])){
    
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO `data_pegawai` (`id`, `nama`, `umur`, `alamat`, `salary`) VALUES (NULL, '$nama', '$umur', '$alamat', '$salary')";
    $result = mysqli_query($conn,$sq);

    header('location:index.php');
}

include "app.php";
?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Umur</label>
        <input type="text" name="umur" placeholder="Masukkan Umur" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Salary</label>
        <input type="text" timezone_location_get="en_us" name="salary" placeholder="Masukkan Salary" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

<?php
include "foother.php";