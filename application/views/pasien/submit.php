<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">jadwal Bidan</h1>
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
            <a href="<?= base_url('jadwalbidan/tambah') ?>" type="button" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Jadwal</a>
            <div class="card mt-5">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Jadwal Bidan</i>
                </div>
                <div class="card-body">
                    <table id="submit" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">nama </th>
                                <th scope="col">tempat</th>
                                <th scope="col">Jam</th>
                                <th scope="col">Nama Bidan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Senin</td>
                                <td>10:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Selasa</td>
                                <td>10:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Rabu</td>
                                <td>10:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Kamis</td>
                                <td>10:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Jumat</td>
                                <td>13:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Sabtu</td>
                                <td>14:00 s/d 17:00</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Minggu</td>
                                <td>Libur</td>
                                <td>kajol</td>
                                <td>
                                    <a href="" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                                    <a href="" class="badge badge-warning"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>