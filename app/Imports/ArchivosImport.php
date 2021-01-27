<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\{Importable, ToModel}; //WithHeadingRow 
 
use App\Models\Archivo;

class ArchivosImport implements ToCollection, ToModel  //WithHeadingRow
{

    use Importable;
    /**
    * @param Collection $collection defilas del archivo
    */
    public function collection(Collection $collection)
    {
        //
    }
    
    public function model(array $row)
    {
        //tanto la base de datos y el archivo tienen que tener el mismo formato
        return new Archivo([
            'registration_number' => $row['registration_number'],
            'brand' => $row['brand'],
            'model' => $row['model'],
            'type' => $row['type'],
            'fuel_type' => $row['fuel_type'],
            'year' => (integer) $row['year'],
            'doors' => (integer) $row['doors'],
            'is_active' => 1,
    	]);
    }

     public function rules()
    {
        return [
            'registration_number' => 'regex:/[A-Z]{3}-[0-9]{3}/',
            'doors' => 'in:2,4,6',
            'years' => 'between:1998,2017'
        ];
    }



}//fin de la clase