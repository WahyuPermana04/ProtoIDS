<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\ec_subdistricts;
// use App\ec_districts;
// use App\ec_cities;
// use App\ec_provinces;
use App\barang;
use PDF;
use Dompdf\Dompdf;
// use Barryvdh\DomPDF\Facade as PDF;
// use Illuminate\Support\Facades\Storage;

class barcodeController extends Controller
{
    public function indexLabel(){
        //mengambil data dari tabel customer
        // $customer = DB::table('customer')->paginate(10);
        // $customer = customer::paginate(10);
        $barang = barang::all();
        //mengirim data ke view table
        return view('label',
        compact('barang'));
    }

    public function indexTambahLabel()
	{
		return view('tambahLabel');
	}

    public function store(Request $request)
    {
	// insert data ke table
	DB::table('barang')->insert([
		'nama' => $request->nama,
	]);
	// alihkan halaman ke halaman
	return redirect('/tambahLabel');
 
    }

   
    public function cetakPdf(Request $request){
        //dd($barang);
        $data = Barang::all();
        $baris = $request->baris_barang;
        $kolom = $request->kolom_barang;
        $long = count($data);
        $long =intval($long/5);
        $long++;
        //dd($baris,$kolom);
        $pdf = PDF::loadView('cetakBarcode', compact('data','long','baris','kolom'));
    
       return $pdf->download('barangBarcode.pdf');
        
        //return view('barang.barcodePDF',compact('data','long','baris','kolom'));
    }

}

