<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat form sederhana</title>
</head>
<body>
    <form>
        <label>Nama:</label>
        <div>
        <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
        <label>alamat:</label>
        <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
        <button>Submit</button>
        </div>
    </form>
    <?php

    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }
    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }

    ?>
</body>
</html>