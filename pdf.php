<?php
    include "koneksi.php";
    $query = mysqli_query($db,"SELECT * FROM tbpeserta ORDER BY id ASC");
?>
<div id="label-page">
    <h3>Data Peserta</h3>
</div>
<div id="content">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <!-- <th>No</th> -->
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($d = mysqli_fetch_array($query)){
        ?>
        <tr>
            <!-- <td><?php echo $no ?></td> -->
            <td><?php echo $d["id"];?></td>
            <td><?php echo $d["nama"];?></td>
            <td><?php echo $d["alamat"];?></td>
            <td><?php echo $d["jeniskelamin"];?></td>
            <td><?php echo $d["agama"];?></td>
            <td><?php echo $d["sekolahasal"];?></td>
            
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</div>
<script>
    window.print();
</script>