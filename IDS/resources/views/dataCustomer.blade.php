@extends('layout.main')

@section('layout.content')

<div class="card">
    <div class="card-body">
        <h1 align="center">TABEL DATA CUSTOMER </h1>
    </div>
    
    <div class="card-body">
        
    <a href="/customer/export" class="btn btn-sm btn-success" style="margin-bottom: 10px">Import</a>
        <table height="50px" align="center" border="1">
            <tr>
                <th width="100px" height="50px">ID</td>
                <th width="200px" height="50px">Nama</td>
                <th width="300px" height="50px">Alamat</td>
                <th width="300px" height="50px">Kelurahan</td>
                <th width="300px" height="50px">Kecamatan</td>
                <th width="300px" height="50px">Kota</td>
                <th width="300px" height="50px">Provinsi</td>
                <th width="100px" height="50px">Foto</td>
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