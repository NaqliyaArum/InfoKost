<!DOCTYPE html>
<html>
<head>
	<title>tampil</title>
</head>
<body>
	<center><h1>tampilan data</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
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
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->Lokasi ?></td>
			<td><?php echo $u->Fasilitas Kamar ?></td>
			<td><?php echo $u->Luas Kamar ?></td>
			<td><?php echo $u->Fasilitas Parkir ?></td>
			<td><?php echo $u->Akses Lingkungan ?></td>
			<td><?php echo $u->Durasi Penyewaan Kost ?></td>
			<td><?php echo $u->Keterangan biaya sewa ?></td>
			<td><?php echo $u->keterangan biaya lain ?></td>
			<td><?php echo $u->deskripsi kost ?></td>
			<td><?php echo $u->nomor hp ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>