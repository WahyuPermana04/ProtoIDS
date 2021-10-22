@extends('layout.main')

@section('layout.content')
<div class="card">
    <div class="card-body">
        <h1 align="center">TAMBAH BARANG </h1>
    </div>
    <div class="card-body">
		<form action="/tambahLabel/store" method="post">
		{{ csrf_field() }}
            <!-- <div class="form-group row">
			    <label class="col-2 col-form-label">ID</label>
                <div class="col-md-6">
                    <input type="text" name="id" class="form-control" required="required"   placeholder=". . ."> 
                </div>
			</div> -->
							
			<div class="form-group row">
			    <label class="col-2 col-form-label">Nama Barang</label>
                <div class="col-md-6">
                    <input type="text" name="nama" class="form-control" required="required" placeholder=". . ."> 
                </div>
			</div>
							        
			<div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan Data">
			</div>
							
		</form>
    </div>
    
</div>

@endsection