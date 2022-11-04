<?php
include 'koneksi.php';
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
    <section class="box-formulir">
        <h2>PENDAFTARAN ANDA BERHASIL</h2>

        <div class="box">
            <h4>Kode Pendaftaran anda = <?php echo $_GET['id'] ?></h4>
            <a href="cetak.php?id=<?php echo $_GET['id'] ?>" class="cetak">Cetak Bukti Daftar</a>
        </div>
    </section>
</body>

</html>