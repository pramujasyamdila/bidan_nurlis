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
            <a href="<?= base_url('laporanpersalinan/tambah') ?>" type="button" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Laporan </a>
            <div class="card mt-2">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Laporan Persalinan</i>
                </div>
                <div>
                    <table class="table table-responsive" style="text-align:center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ibu</th>
                                <th>Nama Suami</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Anak ke</th>
                                <th>Tgl. Persalinan</th>
                                <th>Jenis Persalinan</th>
                                <th>Keadaan Bayi</th>
                                <th>Jenis Kelamin</th>
                                <th>BB/TB</th>
                                <th>Tgl. Kematian Ibu</th>
                                <th>Ket</th>
                                <th>Aksi</th>
                            </tr>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($persalinan as $p) : ?>
                                <tr>
                                    <td scope="row"><?= $i++ ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td><?= $p['nama_bidan'] ?></td>
                                    <td>
                                        <a href="" class="badge badge-info"><i class="fas fa-info-circle"></i></a>
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