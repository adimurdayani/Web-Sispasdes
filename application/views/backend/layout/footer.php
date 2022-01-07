<!-- Footer Start -->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <script>
        document.write(new Date().getFullYear())
        </script> &copy; Sistem Informasi Pengolaan Asset Desa <a href="">SISPASDES</a>
      </div>

    </div>
  </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?= base_url()?>assets/js/vendor.min.js"></script>

<!-- select2 -->
<script src="<?= base_url()?>assets/libs/select2/js/select2.min.js"></script>
<script src="<?= base_url()?>assets/libs/bootstrap-select/js/bootstrap-select.min.js"></script>

<!-- third party js -->
<script src="<?= base_url()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Chart JS -->
<script src="<?= base_url()?>assets/libs/chart.js/Chart.bundle.min.js"></script>

<script src="<?= base_url()?>assets/libs/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/libs/jquery.scrollto/jquery.scrollTo.min.js"></script>

<!-- Chat app -->
<script src="<?= base_url()?>assets/js/pages/jquery.chat.js"></script>

<!-- Todo app -->
<script src="<?= base_url()?>assets/js/pages/jquery.todo.js"></script>

<!-- Dashboard init JS -->
<script src="<?= base_url()?>assets/js/pages/dashboard-3.init.js"></script>

<!-- Datatables init -->
<script src="<?= base_url()?>assets/js/pages/datatables.init.js"></script>

<!-- Init js-->
<script src="<?= base_url()?>assets/js/pages/form-advanced.init.js"></script>

<!-- App js-->
<script src="<?= base_url()?>assets/js/app.min.js"></script>

<script>
$('#rt_id').change(function() {

  var id = $(this).val();

  $.ajax({
    url: "<?= site_url('backend/datapenduduk/get_id_rt')?>",
    method: "POST",
    data: {
      id: id
    },
    async: true,
    dataType: 'json',
    success: function(data) {

      var html = '';
      var i;

      for (i = 0; i < data.length; i++) {
        html += '<option value=' + data[i].id_dusun + '>' + data[i].nama_dusun + '</option>';
      }

      $('#dusun_id').html(html);
    }

  });

  return false;

});
</script>
<script>
$('#aset_id').change(function() {

  var id = $(this).val();

  $.ajax({
    url: "<?= site_url('backend/penyewa/get_id_asset')?>",
    method: "POST",
    data: {
      id: id
    },
    async: true,
    dataType: 'json',
    success: function(data) {

      var html = '';
      var i;

      for (i = 0; i < data.length; i++) {
        html += '<option value=' + data[i].id_aset + '>' + data[i].harga + '</option>';
      }

      $('#harga_id').html(html);
    }

  });

  return false;

});
</script>

<script>
$(document).ready(function() {

  setInterval(function() {
    $.ajax({
      url: "<?= base_url('dashboard/get_notifikasi')?>",
      type: "POST",
      dataType: "json",
      data: {},
      success: function(data) {
        $("#total-penyewa").html(data.total_penyewa);
        $("#totalpenye").html(data.total_penyewa);
        $("#nama").html(data.nama);
        $("#tanggal").html(data.tanggal);
        $(".pesan").html(data.msg);
      }
    });
  }, 1000)

}), $(document).ready(function() {

  setInterval(function() {
    $.ajax({
      url: "<?= base_url('dashboard/get_notifikasi_kritik')?>",
      type: "POST",
      dataType: "json",
      data: {},
      success: function(data) {
        $("#total-kritik").html(data.total_kritik);
        $("#kritik-name").html(data.nama);
        $("#tanggal-kritik").html(data.tanggal);
        $(".pesan-kritik").html(data.msg);
      }
    });
  }, 1000)

})
</script>
</body>

</html>