<?php

include "koneksi.php";
$sql = "SELECT * FROM `data_pegawai` ORDER BY id"; 
$result = mysqli_query ($conn,$sql);
$title = " Data Pegawai";

include "app.php";
?>
<table class="table table-striped">
    <thead style = "font-weight: bold;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Umur</td>
            <td>Alamat</td>
            <td>Salary</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['umur']?></td>
            <td><?=$row['alamat']?></td>
            <td><?=$row['salary']?></td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<?php
include "foother.php";
