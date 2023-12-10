<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>SI Kampus | Data Mahasiswa</h2>
        <br/>
        <a href="tambah.php">+ Tambah Data</a>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php
                include'koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi,"select * from siswa");
                while($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nis']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                    </td>
                </tr>  
                <?php      
                }
                ?>
        </table>
    </body>
</html>