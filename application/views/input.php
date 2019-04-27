<html>
<head>
    <title>Formulir Pendaftaran Kostan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
</head>
<body>
    <body style="background-image: url('assets/img/img.jpg')"></body>
    <div>
        <h2 class="heading">Formulir Pendaftaran Kostan</h2>
    </div>
    <form action="<?php echo base_url('/index.php/Crud/tambah_aksi')?>" method="POST">
        <article class="content">
            <table border="0"  cellpadding = "5" cellspacing="4">
                <tr>
                    <td>Jenis Kostan</td>
                    <td></td>
                    <td><select name="jk_input" class="dropdown" id="jk_id">
                    <option value = ""selected> ----Pilih---- </option>
                    <option value="Campur">Campur</option>
                    <option value="Putra">Putra</option>
                    <option value="Putri">Putri</option>                
                    </select></td></br>
                </tr>
                <tr>
                    <td>Nama         <td>
                    <td>
                    <input type="text"name="name_input" placeholder="input nama kostan"></td>
                </tr>
                <tr>
                    <td>Lokasi</td>
                    <td></td>
                    <td><input type="text"name="loc_input" placeholder="input alamat kostan"></td>
                </tr>
        </article>
        <article class="content1">
            <tr>
                <td>Fasilitas Kamar</td>
                <td></td>
                <td>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Accsess Card">Accsess Card</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Accsess Key">Accsess Key</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Kasur">Kasur</input></br>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Lemari Pakaian">Lemari Pakaian</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="TV">TV</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="AC">AC</input></br>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Meja Belajar">Meja Belajar</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Kursi Belajar">Kursi Belajar</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="WIFI">WIFI</input></br>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Dispenser">Dispenser</input>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Kulkas">Kulkas</input></br>
                        <input type="checkbox" name="fk_input" id="fk_input" value="Meja Cermin Hias">Meja Cermin Hias</input></br></td>
            </tr>
                    
            <tr>            
                <td>Luas Kamar</td>
                <td></td>
                <td><input type="text"name="Luas_input"></td>
            </tr>
            <tr>
                <td>Kamar Mandi</td>
                <td></td>
                <td>
                    <input type="checkbox" name="mnd_input" id="fkl_input" value="Kamar Mandi Dalam">Kamar Mandi Dalam</input></br>
                    <input type="checkbox" name="mnd_input" id="fkl_input" value="Kamar Mandi Luar">Kamar Mandi Luar</input>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="Closet Jongkok">Closet Jongkok</input></br>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="Closet Duduk">Closet Duduk</input></br>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="Shower">Shower</input>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="Bak Mandi"></input>Bak Mandi</br>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="wastafel">Wastafel</input>
                    <input type="checkbox" name="mnd_input" id="fkl_input"value="Air Panas"></input>Air Panas</br></td>
            </tr>

            <tr>
                <td>Fasilitas Parkir </td>
                <td></td>
                <td>
                    <input type="checkbox" name="fp_input" id="fp_input" value="Motor">Motor</input></br>
                    <input type="checkbox" name="fp_input" id="fp_input" value="Sepeda">Sepeda</input></br>
                    <input type="checkbox" name="fp_input" id="fp_input" value="Mobil">Mobil</input></br>
                </td>
            </tr>
            <tr>
                <td>Akses Lingkungan</td>
                <td></td>
                <td>
                    <input type="checkbox" name="al_input" id="al_input" value="Masjid">Masjid</input>
                    <input type="checkbox" name="al_input" id="al_input" value="Laundry">laundry</input></br>
                    <input type="checkbox" name="al_input" id="al_input" value="Warung Makan/Rumah Makan">Warung Makan/Rumah Makan</input></br>
                    <input type="checkbox" name="al_input" id="al_input" value="Mini Market/Warung Klontong">Mini Market/Warung Klontong</input></br>
                    <input type="checkbox" name="al_input" id="al_input" value="ATM/Bank"></input>ATM/Bank</br>
                    <input type="checkbox" name="al_input" id="al_input" value="Apotek/Klinik">Apotek/Klinik</input>
                    <input type="checkbox" name="al_input" id="al_input" value="Kampus/Sekolah">Kampus/Sekolah</input></br>
                    <input type="checkbox" name="al_input" id="al_input" value="Pusat Belanja/Mall">Pusat Belanja/Mall</input></br>
                    <input type="checkbox" name="al_input" id="al_input" value="Haltebus /Pos ojek">Haltebus /Pos ojek</input></br>
                </td>
            </tr>
            <tr>
                <td>Durasi Penyewaan Kostan </td>
                    <td></td>
                    <td>
                        <input type="checkbox" name="dpk_input" id="dpk_input" value="Motor">Mingguan</input></br>
                        <input type="checkbox" name="dpk_input" id="dpk_input" value="Sepeda">Bulanan</input></br>
                        <input type="checkbox" name="fp_input" id="dpk_input" value="Mobil">Tahunan</input></br>
                    </td>
            </tr>
            <tr>
                <td>Keterangan Biaya Sewa</td>
                <td></td>
                <td>
                    <textarea rows="5" cols="40%" name="kbs_input"></textarea></td>
                       
            <tr>
                <td>Keterangan Lain</td>
                <td></td>
                <td>
                    <textarea rows="5" cols="40%" name="kl_input"></textarea></td>
            </tr>

            <tr>
                 <td>Keterangan Biaya Lain</td>
                 <td></td>
                 <td>
                    <textarea rows="5" cols="40%" name="kb_input"></textarea></td>
            </tr>
                   
            <tr>
                <td>Deskripsi Kost<td>
                <td>
                    <textarea rows="5" cols="40%" name="dk_input"></textarea></td>
            </tr>

            <tr>
                    <td>Contact Person <td>
                    <td>
                    <input type="text"name="nohp_input" placeholder="input no hp"></td>
            </tr>

           <!--  <tr>
                    <td> Pilih File Image </td>
            </tr>

            <tr>
                    <td>
                        <input type="file" name="image_kost" multiple></td>
            </tr>

            <tr>
                    <td>
                        <input type="submit" name="upload" value="Upload">
                    </td>
            </tr>

            <tr> -->


                <td>
                    <input type="reset" name="reset" value="Reset" /></td>
                <td><input type="submit" name="submit" value="Daftar" /></td>
            </tr>
        </form>

</div>
</article>
</body>
</html>