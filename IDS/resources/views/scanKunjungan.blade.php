@extends('layout.main')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<style>
    .table .thead-dark th {
  color: #fff;
  background-color: #212529;
  border-color: #32383e;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="ZXing for JS">
<link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet';this.onload=null" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
<zxing-scanner [tryHarder]="true" [formats]="formats" (scanSuccess)="onScanSuccessHandler($event)"></zxing-scanner>
@endsection

@section('layout.content')
<div class="card">
    <div class="card-body">
        <h1 align="center">KUNJUNGAN TOKO</h1>
    </div>
    <div class="card-body">
    <div class="row">
      <div class="col-md-7">
        <main class="wrapper" style="padding-top:2em">
            <section class="container" id="demo-content">
                <div>
                    <a class="btn btn-success" id="startButton">Start</a>
                    <a class="btn btn-success" id="resetButton">Reset</a>
                </div>
                <div>
                    <video id="video" width="300" height="200" style="border: 1px solid gray"></video>
                </div>
                <div id="sourceSelectPanel" style="display:none">
                    <label for="sourceSelect">Change video source:</label>
                    <select id="sourceSelect" style="max-width:400px">
                    </select>
                </div>
            </section>
        </main>
      </div>
      <div class="col-md-5">
        <div class="form-group">
            <label>Barcode :</label>
            <input type="text" class="form-control barcode" id="barcode" placeholder="" name="barcode" value="">
        </div>
        <div class="form-group">
            <label>Latitude Toko :</label>
            <input type="text" class="form-control" id="latitude_toko" placeholder="" name="latitude_toko" value="">
        </div>
        <div class="form-group">
            <label>longtitude Toko:</label>
            <input type="text" class="form-control" id="longitude_toko" placeholder="" name="longitude_toko" value="">
        </div>
        <div class="form-group">
            <label>Acuracy Toko :</label>
            <input type="text" class="form-control" id="accuracy_toko" placeholder="" name="accuracy_toko" value="">
        </div>
        <div class="form-group">
            <label>Latitude:</label>
            <input type="text" class="form-control" id="latitude" placeholder="" name="latitude" value="">
        </div>
        <div class="form-group">
            <label>Longitude:</label>
            <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude" value="">
        </div>
        <a class="btn btn-success" id="" href="#" onclick="getLocation()">Generate Location</a>
        <button class="btn btn-primary" onclick="hasilJarak()">Submit</button>
    </div>
    </div>
</div>
@endsection
    
@section('script')
    
<script type="text/javascript" src="https://unpkg.com/@zxing/library@0.18.3-dev.7656630/umd/index.js"></script>
<script type="text/javascript">
  window.addEventListener('load', function () {
    let selectedDeviceId;
    const codeReader = new ZXing.BrowserMultiFormatReader()
    console.log('ZXing code reader initialized')
    codeReader.listVideoInputDevices()
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
            };

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
          codeReader.reset()
          document.getElementById('barcode').textContent = '';
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
        url: "{{ url('/scankunjungan/getLocationToko') }}",
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
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
    
@endsection