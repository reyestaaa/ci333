<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/AddDataSiswa') ?>" method="post">
        <input type="text" name="nis" placeholder="nis">
        <br>
        <input type="text" name="nama" placeholder="nama">
        <br>
        <input type="text" name="alamat" placeholder="alamat">
        <br>
        <input type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>