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
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $judul; ?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul; ?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="header-title">Tabel <?= $judul; ?> yang Disewakan</h4>

          <a href="" class="btn btn-success mb-3" data-target="#add-modal" data-toggle="modal"><i class="fe-plus" title="Tambah Data"></i></a>
          <?= $this->session->flashdata('message');
          ?>

          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nama Aset</th>
                  <th>Harga Aset</th>
                  <th>Jumlah Aset</th>
                  <th class="text-center">Tanggal Update</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($get_aset as $data) : ?>
                  <tr>
                    <th scope="row" class="text-center"><?= $no++ ?></th>
                    <td><?= $data['nama_aset'] ?></td>
                    <td>Rp.<?= number_format($data['harga'], 0, ',', ',') ?></td>
                    <td><?= $data['jml_aset'] ?></td>
                    <td><?= $data['created_at'] ?></td>
                    <td class="text-center">
                      <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_aset'] ?>" data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_aset'] ?>" data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div> <!-- end table-responsive-->

        </div> <!-- end card-box -->
      </div> <!-- end col -->

      <div class="col-lg-12">
        <div class="card-box">
          <h4 class="header-title">Tabel <?= $judul; ?> yang Tidak Disewakan</h4>

          <a href="" class="btn btn-success mb-3" data-target="#add_aset-modal" data-toggle="modal"><i class="fe-plus" title="Tambah Data"></i></a>

          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nama Aset</th>
                  <th>Jumlah Aset</th>
                  <th class="text-center">Tanggal Update</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($get_aset_tdk_disewakan as $data) : ?>
                  <tr>
                    <th scope="row" class="text-center"><?= $no++ ?></th>
                    <td><?= $data['nama_barang'] ?></td>
                    <td><?= $data['jml_barang'] ?></td>
                    <td><?= $data['created_at'] ?></td>
                    <td class="text-center">
                      <a href="" class="badge badge-warning" data-target="#edit_aset-modal<?= $data['id'] ?>" data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus_aset-modal<?= $data['id'] ?>" data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div> <!-- end table-responsive-->

        </div> <!-- end card-box -->
      </div> <!-- end col -->
    </div>
    <!-- end row -->

  </div> <!-- container -->

</div> <!-- content -->

<!-- logout modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="<?= base_url('backend/asetdesa') ?>" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Tambah Aset</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-3">
            <label for="nama_aset">Nama Aset</label>
            <input type="text" class="form-control" name="nama_aset" id="nama_aset" placeholder="Enter nama aset" required>
            <div class="invalid-feedback">
              Nama aset tidak boleh kosong.
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="harga">Harga Sewa Aset</label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="Enter harga Rp.100.000" required>
            <div class="invalid-feedback">
              Harga aset tidak boleh kosong.
            </div>
          </div>

          <div class="form-group mb-3">
            <label for="jml_aset">Jumlah Aset</label>
            <input type="number" class="form-control" name="jml_aset" id="jml_aset" placeholder="Enter jumlah aset" required>
            <div class="invalid-feedback">
              Jumlah aset tidak boleh kosong.
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info"> <i class="fe-save"></i> Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- logout modal content -->
<?php foreach ($get_aset as $edit) : ?>
  <div id="edit-modal<?= $edit['id_aset'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="<?= base_url('backend/asetdesa/edit') ?>" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Update Aset</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id_aset" value="<?= $edit['id_aset'] ?>">

            <div class="form-group mb-3">
              <label for="nama_aset">Nama Aset</label>
              <input type="text" class="form-control" name="nama_aset" id="nama_aset" value="<?= $edit['nama_aset'] ?>" placeholder="Enter nama aset" required>
              <div class="invalid-feedback">
                Nama aset tidak boleh kosong.
              </div>
            </div>
            <div class="form-group mb-3">
              <label for="harga">Harga Sewa Aset</label>
              <input type="number" class="form-control" name="harga" id="harga" value="<?= $edit['harga'] ?>" placeholder="Enter harga Rp.100.000" required>
              <div class="invalid-feedback">
                Harga aset tidak boleh kosong.
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="jml_aset">Jumlah Aset</label>
              <input type="number" class="form-control" name="jml_aset" id="jml_aset" value="<?= $edit['jml_aset'] ?>" placeholder="Enter jumlah aset" required>
              <div class="invalid-feedback">
                Jumlah aset tidak boleh kosong.
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info"> <i class="fe-save"></i> Update</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach; ?>

<!-- logout modal content -->
<?php foreach ($get_aset as $hapus) : ?>
  <div id="hapus-modal<?= $hapus['id_aset'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Hapus Aset</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <p>Apakah anda ingin menghapus data tersebut?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <a href="<?= base_url('backend/asetdesa/hapus/') . $hapus['id_aset'] ?>" class="btn btn-danger"> <i class="fe-trash"></i> Hapus</a>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach; ?>


<!-- logout modal content -->
<div id="add_aset-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="<?= base_url('backend/asetdesa/aset_tdk_disewakan_tambah') ?>" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Tambah Aset yang Tidak Disewakan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-3">
            <label for="nama_barang">Nama Aset</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Enter nama aset" required>
            <div class="invalid-feedback">
              Nama aset tidak boleh kosong.
            </div>
          </div>

          <div class="form-group mb-3">
            <label for="jml_barang">Jumlah Aset</label>
            <input type="number" class="form-control" name="jml_barang" id="jml_barang" placeholder="Enter jumlah aset" required>
            <div class="invalid-feedback">
              Jumlah aset tidak boleh kosong.
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info"> <i class="fe-save"></i> Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- logout modal content -->
<?php foreach ($get_aset_tdk_disewakan as $edit_aset) : ?>
  <div id="edit_aset-modal<?= $edit_aset['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="<?= base_url('backend/asetdesa/aset_tdk_disewakan_edit') ?>" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Update Aset</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id_aset" value="<?= $edit_aset['id_aset'] ?>">

            <div class="form-group mb-3">
              <label for="nama_barang">Nama Aset</label>
              <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $edit_aset['nama_barang'] ?>" placeholder="Enter nama aset" required>
              <div class="invalid-feedback">
                Nama aset tidak boleh kosong.
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="nama_barang">Jumlah Aset</label>
              <input type="number" class="form-control" name="nama_barang" id="nama_barang" value="<?= $edit_aset['nama_barang'] ?>" placeholder="Enter jumlah aset" required>
              <div class="invalid-feedback">
                Jumlah aset tidak boleh kosong.
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info"> <i class="fe-save"></i> Update</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach; ?>

<!-- logout modal content -->
<?php foreach ($get_aset_tdk_disewakan as $hapus_aset) : ?>
  <div id="hapus_aset-modal<?= $hapus_aset['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Hapus Aset yang Tidak Disewakan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <p>Apakah anda ingin menghapus data tersebut?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <a href="<?= base_url('backend/asetdesa/aset_tdk_disewakan_hapus/') . $hapus_aset['id'] ?>" class="btn btn-danger"> <i class="fe-trash"></i> Hapus</a>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach; ?>