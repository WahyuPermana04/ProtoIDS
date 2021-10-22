@extends('layout.main')

@section('layout.content')

<div class="card">
    <div class="card-body">
        <h1 align="center">TABEL BARANG </h1>
    </div>
    <div>
        <a class="btn btn-success" href="/tambahLabel">Tambah Barang</a>
        <button data-toggle="modal" data-target="#pdf" class="btn btn-success">Cetak PDF</button>
    </div>
    
    <div class="card-body">
        <table class="table table-bordered" border="2" align="center">
            <tr>
                <td>ID BARANG</td>
                <td>NAMA BARANG</td>
                <td>BARCODE</td>
                <!-- <td>CETAK</td> -->
            </tr>
            @foreach($barang as $b)
            <tr>
                <td>{{ $b->id_barang }}</td>
                <td>{{ $b->nama }}</td>
                @php
                $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
                @endphp
                <td align="center"><img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($b->id_barang, $generatorPNG::TYPE_CODE_128)) }}"><br>
                    {{ $b->id_barang }}
                                    
                </td>
                <!-- <td><a class="btn btn-success" href="/cetakBarcode">Cetak</a></td> -->
            </tr>
            @endforeach
        </table>
    </div>
</div>


<div class="modal fade" id="pdf" tabindex="-1" role="dialog" aria-labelledby="pdfLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="pdfLabel">Export Mulai Baris & Kolom?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('cetakBarcode') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="baris_barang">Baris</label>
                        <input type="number" class="form-control" id="baris_barang" placeholder="baris Barang" name="baris_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="kolom_barang">Kolom</label>
                        <input type="number" class="form-control" id="kolom_barang" placeholder="kolom Barang" name="kolom_barang" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endsection