<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pasien</li>
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
                    <i class="fas fa-user-nurse"> Data Pasien</i>
                </div>
                <div>
                    <table class="table table-responsive" style="text-align:center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ibu/Suami</th>
                                <th>Alamat Pasien</th>
                                <th>Umur ibu</th>
                                <th>Umur Hamil</th>
                                <th>hamil ke GPA</th>
                                <th>HPHT</th>
                                <th>Taksiran Persalinan</th>
                                <th>Keterangan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pasien as $val) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $val['nama_ortu'] ?></td>
                                    <td><?= $val['alamat_pasien'] ?></td>
                                    <td><?= $val['umur_ibu'] ?></td>
                                    <td><?= $val['umur_hamil'] ?></td>
                                    <td><?= $val['hamil_ke_gpa'] ?></td>
                                    <td><?= $val['hpht_pasien'] ?></td>
                                    <td><?= $val['taksiran_persalinan'] ?></td>
                                    <td><?= $val['keterangan_pasien'] ?></td>
                                    <td>
                                        <a href=""><span class="btn btn-warning"><i class="fas fa fa-edit"></i></span></a>
                                    </td>
                                    <td>
                                        <a href=""><span class="btn btn-danger"><i class="fas fa fa-trash"></i></span></a>
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