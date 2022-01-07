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

              <?= $this->session->flashdata('message');
              ?>
              <?= validation_errors('<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>', ' </div>') ?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama User</th>
                    <th>Nama Aset</th>
                    <th>Total Item</th>
                    <th>Harga Aset</th>
                    <th>Status</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>


                <tbody>
                  <?php $no = 1;
                  foreach ($get_penyewa as $data) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['nama_aset'] ?></td>
                      <td><?= $data['jml_aset'] ?></td>
                      <td>Rp.<?= number_format($data['harga'], 0, ',', ',') ?></td>
                      <td>
                        <?php if ($data['status'] != 0) : ?>
                          <a href="" data-target="#status-modal<?= $data['id_penyewa'] ?>" data-toggle="modal" class="badge badge-success">Terkonfirmasi</a>
                        <?php else : ?>
                          <a href="" data-target="#status-modal<?= $data['id_penyewa'] ?>" data-toggle="modal" class="badge badge-warning">Belum terkonfirmasi</a>
                        <?php endif; ?>
                      </td>
                      <td><?= $data['created_at'] ?></td>
                      <td><?= $data['tgl_kembali'] ?></td>
                      <td class="text-center">
                        <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_penyewa'] ?>" data-toggle="modal"><i class="fe-trash" title="Hapus"></i></a>
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

    </div> <!-- container -->

  </div> <!-- content -->


  <!-- add modal content -->
  <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="<?= base_url('backend/penyewa') ?>" class="needs-validation" novalidate>
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Tambah Penyewa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">

            <div class="form-group mb-3">
              <label for="user_id">Nama User</label>
              <select name="user_id" id="user_id" class="form-control" data-toggle="select2">
                <option value="">No Selected</option>
                <?php foreach ($get_register as $register) : ?>
                  <option value="<?= $register['id_regis'] ?>"><?= $register['nama'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="aset_id">Nama Aset</label>
                  <select name="aset_id" id="aset_id" class="form-control" data-toggle="select2">
                    <option value="">No Selected</option>
                    <?php foreach ($get_aset as $aset) : ?>
                      <option value="<?= $aset['id_aset'] ?>"><?= $aset['nama_aset'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="harga_id">Harga Aset</label>
                  <select id="harga_id" name="harga_id" class="form-control" data-toggle="select2">
                    <option value="">No Selected</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="harga_id">Jumlah Sewa</label>
              <input type="number" name="total" id="total" placeholder="exp: 20 unit" class="form-control">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info"><i class="fe-save"></i> Simpan</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


  <!-- hapus modal content -->
  <?php foreach ($get_penyewa as $hapus) : ?>
    <div id="hapus-modal<?= $hapus['id_penyewa'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="standard-modalLabel">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data tersebut?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
            <a href="<?= base_url('backend/penyewa/hapus/') . $hapus['id_penyewa'] ?>" class="btn btn-danger">Hapus</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <?php endforeach; ?>


  <!-- hapus modal content -->
  <?php foreach ($get_penyewa as $status) : ?>
    <div id="status-modal<?= $status['id_penyewa'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="<?= base_url('backend/penyewa/updatestatus') ?>" method="POST" class="needs-validation" novalidate>
            <div class="modal-header">
              <h4 class="modal-title" id="standard-modalLabel">Update Status Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="id_penyewa" value="<?= $status['id_penyewa'] ?>">
              <input type="hidden" name="user_id" value="<?= $status['user_id'] ?>">
              <div class="form-group mb-3">
                <label for="status">Update Status</label>
                <select id="statusid" name="status" class="form-control">
                  </option>
                  <option value="0" <?php if ($status['status'] != "0") : ?> <?php else : ?> selected <?php endif; ?>>Belum
                    terkonfirmasi</option>
                  <option value="1" <?php if ($status['status'] != "1") : ?> <?php else : ?> selected <?php endif; ?>>
                    Terkonfirmasi</option>
                </select>
              </div>

              <div class="form-group mb-3">
                <label for="tgl_kembali">Tanggal Kembali Barang</label>
                <input type="date" name="tgl_kembali" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-warning">update</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <?php endforeach; ?>