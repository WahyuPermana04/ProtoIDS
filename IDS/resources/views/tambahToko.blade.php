@extends('layout.main')
@section('layout.content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah data toko</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                   <form method="POST" action="{{url('/tambahtoko/simpan/')}}">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                    <label for="barcode">Barcode</label>
                    <input type="text" name="barcode" id="barcode" class="form-control" placeholder="Barcode Toko" required="required">
                  </div> -->
                  <div class="form-group">
                    <label for="nama_toko">Nama toko</label>
                    <input type="text" name="nama_toko" id="nama_toko" class="form-control" placeholder="Nama Toko" required="required">
                  </div>
                  <div class="form-group">
                    <label for="long">Longitude</label>
                    <input type="text" name="long" id="long" class="form-control"  placeholder="Longitude" required="required">
                  </div>
                  <div class="form-group">
                    <label for="lat">Latitude</label>
                    <input type="text" name="lat" id="lat" class="form-control"  placeholder="Latitude" required="required">
                  </div>
                  <div class="form-group">
                    <label for="acc">Accurancy</label>
                    <input type="number" name="acc" id="acc" class="form-control"  placeholder="Accurancy" required="required">
                  </div>
                  <div>
                  <a class="btn btn-success" id="" href="#" onclick="getLocation()">Generate Location</a>
                  </div>

                </div>
              </div>
            </div>
        </div>
        <div class="card-footer">
          <input type="submit" name="simpan" value="simpan" class="btn btn-outline-info"> 
          </form>
        </div>
      </div>
@endsection

@section('script')
<script>
var x = document.getElementById("lat");
var y = document.getElementById("long");
var acc = document.getElementById("acc");
// var latitude_user;
// var longitude_user;
// var accuracy_user;
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
  acc = position.coords.accuracy;
  // latitude_user = position.coords.latitude;
  // longitude_user = position.coords.longitude;
}
</script>
@endsection