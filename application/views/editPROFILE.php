<!DOCTYPE html>
<html>
<head>
  <title>Edit Akun - InfoKost</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/PROFILEedit.css')?>">
</head>
<body>
<body style="background-image: url(assets/image/kost.jpg)"></body>
<div class="container">
  <form action="" method="post">
    <div class="row">
      <div class="col-25">
        <label for="name">Nama Lengkap</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="First" placeholder="First Name">
        <input type="text" id="fname" name="Last" placeholder="Last Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">Gender</label>
      </div>
      <div class="col-75">
        <select id="gd" name="gender">
          <option value="lk">Laki-Laki</option>
          <option value="pr">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="tlp">No. Handphone</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Handphone" placeholder="xxxx xxxx">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="almt">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="almt" name="Alamat" placeholder="" style="height:125px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pass">Password</label>
      </div>
      <div class="col-75">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
      </div>
    </div>
    <div class="row">
      <a href="application/views/profil.php">
        <input type="submit" value="Simpan">
      </a>
      <a href="profil.html">
        <input type="button" value="Buang">
      </a>
    </div>
  </form>
</div>

</body>
</html>
