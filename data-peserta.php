<head>
	<title>INDEX PESERTA</title>
</head>
    <?php include "header.php"; ?>  
<body>
    <div class="container-fluid">
            <br/>
        <h2>Pendaftar</a>
            <br/>
            <br/>
        <table border="1" class="table">
            <tr class="table-dark">
                <th>Id</th>
                <th>Nama Peserta</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($db,"select * from tbpeserta");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['jeniskelamin']; ?></td>
                    <td><?php echo $d['agama']; ?></td>
                    <td><?php echo $d['sekolahasal']; ?></td>
                    <td>
                        <a class="btn btn-warning btn-round btn-sm" href="form-edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a class="btn btn-danger btn-round btn-sm" href="hapus-peserta.php?id=<?php echo $d['id']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" >HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
    </div>
</body>