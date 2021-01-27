<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Plantilla;

class PlantillasController extends Controller
{

    public function __construct(){
        $this->plantilla = new Plantilla();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $p = '<table border="1" width="100%">
        <tr>
            <td rowspan="2"> Asignturas</td>
            <td colspan="5"> Lapsos </td>
            
        </tr>
        <tr>
            <td>Lapso I</td>
            <td>Lapso II</td>
            <td>Lapso III</td>
            <td>Pts Ajuste</td>
            <td>Calificación Def.</td>
        </tr>
        <tr>
            <td>Inglés y otras lenguas extranjeras</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Matemática</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Biología</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Geografía, Historia y ciudadanía</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Arte y patrimonio</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Educación Física</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>';
        return view('plantillas.add', ['p' => $p]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prueba()
    {
        $re = Plantilla::find(4);
        $archivo = base_path() . '/resources/views/plantillas/pruebaPlantilla.blade.php' ;

        $fp = fopen($archivo , 'w');
        fputs($fp, $re->plantilla);
        fclose($fp);    

        return view('plantillas.pruebaPlantilla', [ 'nombres' => 'Manases Herrera', 'ano' => '5', 'seccion' => 'B' ] );
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all()); 
        // echo "</pre>"; 
        // exit();

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'plantilla' => 'required'
        ]);

        $plantilla = '<!DOCTYPE html>' .
            '<html lang="en">' .
            '<head>' .
            '   <meta charset="UTF-8">' .
            '   <title>Document</title>' .
            '</head>' .
            '<body>' .
             $request->input('plantilla')  . 
            '</body>' .
            '</html>';

        
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }else{
            
            $this->plantilla->fill([ 
                'name' => $request->input('name'),
                'plantilla' => $plantilla 
            ])->save();
           return response()->json(['success'=>'Plantilla guardada con éxito','status' => true]);
        }


        //ademas tengo que hacer el archivo .blade.php para la plantilla y llenarlo de una vez
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadImgCkeditor(Request $request)
    {


        // request()->file('your_file')
        //obtenemos el campo file definido en el formulario

        $file = $request->file('upload');
 
        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
 
        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        $public_path = public_path();
        $url = $public_path.'/archivos/'.$nombre;

        //para obtenen los archivos
         // //verificamos si el archivo existe y lo retornamos
         // if (Storage::exists($nombre))
         // {
         //   return response()->download($url);
         // }else{

         // }  
 
       return json_encode($url);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
