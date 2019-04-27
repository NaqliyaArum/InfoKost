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
      <h1> Login </h1>
      <form action="insert.php" method="POST">
        <p>No Handphone</p>
        <input type="text"  name=""  placeholder="No Handphone"><br><br>
        <p>Password</p>
        <input type="password"  name=""  placeholder="Password"><br><br>
        <br><br>
        <button type="submit">Login</button>
        <h3>Don't have account ? <a class="aclk" href="<?php echo base_url('index.php/Welcome/register/');?>">Click here!</a></h3>
      </form>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo base_url('index.php/Welcome/index/');?>">< Kembali ke beranda</a></li>
      </ul>
    </nav>
</body>
</html>
