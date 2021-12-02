<?php

namespace App\Imports;

use App\customer;
use Maatwebsite\Excel\Concerns\ToModel;
// use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class customerImport implements 
ToModel,
WithHeadingRow, 
SkipsOnError, 
WithBatchInserts, 
SkipsOnFailure, 
WithValidation
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new customer([
            'id_customer' => $row['id_customer'],
            'nama' => $row['nama'] ?? $row['nama_lengkap'],
	    'alamat' => $row['alamat'],
        'id_kel' => $row['kodepos']
        ]);
    }

    // public function collection(Collection $row)
    // {
    //     foreach($row as $rows){
    //         $customer = customer::create([
    //             'id_customer' => $row[0],
	//             'nama' => $row[1],
	//             'alamat' => $row[2],
    //             'id_kel' => $row[3]
    //         ]);
    //     }
    // }

    public function batchSize(): int
    {
        return 1000;
    }
    public function rules(): array
    {
	return [
	    '*.id_customer' => ['unique:customer,id_customer']
	];
    }
}