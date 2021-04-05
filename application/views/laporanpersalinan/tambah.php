<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Laporan Persalinan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card mt-2">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Laporan Persalinan</i>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('laporanpersalinan/tambah') ?>" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu">
                                <?= form_error('nama_ibu'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama_suami">Nama Suami</label>
                                <input type="text" class="form-control" name="nama_suami" placeholder="Nama Suami">
                                <?= form_error('nama_suami'); ?>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" class="form-control" name="umur" placeholder="Umur">
                                <?= form_error('umur_persalinan'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat"></textarea>
                                <?= form_error('alamat_persalian'); ?>
                            </div>
                            <div class="form-group">
                                <label for="anak_ke">Anak ke</label>
                                <input type="text" class="form-control" name="anak_ke" placeholder="Anak ke">
                            </div>
                            <div class="form-group">
                                <label for="tgl_persalinan">Tgl Persalinan</label>
                                <input type="date" class="form-control" name="tgl_persalinan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_persalinan">Jenis Persalinan</label>
                                <input type="text" class="form-control" name="Jenis_persalinan">
                            </div>
                            <div class="form-group">
                                <label for="keadaan_bayi">Keadaan Bayi</label>
                                <select name="keadaan_bayi" class="form-control" id="">
                                    <option value="l.h.">L.H.</option>
                                    <option value="bbl">L.M.</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="">
                                    <option value="p">P</option>
                                    <option value="l">L</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bb_&_tb">BB & TB</label>
                                <input type="text" class="form-control" name="bb&tb" placeholder="BB & TB">
                            </div>
                            <div class="form-group">
                                <label for="tgl_kematian_ibu">Tgl Kematian Ibu</label>
                                <input type="date" class="form-control" name="tgl_kematian_ibu">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?= base_url('laporanpersalinan/index') ?>" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>