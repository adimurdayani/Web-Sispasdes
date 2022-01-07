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
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Tabel <?= $judul; ?> </h4>
                            <form method="POST" action="" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="nik">No. NIK</label>
                                            <input type="text" class="form-control" name="nik" id="nik" placeholder="Enter NIK" value="<?= $get_datapenduduk['nik']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="no_kk">No. KK</label>
                                            <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="Enter No. KK" value="<?= $get_datapenduduk['no_kk']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <input type="hidden" name="id_pend" value="<?= $get_datapenduduk['id_pend']; ?>">
                                    <input type="hidden" name="kk_id" value="<?= $get_datapenduduk['kk_id']; ?>">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="nama_art">Nama ART</label>
                                            <input type="text" class="form-control" name="nama_art" id="nama_art" value="<?= $get_datapenduduk['nama_art']; ?>" placeholder="Enter nama KK">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $get_datapenduduk['tgl_lahir']; ?>" placeholder="Enter nama KK" required>
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
                                                    <option value="<?= $rt['id_rt'] ?>" <?php if ($get_datapenduduk['rt_id'] != $rt['id_rt']) : ?> <?php else : ?> selected <?php endif; ?>>
                                                        <?= $rt['rt'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="dusun_id">Dusun</label>
                                            <select name="dusun_id" class="form-control" data-toggle="select2">
                                                <option value="">No Selected</option>
                                                <?php foreach ($get_dusun as $dusun) : ?>
                                                    <option value="<?= $dusun['id_dusun'] ?>" <?php if ($get_datapenduduk['dusun_id'] != $dusun['id_dusun']) : ?> <?php else : ?> selected <?php endif; ?>>
                                                        <?= $dusun['nama_dusun'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="kelamin">Jenis Kelamin</label>
                                    <select name="kelamin" id="kelamin" class="form-control">
                                        <option value="Perempuan" <?php if ($get_datapenduduk['kelamin'] != "Perempuan") : ?> <?php else : ?> selected <?php endif; ?>>Perempuan</option>
                                        <option value="Laki-Laki" <?php if ($get_datapenduduk['kelamin'] != "Laki-Laki") : ?> <?php else : ?> selected <?php endif; ?>>Laki-Laki</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="ket">Keterangan</label>
                                    <input type="number" class="form-control" name="ket" id="ket" placeholder="Enter keterangan" value="<?= $get_datapenduduk['ket']; ?>" required>
                                    <div class="invalid-feedback">
                                        Kerterangan tidak boleh kosong.
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="fe-save"></i>
                                    Update
                                </button>
                            </form>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->