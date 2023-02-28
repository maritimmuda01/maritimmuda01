  <footer class="sticky-footer bg-white shadow">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Maritim Muda <?= date('Y');?></span>
      </div>
    </div>
  </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda yakin keluar dari system?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets2/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Data Tables-->
  <!-- <script src="js/jquery-2.2.3.min.js"></script> -->
  <script src="<?= base_url('assets2/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="js/demo/datatables-demo.js"></script> -->

  <script src="<?= base_url('assets2/'); ?>vendor/datepicker/js/bootstrap-datepicker.js"></script>

  <script src="" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets2/');?>js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/date_picker/js/bootstrap-datetimepicker.min.js"></script>

  <script src="<?= base_url('assets2/'); ?>js/printThis.js"></script>


<!-- clockpicker -->
<script src="<?=base_url('assets2/js/clockpicker.js');?>"></script>
<script src="<?=base_url('assets2/js/highlight.min.js');?>"></script>

  <script type="text/javascript">
  $('.clockpicker').clockpicker({
      placement: 'top',
      align: 'left',
      donetext: 'Done',
      autoclose: true
  });
  </script>

  <script>

  $('#print').click(function(){

      $('.page-kta').printThis();

  });

    
    $(document).ready(function() {

        $('#dataTable').DataTable({
            "scrollY": 600,
            "scrollX": true
        });

    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })


    $(function() {
      $("#tgl_kegiatan").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
      });
    });     
    
    $(function() {
      $("#batas_daftar").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
      });
    });     

    $(function() {
      $("#tgl_acara").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
      });
    });

    $(function() {
      $("#tgl_lahir").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
      });
    });

    $(function() {
      $("#thn_masuk").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });

    $(function() {
      $("#thn_tamat").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });

    $(function() {
      $("#tahun_prestasi").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });

    $(function() {
      $("#tahun_karya_ilmiah").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });

    $(function() {
      $("#tahun_pengabdian").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });
    
    $(function() {
      $("#tahun_penelitian").datepicker({
        format: 'yyyy',
        autoclose: true,
        todayHighlight: true,
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
      });
    });


    $('.custom-file-input').on('change', function(){
      let filename = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

    $('.form-check-input').on('click', function() {
      const menuId = $(this).data('menu');
      const roleId = $(this).data('role');

      $.ajax({

        url: "<?= base_url('admin/changeaccess'); ?>",
        type: 'post',
        data: {
          menuId: menuId,
          roleId: roleId,
        },
        success: function(){
          document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
        }

      });

    });

  </script>



</body>

</html>
