<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top : 50px">
                Data Kost <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col md-6">
            <form action="<?php echo base_url('index.php/Crud/tampil');?>" method="post">
                <div class="input-group" style="margin-top : 50px">
                    <input type="text" class="form-control" placeholder="Cari data kost ... " name="keyword" style="margin-top :50px">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="margin-top : 50px">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Kost</h3>
            <?php if (empty($kost)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Jenis Kostan</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Lokasi</th>
                        <th class="text-center" scope="col">Fasilitas Kamar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($kost as $k) : ?>
                        <td class="text-center"><?= $k['jk_input']; ?></td>
                        <td class="text-center"><?= $k['name_input']; ?></td>
                        <td class="text-center"><?= $k['loc_input']; ?></td>
                        <td class="text-center"><?= $k['fk_input']; ?></td>
                        <td class="text-center">
<!--                          <a href="<?= base_url(); ?>index.php/Welcome/hapus/<?= $k['id_kost'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>index.php/Welcome/ubah/<?= $k['id_kost'] ?>" class="badge badge-success float-center" ?>ubah</a> -->
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 
