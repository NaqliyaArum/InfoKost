<!DOCTYPE html>
<html>
<head>
  <title>Edit Akun - InfoKos</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/PROFILEedit.css')?>">
</head>
<body>

<div class="container">
  <form>
    <div class="row">
      <div class="col-25">
        <label for="name">Nama Lengkap</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Nama Pertama">
        <input type="text" id="fname" name="name" placeholder="Nama Terakhir">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">Gender</label>
      </div>
      <div class="col-75">
        <select id="city" name="city">
          <option value="jkt">Laki-Laki</option>
          <option value="sby">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="status">No. Handphone</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="xxxx xxxx">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="almt">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="almt" name="alm" placeholder="" style="height:125px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="status">Password</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Password">
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