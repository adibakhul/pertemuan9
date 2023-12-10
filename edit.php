<!DOCTYPE html>
<html>
    <head>
        <title>pemweb</title>
    </head>
    <body>
        <h2>SI Sekolah | Tambah Data Siswa</h2>
        <br/>
        <a href="index.php">Halaman Utama</a>
        <br/>
        <br/>
        <h3>Tambah Data Siswa</h3>

        <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $query = mysqli_query($koneksi, "select * from siswa where id='$id'");
            while($data = mysqli_fetch_array($query)){
        ?>
        <Form method="post" action="edit_aksi.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>
                        <input type="number" name="nis" value="<?php echo $data['nis']?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </Form>
        <?php
            }
        ?>
    </body>
</html>