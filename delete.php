<?php
include "koneksi.php";
$title = "Hapus Data";

if(isset($_POST['submit'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM data_pegawai WHERE `data_pegawai`.`id` = '$id'";

    $result = mysqli_query($conn,$sql);
}

$sql = "SELECT * FROM `data_pegawai` ORDER BY id";
$result = mysqli_query($conn,$sql);

include "app.php";
if(mysqli_num_rows($result) > 0){
?>

<table class="table table-striped">
    <thead style="font-weight: bold;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Salary</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    while ($row=mysqli_fetch_array($result)){
        ?>
        <!-- ini html -->
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['umur']?></td>
            <td><?=$row['alamat']?> </td>
            <td><?=$row['salary']?></td>
            <td>
                <form action="delete.php?id=<?=$row['id']?>" method="post">
                    <button type="submit" name="submit" class="btn btn-danger">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        <!-- end html -->
    <?php
    }
    ?>
    </tbody>
    <?php
    }else{
        echo "<h3 align=\"center\">Data Kosong</h3>";
    }
    ?>
</table>

<?php
include "foother.php";

