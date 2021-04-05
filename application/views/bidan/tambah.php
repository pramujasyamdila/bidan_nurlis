<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Bidan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bidan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <button type="button" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Bidan</button>
            <div class="card mt-5">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Tambah</i>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="nama_bidan">Nama Bidan</label>
                            <input type="text" class="form-control" name="nama_bidan" placeholder="Nama Bidan">
                            <?= form_error('nama_bidan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" name="posisi_bidan" placeholder="Posisi">
                            <?= form_error('posisi_bidan'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?= base_url('bidan/index') ?>" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>