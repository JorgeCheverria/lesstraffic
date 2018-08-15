@extends('layouts.admin.base')

@section('title', 'Configuracion Roles')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="x_panel">
         <form method="POST" class="form-horizontal form-label-left" >
      <h1 align="center">Lesstraffic</h1>
      <table>
        <tr>

          <td><label>Fecha desde:</label></td>
          <td><input type="datetime-local" name="fecha_desde" id="fecha_desde"></td>        
        </tr>
        <tr>
          <td><label>Fecha hasta:</label></td>
          <td><input type="datetime-local" name="fecha_hasta" id="fecha_hasta"></td>
        </tr>
        <tr>        
          <td align="r" colspan="2">
            <input class="btn btn-sm btn-primary" type="button" value="Aceptar"    name="bt_aceptar"  align="center" onclick="carga_puntos_map();"/>
            <!--<input type="button" value="Analisis"   name="bt_analisis" align="center" />-->
            <input class="btn btn-sm btn-warning" type="button" value="Actualizar" name="bt_limpiar"  align="center" onclick="window.location.reload()"/>
            <input class="btn btn-sm btn-warning" type="button" value="Analisis"   name="bt_analisis" align="center" onclick="ajax_r();"/>  
          </td>        
        </tr>
      </table>
    </form>

    <img src="" id="imagen" class="img-responsive" style="height: 450px;">
    <?php
      if (isset($_POST['bt_aceptar']))
      {
        $fecha_desde = $_POST['fecha_desde'];
        $fecha_hasta = $_POST['fecha_hasta'];
      }
    ?>
    </div> 
  </div>
  <div class="col-md-9">
    <div class="x_panel">

