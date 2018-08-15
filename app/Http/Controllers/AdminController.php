<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;
use App\Models\Ad_Usuario_Sistema;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        //dd(\App\Ad_Usuario_Sistema::all());
        //$pastel = Ad_Usuario_Sistema::where('jcheverria')->first();
        //$a="1";
        //dd($pastel);
        //return view('layouts.admin.home')->with('a', $a);
        return view('layouts.admin.home');
    }

    public function indicadores()
    {
        //
        return view('layouts.admin.indicadores.indicadores');
    }
    public function RolesConfiguracion()
    {
        //
        return view('layouts.admin.roles.configuracionroles');
    }
    public function RolesRegistro()
    {
        //
        return view('layouts.admin.roles.registroroles');
    }
    public function UsuariosAsignacion()
    {
        //
        return view('layouts.admin.usuarios.asignacionusuarios');
    }
    public function UsuariosConfiguracion()
    {
        //
        return view('layouts.admin.usuarios.configuracionusuarios');
    }
    public function UsuariosRegistro()
    {
        //
        return view('layouts.admin.usuarios.registrousuarios');
    }
    public function SeleccionPuntos()
    {
        //
        return view('layouts.admin.analisis.analisis');
    }
    public function RegistroPuntos()
    {
        //
        return view('layouts.admin.analisis.registropuntos');
    }   
    public function TrayectoriaPuntos()
    {
        //
        return view('layouts.admin.analisis.trayectoriapuntos');
    }    
    
    public function ajax_carga_data2(Request $request, $fecha_desde)
    {

    $f_desde = $fecha_desde;
    $f_desde_mod=str_replace("T"," ",$f_desde);
    //2009-02-03T12:30

    $cont_lat=0;
    $cont_long=0;
    $cont=0;
    /*LOCAL */
    //$conn_string = "host='localhost' port='5432' dbname='postgres' user='postgres' password='root'";
    /*GYE */
    $conn_string = "host='52.38.27.79' port='5432' dbname='datos_gye' user='postgres' password='admin1234'";
    /*CHINA */
    //$conn_string = "host='52.38.27.79' port='5432' dbname='respaldo' user='postgres' password='admin1234'";
    $dbconn = pg_connect($conn_string)or die('No se ha podido conectar: ' . pg_last_error());


    $query_all   ="select id_tipo_vehiculo,latitud,longitud from trayectoria_gye where fecha >= '$f_desde_mod'";

    $result_all  = pg_query($query_all);
    while($row_all=pg_fetch_row($result_all))
    {
    $arr_latlngs[$cont]=$row_all;
    $cont=$cont+1;
    }


    $myJSON_latlngs = json_encode($arr_latlngs);
    pg_close($dbconn);
    $array = '{"latlngs":'. $myJSON_latlngs.'}';
        $array1=json_decode($array);
         
       return response()->json($array1);
    }
    public function ajax_carga_data(Request $request, $fecha_desde,$fecha_hasta)
    {
        
        $f_desde = $fecha_desde;
        $f_hasta = $fecha_hasta;
        
        $f_desde_mod=str_replace("T"," ",$f_desde);
        $f_hasta_mod=str_replace("T"," ",$f_hasta);
        //2009-02-03T12:30

        $cont_lat=0;
        $cont_long=0;
        $cont=0;
        //$conn_string = "host='localhost' port='5432' dbname='postgres' user='postgres' password='root'";
        $conn_string = "host='52.38.27.79' port='5432' dbname='datos_gye' user='postgres' password='admin1234'";
        $dbconn = pg_connect($conn_string)or die('No se ha podido conectar: ' . pg_last_error());


        $query_all   ="select id_tipo_vehiculo,latitud,longitud from trayectoria_gye where fecha >= '$f_desde_mod' and fecha <= '$f_hasta_mod'";

        $result_all  = pg_query($query_all);
        while($row_all=pg_fetch_row($result_all))
        {
          $arr_latlngs[$cont]=$row_all;
          $cont=$cont+1;
        }


        $myJSON_latlngs = json_encode($arr_latlngs);
        pg_close($dbconn);
        $array = '{"latlngs":'. $myJSON_latlngs.'}';

        $array1=json_decode($array);
         
       return response()->json($array1);
    }
    public function ajax_carga_data_insert(Request $request,$latitud,$longitud,$fecha_registro,$fecha_desde,$fecha_hasta,$marcador_desde,$marcador_hasta,$tipo_vehiculo)
    {
        $f_desde = $fecha_desde;
        $f_hasta = $fecha_hasta;
        
        $f_desde_mod=str_replace("+","",$f_desde);
        $f_hasta_mod=str_replace("+","",$f_hasta);
        $fecha_desde=$f_desde_mod;
        $fecha_hasta=$f_hasta_mod;

        $latitud        = $latitud;
        $longitud       = $longitud;
        $fecha_registro = date('Y-m-d H:i');
        $fecha_registro=str_replace("+","",$fecha_registro);
        $fecha_registro=str_replace("T"," ",$fecha_registro);
        $fecha_desde    = $fecha_desde;
        $fecha_desde    =str_replace("T"," ",$fecha_desde);
        $fecha_hasta    = $fecha_hasta;
        $fecha_hasta    =str_replace("T"," ",$fecha_hasta);
        $marcador_desde = $marcador_desde;
        $marcador_hasta = $marcador_hasta;
        $tipo_vehiculo  = $tipo_vehiculo;
        $cont_lat=0;
        $cont_long=0;
        $cont=0;

        $conn_string = "host='52.38.27.79' port='5432' dbname='datos_gye' user='postgres' password='admin1234'";
        $dbconn = pg_connect($conn_string)or die('No se ha podido conectar: ' . pg_last_error());
        $query_all   ="INSERT INTO trayectoria_gye_hist(latitud, longitud, fecha_registro, fecha_desde, fecha_hasta, marcador_desde, marcador_hasta, id_tipo_vehiculo)
                        VALUES ('$latitud','$longitud','$fecha_registro','$fecha_desde','$fecha_hasta','$marcador_desde','$marcador_hasta','$tipo_vehiculo')";

        $result_all  = pg_query($query_all);
        $array1=json_encode($result_all);

        return response()->json($array1);
    }
    public function ajax_r_analisis()
    {

        //exec("Rscript C:/Users/jcheverria/Desktop/Jorge Cheverria/fci/prueba/public/R/analisis_kmeans.R");
        $test = exec('Rscript "C:/Users/jcheverria/Desktop/Jorge Cheverria/fci/prueba/public/R/analisis_kmeans1.R"');
        $array1=json_encode($test);
         
       return response($array1);
    }
    public function ajax_guardar_gye(Request $request,$fecha_desde,$lat,$long,$tipo_vehiculo,$sector,$velocidad){
$f_desde = $fecha_desde;
$lat = $lat;
$long = $long;
$tipo_vehiculo = $tipo_vehiculo;
$sector = $sector;
$velocidad = $velocidad;

switch($velocidad)
{
  case 1:
    $velocidad = '20';
  break;
  case 2:
    $velocidad = '30';
  break;
  case 3:
    $velocidad = '40';
  break;
  case 4:
    $velocidad = '50';
  break;
  case 5:
    $velocidad = '60';
  break;
  case 6:
    $velocidad = '70';
  break;    
}
$f_desde_mod=str_replace("T"," ",$f_desde);
$f_desde_mod=str_replace("+","",$f_desde);

$conn_string = "host='52.38.27.79' port='5432' dbname='datos_gye' user='postgres' password='admin1234'";
$dbconn = pg_connect($conn_string)or die('No se ha podido conectar: ' . pg_last_error());


$id=1;
  $insert_data="INSERT INTO trayectoria_gye_hist(
     latitud, longitud, velocidad, fecha, id_sector, id_tipo_vehiculo)
  VALUES ('$lat', '$long', '$velocidad', '$f_desde_mod', '$sector', '$tipo_vehiculo')";

$result_all  = pg_query($insert_data);
        $array1=json_encode($result_all);

        return response()->json($array1);
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
        //
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
