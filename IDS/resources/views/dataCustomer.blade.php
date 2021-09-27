@extends('layout.main')

@section('layout.content')

<div class="card">
    <div class="card-body">
        <h1 align="center">TABEL DATA CUSTOMER </h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered" border="2" align="center">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Kelurahan</td>
                <td>Kecamatan</td>
                <td>Kota</td>
                <td>Provinsi</td>
                <td>Foto</td>
            </tr>
            @foreach($customer as $cust)
            <tr>
                <td>{{ $cust->id_customer }}</td>
                <td>{{ $cust->nama }}</td>
                <td>{{ $cust->alamat }}</td>
                <td>{{ $cust->ec_subdistricts->subdis_name }}</td>
                <td>{{ $cust->ec_subdistricts->ec_districts->dis_name }}</td>
                <td>{{ $cust->ec_subdistricts->ec_districts->ec_cities->city_name }}</td>
                <td>{{ $cust->ec_subdistricts->ec_districts->ec_cities->ec_provinces->prov_name }}</td>
                <td>
                    @if($cust->foto == null)
                    <img src="{{ asset('/storage/'.$cust->file_path) }}" style="width:150px;height:150px">
                    @else
                    <img src="{{ $cust->foto }}" style="width:150px;height:150px">
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {{ $customer->links() }}
</div>
@endsection