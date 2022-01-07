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
                <li class="breadcrumb-item active"><?= $judul;?></li>
              </ol>
            </div>
            <h4 class="page-title"><?= $judul;?></h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="col-lg">
        <div class="card-box">
          <h4 class="header-title">Tabel <?= $judul;?></h4>

          <a href="" class="btn btn-success mb-3" data-target="#add-modal" data-toggle="modal"><i class="fe-plus"
              title="Tambah Data"></i></a>

          <?= $this->session->flashdata('message');?>

          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>RT</th>
                  <th class="text-center">Nama Dusun</th>
                  <th class="text-center">Tanggal Upload</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($get_rt as $data):?>
                <tr>
                  <th scope="row" class="text-center"><?= $no++?></th>
                  <td><?= $data['rt']?></td>
                  <td><?= $data['nama_dusun']?></td>
                  <td><?= $data['created_at']?></td>
                  <td class="text-center">
                    <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_rt']?>"
                      data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                    <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_rt']?>"
                      data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div> <!-- end table-responsive-->

        </div> <!-- end card-box -->
      </div> <!-- end col -->
    </div>
    <!-- end row -->

  </div> <!-- container -->

</div> <!-- content -->

<!-- add modal content -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="<?= base_url('backend/datart')?>" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Tambah RT</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-3">
            <label for="rt">RT</label>
            <input type="text" class="form-control" name="rt" id="rt" placeholder="Enter RT" required>
            <div class="invalid-feedback">
              RT tidak boleh kosong.
            </div>
          </div>

          <div class="form-group mb-3">
            <label for="dusun_id">Nama Dusun</label>
            <select name="dusun_id" id="dusun_id" class="form-control">
              <?php foreach($get_dusun as $dusun):?>
              <option value="<?= $dusun['id_dusun']?>"><?= $dusun['nama_dusun']?></option>
              <?php endforeach;?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info"><i class="fe-save"></i> Simpan</b>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- add modal content -->
<?php foreach($get_rt as $edit):?>
<div id="edit-modal<?= $edit['id_rt']?>" class="modal fade" tabindex="-1" role="dialog"
  aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="<?= base_url('backend/datart/edit')?>" class="needs-validation" novalidate>
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Update RT</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_rt" id="id_rt" value="<?= $edit['id_rt']?>">

          <div class="form-group mb-3">
            <label for="rt">RT</label>
            <input type="text" class="form-control" name="rt" id="rt" value="<?= $edit['rt']?>" placeholder="Enter RT"
              required>
            <div class="invalid-feedback">
              RT tidak boleh kosong.
            </div>
          </div>

          <div class="form-group mb-3">
            <label for="dusun_id">Nama Dusun</label>
            <select name="dusun_id" id="dusun_id" class="form-control">
              <?php foreach($get_dusun as $dusun):?>
              <option value="<?= $dusun['id_dusun']?>" <?php if($edit['dusun_id'] != $dusun['id_dusun']):?>
                <?php else:?> selected <?php endif;?>><?= $dusun['nama_dusun']?></option>
              <?php endforeach;?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-info"><i class="fe-save"></i> Simpan</b>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach;?>


<!-- add modal content -->
<?php foreach($get_rt as $hapus):?>
<div id="hapus-modal<?= $hapus['id_rt']?>" class="modal fade" tabindex="-1" role="dialog"
  aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="standard-modalLabel">Update RT</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <p>Apakah anda ingin menghapus data ini <b>"<?= $hapus['rt']?>"</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('backend/datart/hapus/') . $hapus['id_rt']?>" class="btn btn-danger"><i
            class="fe-trash"></i> Hapus</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach;?>