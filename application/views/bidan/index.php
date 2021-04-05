<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Bidan</h1>
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
            <a href="<?= base_url('bidan/tambah') ?>" type="button" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Bidan</a>
            <div class="card mt-5">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Bidan Data</i>
                </div>
                <div class="card-body">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Poto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($bidan2 as $b) : ?>
                                <tr>
                                    <td scope="row"><?= $i++ ?></td>
                                    <td><img src="<?= base_url() ?>assets/img/<?= $b['foto'] ?>" alt="" width="100"></td>
                                    <td><?= $b['nama_bidan'] ?></td>
                                    <td><?= $b['posisi_bidan'] ?></td>
                                    <td>
                                        <a href="<?= base_url('bidan/profilbidannurlis') ?>" class="badge badge-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>