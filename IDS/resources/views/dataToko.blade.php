@extends('layout.main')
@section('css')
<!-- Data tables -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset ('assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('assets')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('layout.content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Toko</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
              <form>  
              <thead>
                  {{csrf_field()}}
                <tr>
                  <th>Barcode</th>
                  <th>Nama toko</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Accurancy</th>
                  <th>Cetak</th>
               
                </tr>
                </thead>
                <tbody>
                    @foreach ($lokasi as $l)
                <tr>
                  @php
                  $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
                  @endphp
                  <!-- <td align="center"><img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($l->barcode, $generatorPNG::TYPE_CODE_128)) }}"><br> -->
                  <td align="center"><img src="data:image/png;base64,{{DNS2D::getBarcodePNG($l->barcode, 'QRCODE')}}"><br>
                      {{ $l->barcode }}

                  </td>
                  <td>{{$l->nama_toko}}</td>
                  <td>{{$l->latitude}}</td>
                  <td>{{$l->longitude}}</td>
                  <td>{{$l->accuracy}}</td>
                  <td><a class="btn btn-outline-success" href="{{url('datatoko/cetak/'. $l->barcode)}}">CETAK</a></td>
                  
                </tr>
                @endforeach
</tbody>
</form>
</table>
</div>
            <!-- /.card-body -->
    <div class="card-footer">
          
  </div>
          <!-- /.card-footer-->
</div>
        
@endsection
@section('script')
<!-- DataTables  & Plugins -->
<script src="{{asset ('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset ('assets')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset ('assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset ('assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset ('assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection