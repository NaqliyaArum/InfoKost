<!DOCTYPE html>
<html>
<head>
  <title>Info Kost</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css');?>">
</head>
<body>
  <img class="pic" src="<?php echo base_url('assets/image/ibukost.png');?>">
  <img class="pic1" src="<?php echo base_url('assets/image/iklan2.jpg');?>">
  <div class="lg">
      <h1> Register </h1>
      <form action="<?php echo base_url('/index.php/Welcome/register');?>" method="POST">
        <p>Nama Depan</p>
        <input type="text"  name="first"  placeholder="Nama Depan" required><br><br>
        <p>Nama Belakang</p>
        <input type="text"  name="last"  placeholder="Nama Belakang" required><br><br>
        <p>Jenis Kelamin</p>
        <input type="radio" name="Gender" value="male" checked><span class="rad" required>Male</span>
        <input type="radio" name="Gender" value="female"> <span class="rad" required>Female</span>
        <p>Alamat</p>
        <input type="text"  name="alamat"  placeholder="Alamat" required><br><br>
        <p>No Handphone</p>
        <input type="text"  name="handphone"  placeholder="No Handphone" required><br><br>
        <p>Password</p>
        <input type="password"  name="password"  placeholder="Password" required><br><br>
        <br><br>
        <button type="submit" name="Insert">Register</button>
        <h3>already have an account ? <a class="aclk" href="<?php echo base_url('index.php/Welcome/login/');?>">Click here!</a></h3>
      </form>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo base_url('index.php/Welcome/index/');?>">< Kembali ke beranda</a></li>
      </ul>
    </nav>
</body>
</html>
