<head>
    <title>Barcode</title>

    <style>
        .text-center{
            text-align: center;
        }
        td{
            padding: 7px;
        }
        @page { margin: 0px; }
        body { margin: 0px; }
    </style>
</head>
<body>
@php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
@endphp
<div class="barcode" style="text-align:center;width:143px;height:63px;padding-top: 5px;margin-left:-35px;margin-right:44px;font-size:12px;margin-top:-18px">
<table>
    <tr>
    @foreach(range(0,$panjang) as $key)
    @if($x++ <= $panjang)
        <td style="text-align: center; border: 0px solid black" width="100" height="50">
        <console class="log">{{ $no % 5 }}</console>
        </td>
    @if ($no++ % 5 == 0)
    </tr>
    <tr>
    @endif
    @else
    @foreach($barang as $data)
        <td style="text-align: center; border: 0px solid black" width="100" height="50" display:block>
            <img width="120" src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($data->id_barang, $generatorPNG::TYPE_CODE_128)) }}"><br>
            <!-- {!! $generator->getBarcode($data->id_barang, $generator::TYPE_CODE_128) !!} -->
            {{ $data->id_barang }}<br>
            {{ $data->nama }}
            <console class="log">{{ $no % 5 }}</console>
        </td>

        

    @if ($no++ % 5 == 0)
    </tr>
    <console class="log">{{ $no % 5 }}</console>
    @endif
    @endforeach
    @endif
    @endforeach
    </tr>
</table>
<div>
</body>
</html>