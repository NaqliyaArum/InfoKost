<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title>InfoKost</title>
</head>
<body>
    <nav>
      <ul>
        <li><a href="<?php echo base_url('index.php/Welcome/login');?>">Logout</a></li>
        <li><a href="<?php echo base_url('index.php/Welcome/editakun');?>">Akun</a></li>
        <li><a href="<?php echo base_url('index.php/Crud/tambah');?>">Tambah Kost</a></li>
        <li><a href="<?php echo base_url('index.php/Crud/tampil');?>">Daftar Kost</a></li>
      </ul>
    </nav>
</body>