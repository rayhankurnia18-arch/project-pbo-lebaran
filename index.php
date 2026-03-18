<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Data Mahasiswa</h2>
    <form action="proses.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required>

        <label>Nilai</label>
        <input type="number" name="nilai" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>