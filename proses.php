<?php
include 'class.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$nilai = $_POST['nilai'];

$mhs = new Mahasiswa($nama, $nim, $jurusan, $nilai);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hasil Data</h2>
    <p><?php echo $mhs->tampilData(); ?></p>

    <a href="index.php">
        <button>Kembali</button>
    </a>
</div>

</body>
</html>