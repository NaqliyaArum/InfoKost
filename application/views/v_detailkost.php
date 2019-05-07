<!DOCTYPE html>
<html>
<head>
	<title>KOST</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/list.css');?>">
</head>
<body style ="background-image: url('assets/image/sky.jpg');">
	<div class="wrap">
        <nav class="menu">
	    <ul>
		<li>
		    <a href="<?php echo base_url(); ?>index.php/home">Home</a>
		</li>
		<li>
		    <a href="<?php echo base_url(); ?>index.php/akun">Profil</a>
		</li>
		<?php if($this->session->userdata('status') != "login"){ ?>
		    <li style="float:right"> <a class="smoothscroll" href="<?php echo base_url(); ?>index.php/login"> Login </a> </li>
		<?php }else{?>
		    <li style="float:right"> <a class="smoothscroll" href="<?php echo base_url(); ?>index.php/login/logout"> Logout(<?php echo $this->session->userdata('nama') ?>) </a> </li>
		<?php }?>
		</li>
	    </ul>
	</nav>
		<aside class="sidebar">
			<div class="widget">
				<h2>Welcome</h2>
				<p>Selamat datang di Infokost, situs ini menyediakan daftar kost untuk membantu para perantau mencari tempat tinggal, karena kami mengerti bahwa mereka sedang dalam fase dimana minta ke ortu malu tidak minta tidak makan :)</p>
			</div>
			<div class="widget">
				<h2>Kata Mutiara</h2>
				<p>Sayangi tetangga kost mu, karena dia yang membantu di saat engkau merantau</p>
			</div>
		</aside>
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
				</div>
				<img src="<?php echo base_url('assets/image/dummy.png');?>">
				<!-- <img src="<?php echo base_url().'uploads/'.$u->image_kost ?>" class="img-responsive"> -->	
				<h1> <?php echo $item->name_input ?> </h1>
				<hr>
                <p>Jenis kos : <?php echo $item->jk_input ?></p>
                <p>Lokasi : <?php echo $item->loc_input ?></p>
                <p>Fasilitas : <?php echo $item->fk_input ?></p>
                <p>Luas : <?php echo $item->Luas_input ?></p>
                <p>Kontak pemilik : <?php echo $item->nohp_input ?></p>
			</div>
		</div>
	</div>
</body>
</html>
