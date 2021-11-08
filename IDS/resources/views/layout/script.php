@extends('layout.main')

@section('script')
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

<!-- Toko -->
<script>
var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");
var accurancy = document.getElementById("accurancy");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    latitude.value=position.coords.latitude;
    longitude.value=position.coords.longitude;
    accurancy.value=position.coords.accurancy;
}
</script>

<!-- Data Toko -->
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

<!-- Kunjungan -->
<script type="text/javascript" src="https://unpkg.com/@zxing/library@0.18.3-dev.7656630/umd/index.js"></script>
<script type="text/javascript">
var hasilBarcode;
        window.addEventListener('load', function () {
            let selectedDeviceId;
            const codeReader = new ZXing.BrowserBarcodeReader()
            //console.log('ZXing code reader initialized')
            codeReader.getVideoInputDevices()
                .then((videoInputDevices) => {
                    const sourceSelect = document.getElementById('sourceSelect')
                    selectedDeviceId = videoInputDevices[0].deviceId
                    if (videoInputDevices.length >= 1) {
                        videoInputDevices.forEach((element) => {
                            const sourceOption = document.createElement('option')
                            sourceOption.text = element.label
                            sourceOption.value = element.deviceId
                            sourceSelect.appendChild(sourceOption)
                        })
                        sourceSelect.onchange = () => {
                            selectedDeviceId = sourceSelect.value;
                        }
                        const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                        sourceSelectPanel.style.display = 'block'
                    }
                    document.getElementById('startButton').addEventListener('click', () => {
                        codeReader.decodeOnceFromVideoDevice(selectedDeviceId, 'video').then((result) => {
                            console.log(result)
                            document.getElementById('barcode').value = result.text;
                            //function menampilkan data dari database toko
                            getDataLocation(result.text);
                            //console.log(hasilBarcode);
                        }).catch((err) => {
                            console.error(err)
                            document.getElementById('barcode').value = err
                        })
                        console.log(`Started continous decode from camera with id ${selectedDeviceId}`)
                    })
                    document.getElementById('resetButton').addEventListener('click', () => {
                        document.getElementById('result').textContent = '';
                        codeReader.reset();
                        console.log('Reset.')
                    })
                })
                .catch((err) => {
                    console.error(err)
                })
        });
var latitude_toko;
var longitude_toko;
var accuracy_toko;
function getDataLocation($barcode){
                var id_toko = $barcode;
                $.ajax({
                    url: "{{ url('/scan-kunjungan-toko/getLocationToko') }}",
                    type: "POST",
                    data: {
                        idtoko: id_toko,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $.each(result.location, function (key, value) {
                            longitude_toko = value.longitude;
                            latitude_toko = value.latitude;
                            accuracy_toko = value.accuracy;
                        });
                        document.getElementById('latitude_toko').value = latitude_toko;
                        document.getElementById('longitude_toko').value = longitude_toko;
                        document.getElementById('accuracy_toko').value = accuracy_toko;
                    }
                });
}
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
var x = document.getElementById("latitude");
var y = document.getElementById("longitude");
var jarak;
var latitude_user;
var longitude_user;
var accuracy_user;
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.value = "Geolocation is not supported by this browser.";
    y.value = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.value = position.coords.latitude;
  y.value = position.coords.longitude;
  accuracy_user = position.coords.accuracy;
  latitude_user = position.coords.latitude;
  longitude_user = position.coords.longitude;
}
//menghitung Jarak 2 lokasi
function hasilJarak(){
console.log(latitude_toko,longitude_toko,latitude_user,longitude_user);
//function perhitungan 2 jarak
jarak = getDistanceFromLatLonInKm(latitude_toko,longitude_toko,latitude_user,longitude_user);
console.log(jarak);
//menghitung accuracy
rata_accuracy();
//hasil output akhir
kesimpulan();
}
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2-lat1); // deg2rad below
    var dLon = deg2rad(lon2-lon1);
    var a =
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ;
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    var d = R * c * 1000; // Distance in m
    return d;
    }
    
    function deg2rad(deg) {
    return deg * (Math.PI/180)
    }
    function rata_accuracy(){
        //menambahkan accuracy toko dengan accuracy user
      var hassil = accuracy_toko+accuracy_user;
      result_acc = hassil/2;
       console.log("rata-rata akurasi : ");
       console.log(result_acc);
    }
    function kesimpulan(){
        if(jarak<=result_acc){
          alert("Success Anda berada di toko success");
        }
        else{
          alert("Maaf! Anda tidak berada di toko error");
        }
    }
</script>

<!-- DataTables  & Plugins -->
<script src="{{asset ('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function (){   

   var table = $('#example').DataTable({
    "paging": false,
    "responsive": true,
    "autoWidth": false,  
    'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<input type="checkbox" name="check" value="' 
                + $('<div/>').text(data).html() + '">';
         }
      }],
      'order': [1, 'asc']
   });

   

 // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Check/uncheck all checkboxes in the table
      var rows = table.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control 
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });

   $('#generate').on('click', function(e){
      var favorite = [];
      var row =  Number(document.getElementById("row").value);
      var col =  Number(document.getElementById("col").value);
      $.each($("input[name='check']:checked"), function(){
          favorite.push($(this).val());
      });
      parameter= "/"+ favorite.join()+"/"+col+"/"+row;
      url= "{{url('/cetakBarcode')}}";
      document.location.href=url+parameter;
       e.preventDefault(); 
   });


   });
</script>
@endsection