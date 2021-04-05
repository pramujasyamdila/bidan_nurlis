<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Jadwal</h1>
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
            <button type="button" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Jadwal</button>
            <div class="card mt-5">
                <div class="card-header">
                    <i class="fas fa-user-nurse"> Tambah</i>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" class="form-control" id="">
                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jum'at">Jumat</option>
                                <option value="sabtu">Sabtu</option>
                                <option value="minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" name="Jam" placeholder="jam">
                        </div>
                        <div class="form-group">
                            <label for="nama_bidan">Nama Bidan</label>
                            <input type="text" class="form-control" name="nama_bidan" placeholder="nama bidan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?= base_url('jadwalbidan/index') ?>" class="btn btn-warning">Kembali</a>
                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>