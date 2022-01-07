<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('backend/datapenduduk') ?>">Data Penduduk</a></li>
                                <li class="breadcrumb-item active"><?= $judul; ?></li>
                            </ol>
                        </div>
                        <h4 class="page-title"><?= $judul; ?></h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Tabel <?= $judul; ?> </h4>

                            <a href="" class="btn btn-success mb-3" data-target="#add-modal" data-toggle="modal"><i class="fe-plus" title="Tambah Data"></i></a>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama KK</th>
                                        <th>Nama ART</th>
                                        <th>NIK</th>
                                        <th>NO. KK</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Dusun</th>
                                        <th>RT</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Ket.</th>
                                        <th>Tanggal Upload</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php $no = 1;
                                    foreach ($get_datapenduduk as $data) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kk'] ?></td>
                                            <td><?= $data['nama_art'] ?></td>
                                            <td><?= $data['nik'] ?></td>
                                            <td><?= $data['no_kk'] ?></td>
                                            <td><?= $data['tgl_lahir'] ?></td>
                                            <td><?= $data['nama_dusun'] ?></td>
                                            <td><?= $data['rt'] ?></td>
                                            <td><?= $data['kelamin'] ?></td>
                                            <td><?= $data['ket'] ?></td>
                                            <td><?= $data['created_at'] ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('backend/datapenduduk/edit/') . $data['id_pend'] ?>" class="badge badge-warning"><i class="fe-edit" title="Edit"></i></a>
                                                <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_pend'] ?>" data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->

<!-- add modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?= base_url('backend/datapenduduk/tambah') ?>" class="needs-validation" novalidate>
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Tambah Data Penduduk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="nik">No. NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="Enter NIK" value="<?= set_value('nik') ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="no_kk">No. KK</label>
                                <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="Enter No. KK" value="<?= set_value('no_kk') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <input type="hidden" name="kk_id" value="<?= $get_id_kk['id_kk'] ?>">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="nama_art">Nama ART</label>
                                <input type="text" class="form-control" name="nama_art" id="nama_art" placeholder="Enter nama ART" value="<?= set_value('nama_art') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= set_value('tgl_lahir') ?>" placeholder="Enter tanggal lahir" required>
                        <div class="invalid-feedback">
                            Tanggal lahir tidak boleh kosong.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="rt_id">RT</label>
                                <select name="rt_id" id="rt_id" class="form-control" data-toggle="select2">
                                    <option value="">No Selected</option>
                                    <?php foreach ($get_rt as $rt) : ?>
                                        <option value="<?= $rt['id_rt'] ?>"><?= $rt['rt'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="dusun_id">Dusun</label>
                                <select name="dusun_id" id="dusun_id" class="form-control" data-toggle="select2">
                                    <option value="">No Selected</option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control">
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="ket">Keterangan</label>
                        <input type="number" class="form-control" name="ket" id="ket" placeholder="Enter keterangan" value="<?= set_value('ket') ?>" required>
                        <div class="invalid-feedback">
                            Kerterangan tidak boleh kosong.
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-info"><i class="fe-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit modal content -->
<?php foreach ($get_datapenduduk as $hapus) : ?>
    <div id="hapus-modal<?= $hapus['id_pend'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="standard-modalLabel">Hapus Data Penduduk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini <b>"<?= $hapus['nama_kk'] ?>"</b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('backend/datapenduduk/hapus/') . $hapus['id_pend'] ?>" class="btn btn-danger"><i class="fe-trash"></i> Hapus</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php endforeach; ?>