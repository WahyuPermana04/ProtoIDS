<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lokasi_toko;
use PDF;
use Dompdf\Dompdf;

class tokoController extends Controller
{

    public function indextoko(){
    	$lokasi = lokasi_toko::all();
    	return view('dataToko', compact('lokasi'));
    }
    public function indextambah(){
        $lokasi = lokasi_toko::all();
        return view('tambahToko', compact('lokasi'));
        //return view('pages/tambah_customer1', compact('customer', 'subdis','postal'));
    }
    public function indexkunjungan()
    {
        $data = "toko";
        $lokasi_toko = lokasi_toko::all();
        return view('scanKunjungan',compact('lokasi_toko','data'));
    }

    public function getLocationToko(Request $request){
        $data['location'] = lokasi_toko::where("barcode",$request->idtoko)->get(["latitude", "longitude","accuracy"]);
        return response()->json($data);
    }

    // public function getDistanceFromLatLonInKm(Request $request) {
    //     //dd($request->barcode);
    //     $toko = DB::table('lokasi_toko')->where('barcode',$request->barcode)->get();
    //     //$toko = lokasi_toko::where('barcode',$request->barcode);
    //     //dd($toko);
    //     foreach($toko as $value){
    //         $lat = $value->latitude;
    //         $long = $value->longitude;
    //         $acc = $value->accuracy;
    //     }
    //     //dd($lat,$long,$acc);
    //     $earthRadius = 6371000; // Radius of the earth in meter
    //     //dd($dlat,$dlon);
    //     $lat_a = $request->latitude;
    //      $lon_a = $request->longitude;
    //      $lat_b = $lat;
    //      $lon_b = $long;
    //     //dd($lat_a,$lon_a,$lat_b,$lat_b);
    //      $latFrom = deg2rad($lat_a);
    //      $lonFrom = deg2rad($lon_a);
    //      $latTo = deg2rad($lat_b);
    //      $lonTo = deg2rad($lon_b);
    //     //dd($latFrom,$lonFrom,$latTo,$lonTo);
    //      $latDelta = $latTo - $latFrom;
    //      $lonDelta = $lonTo - $lonFrom;
    //     //dd($latDelta,$lonDelta);
    //      $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    //        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    //     //dd($angle);
    //      $betwenPoin = $angle * $earthRadius;
    //      dd($betwenPoin);
      
    // }

    // public function simpan(Request $request){
    //      //dd($request);
    //     $this->validate($request,[
    //         //'id_customer' => 'required',
    //         'barcode'=>'required',
    //         'nama_toko'=>'required',
    //         'lat'=>'required',
    //         'long'=>'required',
    //         'acc' => 'required'
    //     ]);
    //     //ubah di folder config/filesystems.php terus diubah yang local
    //      //terus rootnya yang semula root=>(app) diganti jadi root=>('app/public')
    //      //di php artisan storage:link
    //    // dd($request);
    //    lokasi_toko::create([
    //         //'id_customer' => null,
    //         'barcode' => $request->barcode,
    //         'nama_toko' => $request->nama_toko,
    //         'latitude' => $request->lat,
    //         'longitude' => $request->long,
    //         'accuracy' => $request->acc
           
    //     ]);
    //     return redirect('/datatoko')->with('success','Data berhasil ditambahkan');
    // }
    public function simpan(Request $request)
{
	// insert data ke table
	DB::table('lokasi_toko')->insert([
		// 'barcode' => $request->barcode,
		'nama_toko' => $request->nama_toko,
		'latitude' => $request->lat,
		'longitude' => $request->long,
        'accuracy' => $request->acc
	]);
	// alihkan halaman ke halaman
	return redirect('/datatoko')->with('success','Data berhasil ditambahkan');
 
}

    public function cetak($barcode)
    {
        $pdf = PDF::loadView('cetakBarToko', compact('barcode'));
    
    //    return $pdf->download('BarcodeToko_'.$barcode.'.pdf');
       return $pdf->stream('BarcodeToko_'.$barcode.'.pdf');
    }
 
}