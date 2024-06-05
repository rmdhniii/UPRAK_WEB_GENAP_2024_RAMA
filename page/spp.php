<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#users">Users</a></li>
            <li><a href="#settings">Settings</a></li>
            <li><a href="#logout">Logout</a></li>
        </ul>
    </div>
    <form action="" method="post" class="flex gap-8 item-center form">
        <label for="nis" class="col-sm-4 col-form-label">NIS</label>
        <div class="w-[15rem]">
            <input type="num" id="nis" name="nis" placeholder="Masukkan Nis" class="form-control input">
        </div>
        </div>
        <div class="w-[12rem]">
            <input type="number" id="tahun" name="tahun" min="2000" max="2089" placeholder="Masukkan Tahun" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    
</body>
</html>
