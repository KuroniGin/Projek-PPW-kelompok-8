<?php
include 'koneksi.php';
$peserta = mysqli_query($conn, "SELECT * FROM pendaftaran where id_pendaftaran = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($peserta);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@483&display=swap" rel="stylesheet">
    <title>Cetak Berhasil</title>
</head>

<body>
    <h2>Bukti Pendaftaran</h2>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?php echo $p->nm_peserta ?></td>
        </tr>
        <tr>
            <td>Kode Pendaftaran</td>
            <td>:</td>
            <td>
                <?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td>
                <?php echo $p->th_ajaran ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <?php echo $p->jurusan ?></td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td>
                <?php echo $p->tmpt_lahir . ',' . $p->tngl_lahir ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <?php echo $p->jk ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <?php echo $p->agama ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?php echo $p->almt_peserta ?></td>
        </tr>
        <tr>
            <td><input type="button" style="background: white" onclick="window.print()" value="CETAK"></td>
        </tr>
    </table>


</body>

</html>