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

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title">Tabel <?= $judul;?> </h4>

              <a href="" class="btn btn-success mb-3" data-target="#add-modal" data-toggle="modal"><i class="fe-plus"
                  title="Tambah Data"></i></a>
              <?= $this->session->flashdata('message');?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Nama Dusun</th>
                    <th>Tanggal Upload</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($get_dusun as $data):?>
                  <tr>
                    <td><?= $data['nama_dusun']?></td>
                    <td><?= $data['created_at']?></td>
                    <td class="text-center">
                      <a href="" class="badge badge-warning" data-target="#edit-modal<?= $data['id_dusun']?>"
                        data-toggle="modal"><i class="fe-edit" title="Edit"></i></a>
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_dusun']?>"
                        data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>

            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- end row-->

    </div> <!-- container -->

  </div> <!-- content -->


  <!-- add modal content -->
  <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="<?= base_url('backend/datadusun')?>" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Tambah Dusun</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <div class="form-group mb-3">
              <label for="nama_dusun">Nama Dusun</label>
              <input type="text" class="form-control" name="nama_dusun" id="nama_dusun" placeholder="Enter nama dusun"
                required>
              <div class="invalid-feedback">
                Nama dusun tidak boleh kosong.
              </div>
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

  <!-- edit modal content -->
  <?php foreach($get_dusun as $edit):?>
  <div id="edit-modal<?=  $edit['id_dusun']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="<?= base_url('backend/datadusun/edit')?>" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Update Dusun</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="id_dusun" value="<?= $edit['id_dusun']?>">

            <div class="form-group mb-3">
              <label for="nama_dusun">Nama Dusun</label>
              <input type="text" class="form-control" name="nama_dusun" value="<?= $edit['nama_dusun']?>"
                id="nama_dusun" placeholder="Enter nama dusun" required>
              <div class="invalid-feedback">
                Nama dusun tidak boleh kosong.
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning"><i class="fe-save"></i> Update</b>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <?php endforeach;?>

  <!-- edit modal content -->
  <?php foreach($get_dusun as $hapus):?>
  <div id="hapus-modal<?= $hapus['id_dusun']?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Hapus Dusun</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <p>Apakah anda ingin menghapus data <b>"<?= $hapus['nama_dusun']?>"</b></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <a href="<?= base_url('backend/datadusun/hapus/') . $hapus['id_dusun']?>" class="btn btn-danger"><i
              class="fe-trash"></i> Hapus</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <?php endforeach;?>