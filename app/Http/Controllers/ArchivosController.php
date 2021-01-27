<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Imports\ArchivosImport;

class ArchivosController extends Controller
{
    private $excel;
    use Importable;
    
    
    public function __construct(Excel $excel) {
        $this->excel = $excel;
    }
    
    
    
    public function import(Request $request) {
        /*$archivo = base_path() . "/public/archivos/vehicles.xlsx";*/
        $archivo = request()->file('file');
        
        
        $array = $this->excel->toArray(new ArchivosImport, $archivo); //obtienes todas la filas del archivo
        echo "<pre>"; 
        print_r($array);
        echo "</pre>"; 
    
        // (new ArchivosImport)->import($archivo); //guarda los regisstro en la base de datos
        
        

        return json_encode(['success', 'todo bien']);
        
            
    }
    
}
