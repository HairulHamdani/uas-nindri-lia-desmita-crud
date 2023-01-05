<?php
include "koneksi.php";
$id = $_GET['id'];
$title = "Edit Data";

$query = "SELECT * FROM `data_pegawai` WHERE `data_pegawai`.`id` = '$id'";
$result = mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)){
    $nama = $row['nama'];
    $umur = $row['umur'];
    $alamat = $row['alamat'];
    $salary = $row['salary'];
}

if(isset($_POST['submit'])){
    
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $salary = $_POST['salary'];

    $query = "UPDATE `data_pegawai` SET `nama` = '$nama',`umur` = '$umur', `alamat` = '$alamat', `salary` = '$salary' WHERE `data_pegawai`.`id` = '$id'";

    $result = mysqli_query($conn,$query);

    header('location:edit.php');
}



include "app.php";
?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?=$nama?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Umur</label>
        <input type="number" name="umur" placeholder="Masukkan Umur" class="form-control" value="<?=$umur?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?=$alamat?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Salary</label>
        <input type="text" name="salary" placeholder="Masukkan Salary" class="form-control" value="<?=$salary?>">
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

<?php
include "foother.php";
?>