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
              <?= $this->session->flashdata('message'); ?>
              <?= validation_errors() ?>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>NO. KK</th>
                    <th>Nama KK</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php $no = 1;
                  foreach ($get_namakk as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nik'] ?></td>
                      <td><?= $data['no_kk'] ?></td>
                      <td><?= $data['nama_kk'] ?></td>
                      <td class="text-center">
                        <a href="<?= base_url('backend/datapenduduk/detail/') . $data['id_kk'] ?>" class="badge badge-info"><i class="fe-eye" title="Edit"></i> Detail KK</a>
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