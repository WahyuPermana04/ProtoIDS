<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free 
      <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">
      Bootstrap admin templates</a> from Bootstrapdash.com</span>
  <script src="{{asset('lte')}}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{asset('lte')}}/js/off-canvas.js"></script>
  <script src="{{asset('lte')}}/js/misc.js"></script>

  <!-- Barcode -->
  <!-- DataTables  & Plugins -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#tables').DataTable({
        responsive: true
    });
    } );
  </script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
</div>