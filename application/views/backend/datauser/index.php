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

              <?= $this->session->flashdata('message');
              ?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Hp</th>
                    <th>Status</th>
                    <th>Waktu Regis</th>
                    <th class="text-center">aksi</th>
                  </tr>
                </thead>


                <tbody>
                  <?php foreach($get_register as $data):?>
                  <tr>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['email']?></td>
                    <td><?= $data['no_hp']?></td>
                    <td>
                      <?php if( $data['status'] == 1):?>
                      <a href="" data-target="#update-modal<?= $data['id_regis']?>" data-toggle="modal"
                        class="badge badge-success">Online</a>
                      <?php else:?>
                      <a href="" data-target="#update-modal<?= $data['id_regis']?>" data-toggle="modal"
                        class="badge badge-warning">Offline</a>
                      <?php endif?>
                    </td>
                    <td><?= $data['created_at']?></td>
                    <td class="text-center">
                      <a href="" class="badge badge-danger" data-target="#hapus-modal<?= $data['id_regis']?>"
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
    </div>
    <!-- end row -->

  </div> <!-- container -->

</div> <!-- content -->

<!-- update modal content -->
<?php foreach($get_register as $update):?>
<div id="update-modal<?= $update['id_regis']?>" class="modal fade" tabindex="-1" role="dialog"
  aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('backend/datauser/update_status');?>" method="post">
        <div class="modal-header">
          <h4 class="modal-title" id="standard-modalLabel">Update Status</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">

          <input type="hidden" name="id_regis" value="<?= $update['id_regis']?>">

          <div class="form-group mb-3">
            <label for="status">Status User</label>
            <select name="status" id="statususer" class="form-control">
              <option value="0" <?php if($update['status'] != "0"):?> <?php else:?> selected <?php endif;?>>Offline
              </option>
              <option value="1" <?php if($update['status'] != "1"):?> <?php else:?> selected <?php endif;?>>Online
              </option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-warning"><i class="fe-save"></i> Update</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach;?>

<!-- hapus modal content -->
<?php foreach($get_register as $hapus):?>
<div id="hapus-modal<?= $hapus['id_regis']?>" class="modal fade" tabindex="-1" role="dialog"
  aria-labelledby="standard-modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="standard-modalLabel">Hapus User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <p>Apakah anda ingin menghapus data tersebut?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
        <a href="<?= base_url('backend/datauser/hapus/') . $hapus['id_regis']?>" class="btn btn-danger"><i
            class="fe-trash"></i> Hapus</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach;?>