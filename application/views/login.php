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
      <form action="<?php echo base_url('/index.php/Welcome/proses_login');?>" method="POST">
        <p>No Handphone</p>
        <input type="text"  name="No"  placeholder="No Handphone"><br><br>
        <span><?php echo form_error('No')?></span>
        <p>Password</p>
        <input type="password"  name="Pass"  placeholder="Password"><br><br>
        <br><br>
        <span><?php echo form_error('Pass')?></span>
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
