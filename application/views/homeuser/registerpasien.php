<br>
<br>
<br>
<div class="container mt-4">
    <h1>Form Daftar Pasien</h1>
</div>
<div class="container mt-5">
    <form action="<?= base_url('homeuser/tambah') ?>" method="post">
        <div class="row mt-5">
            <!-- col pertama di kiri -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nama Ortu</label>
                    <input type="text" name="nama_ortu" class="form-control">
                    <?= form_error('nama_ortu', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="">Alamat Pasien</label>
                    <input type="text" name="alamat_pasien" class="form-control">
                    <?= form_error('alamat_pasien', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="">Umur Ibu</label>
                    <input type="text" name="umur_ibu" class="form-control">
                    <?= form_error('umur_ibu', '<small class="text-danger">', '</small>') ?>

                </div>
                <div class="form-group">
                    <label for="">Keterangan Pasien</label>
                    <input type="text" name="keterangan_pasien" class="form-control">
                    <?= form_error('keterangan_pasien', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>

            <!-- col kedua di kanan -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Umur Hamil</label>
                    <input type="text" name="umur_hamil" class="form-control">
                    <?= form_error('umur_hamil', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="">Hamil Ke GPA</label>
                    <input type="text" name="hamil_ke_gpa" class="form-control">
                    <?= form_error('hamil_ke_gpa', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="">HPHT</label>
                    <input type="text" name="hpht_pasien" class="form-control" placeholder="xample">
                    <?= form_error('hpht_pasien', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="">Taksiran Persalinan</label>
                    <input type="date" name="taksiran_persalinan" class="form-control">
                    <?= form_error('taksiran_persalinan', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block"><i class="icofont-save"></i> Simpan</button>
    </form>
</div>