<!--<div id="mapid" style="width: 100%;height:100vh;"></div>-->
      <div id="mapid" style="width: 100%;height:550px;"></div>

      <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
  <script src="{{ asset('js/analisis/jquery-3.3.1.min.js') }}"></script>
  <!-- OSM -->
  <!-- Cluster -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.3.0/leaflet.markercluster-src.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.3.0/leaflet.markercluster.js"></script>  

 
  <script>
      var latlngs      = new Array();
      var latlngs_data = new Array();
      var arr_lat_lng  = new Array();
      var latlngA; var lat; var cont=0;  
      var latlngB; var lng; var cont_funcion=0;
      var fecha_desde;
      var fecha_hasta;

      var mymap = L.map('mapid', {
                    fadeAnimation: false,
                    zoomAnimation: false,
                    markerZoomAnimation: false
                  }).setView([-2.1887106287772053,-79.89135503768922],15);
      var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
      //var osm = new L.TileLayer(osmUrl,{minZoom: 7,maxZoom: 14,attribution: osmAttrib});
      var osm = new L.TileLayer(osmUrl, {
        minZoom: 7, maxZoom: 20,
          attribution: osmAttrib,
          updateWhenIdle: true,
          reuseTiles: true
      });
      osm.addTo(mymap);

      /*
      *Funcion que genera marcadores sobre el mapa, validando el zoom del mismo.    
      */    
      function onMapClick(e)
      {
        var lvl_zoom=mymap.getZoom();
        if(lvl_zoom>15)
        {
          window.alert("Por favor aléjese más.");
        }
        else if(lvl_zoom<15)
        {
          alert("Por favor acérquese más.");
        }
        else if(lvl_zoom==15)
        {
          //latitud = X || longitud = Y
          lat = e.latlng.lat;
          lng = e.latlng.lng;
          var newcoor       = new Array();
              newcoor[0]    = lat;
              newcoor[1]    = lng;
          latlngs.push(newcoor);
          arr_lat_lng[cont] = e.latlng;
          cont=cont+1;
          if(cont==1||cont==2)
          {
            L.marker(newcoor, {icon: Icon_limite}).addTo(mymap);
            //console.log(arr_lat_lng);
          }
          if(cont==2)
          {
            var polyline     = L.polyline(latlngs, {color: ''}).addTo(mymap);
            var centro_linea = polyline.getCenter();                    
            var distancia_m  = parseInt(distancia(mymap,arr_lat_lng[0],arr_lat_lng[1]));          
            var circulo      = L.circle(centro_linea, {radius: distancia_m*3}).addTo(mymap);
            //L.marker(centro_linea, {icon: Icon_limite}).addTo(mymap);
            console.log("centro: "+polyline.getCenter());
            console.log("distancia funcion: ",distancia_m);
          }       
        }
      }
      mymap.on('click', onMapClick);
      /*
      *Funcion que se encarga de enviar los parametros necesarios para la carga masiva de puntos, mediante el uso de ajax.
      */
      function carga_puntos_map()
      {
        cont_funcion = cont_funcion+1;
        fecha_desde  = $('#fecha_desde').val();
        fecha_hasta  = $('#fecha_hasta').val();
        latlngA      = arr_lat_lng[0];
        latlngB      = arr_lat_lng[1];

        if((fecha_desde!="" && fecha_hasta!="") && (latlngA!=null && latlngB!=null) && cont_funcion==1)
        {        
          carga_puntos(latlngA,latlngB,fecha_desde,fecha_hasta);
        }
        else if(fecha_desde=="" || fecha_hasta=="")
        {
          alert("Ingrese los valores de las fechas.");        
        }
        else if(latlngA==null || latlngB==null)
        {
          alert("Ingrese los Marcadores.");
        }      
      }
      /*
      *Devuelve la distancia entre dos coordenadas geográficas.
      *según el CRS del mapa. Por defecto, mide la distancia en metros.
      *Para el calculo se usa la Ley Esférica de Coseno .
      */
      function distancia(map, latlngA, latlngB) 
      {
          return map.latLngToLayerPoint(latlngA).distanceTo(map.latLngToLayerPoint(latlngB));
      }
      /*
      *Funcion que se encarga en realizar la carga masiva.
      */
    function carga_puntos(latlngA,latlngB,fecha_desde,fecha_hasta)
      {
        $.ajax(
          {
            type:"GET",
            url: "ajax_carga_data/" + fecha_desde + "/" + fecha_hasta,

            success: function(result)
            {
            var JsonResult   = result;                   
            var count_result=result.latlngs.length
            console.log(result.latlngs.length);
              for(i=0;i<count_result;i++)
              {
                var id_user    = JsonResult.latlngs[i][0];//ID user
                var lat_d      = JsonResult.latlngs[i][1];//latitud
                var lng_d      = JsonResult.latlngs[i][2];//longitud
                //Valida si los puntos extraidos en la base de datos existen en la limitacion de la zona.
                var point      = new L.LatLng(lat_d,lng_d);
                var tolerance  = tolerance === undefined ? 0.2 : tolerance;
                var hypotenuse = latlngA.distanceTo(latlngB),
                delta          = latlngA.distanceTo(point) + point.distanceTo(latlngB) - hypotenuse;
                var result     = delta/hypotenuse < tolerance
                if(result)
                {               
                  var point_data    = new Array();
                      point_data[0] = id_user;
                      point_data[1] = lat_d;
                      point_data[2] = lng_d;
                  latlngs_data.push(point_data);
                  //L.marker(point, {icon: Icon_data}).addTo(mymap);
                }
              }
              capa_point(latlngs_data);
            },
           error:function(result){
            alert("Error en la carga masiva de datos.");
           }
          });
      }
      /*
      ************************************************
      ********CARACTERISTICA DE LOS MARCADORES********
      ************************************************
      */
      var Icon_data = L.Icon.extend({
        options:{
                  iconSize:     [10, 10], // size of the icon [38, 95]
                }
      });
      var Icon_all  = L.Icon.extend({
        options:{
                  //shadowUrl: 'images/marker_shadow.png',
                  iconSize:     [28, 35], // size of the icon [38, 95]
                  //shadowSize:   [50, 64], // size of the shadow [50, 64]
                  iconAnchor:   [12, 34], // point of the icon which will correspond to marker's location [22, 94]
                  //shadowAnchor: [4, 62],  // the same for the shadow [4, 62]
                  //popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor [-3, -76]
                }
      });
      var Icon_moto         = new Icon_data({iconUrl: "{{ asset('img/images/p1.png') }}"}),
          Icon_colectivo    = new Icon_data({iconUrl: "{{ asset('img/images/p2.png') }}"}),
          Icon_auto         = new Icon_data({iconUrl: "{{ asset('img/images/p3.png') }}"}),
          Icon_motoneta     = new Icon_data({iconUrl: "{{ asset('img/images/p4.png') }}"}),
          Icon_bicicleta    = new Icon_data({iconUrl: "{{ asset('img/images/p5.png') }}"}),
          Icon_taxi_informal= new Icon_data({iconUrl: "{{ asset('img/images/p6.png') }}"}),
          Icon_camioneta    = new Icon_data({iconUrl: "{{ asset('img/images/p7.png') }}"}),
          Icon_furgoneta    = new Icon_data({iconUrl: "{{ asset('img/images/p8.png') }}"}),
          Icon_comercial    = new Icon_data({iconUrl: "{{ asset('img/images/p9.png') }}"}),
          Icon_taxi         = new Icon_data({iconUrl: "{{ asset('img/images/p10.png') }}"}),
          Icon_escolar      = new Icon_data({iconUrl: "{{ asset('img/images/p11.png') }}"}),
          Icon_metro        = new Icon_data({iconUrl: "{{ asset('img/images/p12.png') }}"}),
          Icon_trailer      = new Icon_data({iconUrl: "{{ asset('img/images/p13.png') }}"}),
          Icon_camion       = new Icon_data({iconUrl: "{{ asset('img/images/p14.png') }}"}),
          Icon_empresarial  = new Icon_data({iconUrl: "{{ asset('img/images/p15.png') }}"}),
          Icon_limite       = new Icon_all({iconUrl: "{{ asset('img/images/limite.png') }}"});
      L.icon                = function (options) {return new L.Icon(options);};    
      /*
      *Funcion que se encarga en la clasificacion de los vehiculos
      */
      function capa_point(cordenada)
      {
        var arr_all      = new Array();
        var arr_puntos0  = new Array(); var arr_puntos1  = new Array(); var arr_puntos2  = new Array(); var arr_puntos3  = new Array();
        var arr_puntos4  = new Array(); var arr_puntos5  = new Array(); var arr_puntos6  = new Array(); var arr_puntos7  = new Array();
        var arr_puntos8  = new Array(); var arr_puntos9  = new Array(); var arr_puntos10 = new Array(); var arr_puntos11 = new Array();
        var arr_puntos12 = new Array(); var arr_puntos13 = new Array(); var arr_puntos14 = new Array();            
        var cont_id0  = 0;  var cont_id1  = 0; var cont_id2  = 0; var cont_id3 = 0; var cont_id4  = 0;  var cont_id5  = 0;    
        var cont_id6  = 0;  var cont_id7  = 0; var cont_id8  = 0; var cont_id9 = 0; var cont_id10 = 0;  var cont_id11 = 0;
        var cont_id12 = 0;  var cont_id13 = 0; var cont_id14 = 0;
        var user_id0; var user_id1; var user_id2;  var user_id3;  var user_id4;  var user_id5;  var user_id6; var user_id7;
        var user_id8; var user_id9; var user_id10; var user_id11; var user_id12; var user_id13; var user_id14;
        var layerControl    = false;
        var count_cordenada = cordenada.length;

        for(i=0;i<count_cordenada;i++)
        {
          if(cordenada[i][0]==1)
          {
            user_id0 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_moto});          
            arr_puntos0.push(user_id0);
            cont_id0 = cont_id0+1;
            //insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==2)
          {
            user_id1 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_colectivo});
            arr_puntos1.push(user_id1);
            cont_id1 = cont_id1+1;
            //insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==3)
          {
            user_id2 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_auto});
            arr_puntos2.push(user_id2);
            cont_id2 = cont_id2+1;
            insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==4)
          {
            user_id3 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_motoneta});
            arr_puntos3.push(user_id3);
            cont_id3 = cont_id3+1;
            insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==5)
          {
            user_id4 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_bicicleta});
            arr_puntos4.push(user_id4);
            cont_id4 = cont_id4+1;
            insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==6)
          {
            user_id5 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_taxi_informal});          
            arr_puntos5.push(user_id5);
            cont_id5 = cont_id5+1;
            //insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==7)
          {
            user_id6 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_camioneta});
            arr_puntos6.push(user_id6);
            cont_id6 = cont_id6+1;
            //insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
          if(cordenada[i][0]==8)
          {
            user_id7 = L.marker([cordenada[i][1],cordenada[i][2]], {icon: Icon_furgoneta});
            arr_puntos7.push(user_id7);
            cont_id7 = cont_id7+1;
            //insertar_datos(cordenada[i][1],cordenada[i][2],"LOCALTIMESTAMP",fecha_desde,fecha_hasta,latlngA.lat,latlngA.lng,cordenada[i][0]);
          }
        }
        var Auto_Paricular = "Auto particular = "+cont_id0;
        var Buses          = "Buses = "+cont_id1;
        var Taxi           = "Taxi = "+cont_id2;
        var Metrovia       = "Metrovía = "+cont_id3;
        var Moto           = "Moto = "+cont_id4;
        var Camion         = "Camión = "+cont_id5;
        var Camioneta      = "Camioneta = "+cont_id6;
        var Expreso        = "Expreso = "+cont_id7;

        if(layerControl === false) {
            layerControl = L.control.layers().addTo(mymap);
        }
        var puntos_mapa0  = L.layerGroup(arr_puntos0).addTo(mymap);
        var puntos_mapa1  = L.layerGroup(arr_puntos1).addTo(mymap);
        var puntos_mapa2  = L.layerGroup(arr_puntos2).addTo(mymap);
        var puntos_mapa3  = L.layerGroup(arr_puntos3).addTo(mymap);
        var puntos_mapa4  = L.layerGroup(arr_puntos4).addTo(mymap);
        var puntos_mapa5  = L.layerGroup(arr_puntos5).addTo(mymap);
        var puntos_mapa6  = L.layerGroup(arr_puntos6).addTo(mymap);
        var puntos_mapa7  = L.layerGroup(arr_puntos7).addTo(mymap);

        layerControl.addOverlay(puntos_mapa0,Auto_Paricular)
                    .addOverlay(puntos_mapa1,Buses)
                    .addOverlay(puntos_mapa2,Taxi)
                    .addOverlay(puntos_mapa3,Metrovia)
                    .addOverlay(puntos_mapa4,Moto)
                    .addOverlay(puntos_mapa5,Camion)
                    .addOverlay(puntos_mapa6,Camioneta)
                    .addOverlay(puntos_mapa7,Expreso)

      }
      /*
      *Funcion que se encarga en ingresar los datos necesarios para el analisis kmeans.
      */      
      function insertar_datos(latitud,
                              longitud,
                              fecha_registro,
                              fecha_desde,
                              fecha_hasta,
                              marcador_desde,
                              marcador_hasta,
                              tipo_vehiculo)
      {
        $.ajax(
          {
            type:"GET",
            url: "ajax_carga_data_insert/"+latitud+"/"+longitud+"/"+fecha_registro+"/"+fecha_desde+"/"+fecha_hasta+"/"+marcador_desde+"/"+marcador_hasta+"/"+tipo_vehiculo,
            success: function(result)
            {              
              console.log(result);
            }
          });
      }
      function insertar(id,descripcion,latitud)
      {
        $.ajax(
          {
            type:"GET",
            url: "insert_data.php?id=" + id,
            success: function(result)
            {              
              console.log(result);
            }
          });
      }
      function ajax_r()
      {
        $.ajax(
          {
            type:"GET",
            url: "ajax_r_analisis",
            success: function(result)
            {             
            console.log(result); 
              var imagen = document.getElementById('imagen').src = "{{ asset('img/images/analisis2.jpeg') }}";
            }
          });
      }
  /*
  
      var puntos_mapa=L.layerGroup().addLayer(L.marker([39.984655,  116.318263]))
                                    .addLayer(L.marker([39.986655,  116.5163]))
                                    .addLayer(L.marker([39.987655,  116.611263])).addTo(mymap);
      if(layerControl === false) {
          layerControl = L.control.layers().addTo(mymap);
      }
      layerControl.addOverlay(puntos_mapa, "Gardens");
  */

  </script>
    </div>
  </div>
</div>  

</div>

@endsection
