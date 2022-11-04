<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    // ambil id terbesar di kolom id pendaftaran lalu ambil 5 karakter dari sebelah kanan
    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5))AS id FROM pendaftaran");
    $a = mysqli_fetch_object($getMaxId);
    $genId = 'P' . date('Y') . sprintf("%05s", $a->id + 1);

    //proses insert
    $insert = mysqli_query($conn, "INSERT INTO pendaftaran VALUES(
        '" . $genId . "',
        '" . date('Y - m - d') . "',
        '" . $_POST['th_ajaran'] . "',
        '" . $_POST['jurusan'] . "',
        '" . $_POST['nm_peserta'] . "',
        '" . $_POST['tmpt_lahir'] . "',
        '" . $_POST['tngl_lahir'] . "',
        '" . $_POST['jk'] . "',
        '" . $_POST['agama'] . "',
        '" . $_POST['almt_peserta'] . "'

    )");

    if ($insert) {
        echo '<script>window.location = "berhasil.php?id=' . $genId . '"</script>';
    } else {
        echo 'error' . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@483&display=swap" rel="stylesheet">
    <title>Pendaftaran siswa baru</title>
</head>

<body>
    <section class="box-formulir">
        <h2>Formulir Pendaftaran Siswa Baru</h2>
        <form action="" method="post">
            <div class="box">
                <table border="1" class="table_form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" value="2022/2023" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan" id="">
                                <option value="IPA">--Pilih--</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <h3>Data Diri Calon Siswa</h3>
            <div class="box">
                <table border="1" class="table_form">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_peserta">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmpt_lahir">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tngl_lahir">
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki"> Laki-laki &nbsp;&nbsp;
                            <input type="radio" name="jk" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="agama" id="">
                                <option value="">---Pilih---</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="almt_peserta"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </section>
</body>

</html>