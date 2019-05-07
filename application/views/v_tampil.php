<?php
include "config.php";
$query = mysqli_query($connection,"SELECT * FROM my_kost");
?>)

<head>
	<title>Tampil</title>
</head>
<body>
	<form action="" method=""></form>
	<center><h1>Tampilan Data</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Jenis kosan</th>
			<th>Nama</th>
			<th>Lokasi</th>
			<th>Fasilitas Kamar</th>
			<th>Luas Kamar</th>
			<th>Fasilitas Parkir</th>
			<th>Akses Lingkungan</th>
			<th>Durasi Penyewaan Kost</th>
			<th>Keterangan biaya sewa</th>
			<th>keterangan biaya lain</th>
			<th>deskripsi kost</th>
			<th>nomor hp</th>
			<th>action</th>
		</tr>
		<!-- <?php if(mysqli_num_rows($query)>0){ ?> -->
		
		<?php
			$no = 1;
			while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data['jk_input'];?></td>
			<td><?php echo $data['name_input'];?></td>
			<td><?php echo $data['loc_input'];?></td>
			<td><?php echo $data['fk_input'];?></td>
			<td><?php echo $data['Luas_input'];?></td>
			<td><?php echo $data['mnd_input'];?></td>
			<td><?php echo $data['fp_input'];?></td>
			<td><?php echo $data['al_input'];?></td>
			<td><?php echo $data['dpk_input'];?></td>
			<td><?php echo $data['kbs_input'];?></td>
			<td><?php echo $data['kl_input'];?></td>
			<td><?php echo $data['kb_input'];?></td>
			<td><?php echo $data['dk_input'];?></td>
			<td><?php echo $data['nohp_input'];?></td>
			<td>
				<a href="#">Delete</a> |
                <a href="#">Update</a>
			</td>
		</tr>
		<?php $no++; } ?>
	<?php } ?>
</table>
</form>
</body>


			
			
