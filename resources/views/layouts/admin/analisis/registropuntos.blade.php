@extends('layouts.admin.base')

@section('title', 'Configuracion Roles')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="x_panel">
         <form method="POST" class="form-horizontal form-label-left" >
      <h1 align="center">Lesstraffic</h1>
<table border="1" align="center">
        <tr class="table-active">
          <td><label>Fecha:</label></td>
          <td><input type="datetime-local" name="fecha_desde" id="fecha_desde"></td>        
        </tr>
        <tr class="table-active">
        <td><label>Tipo de Vehiculo:</label></td>
          <td align="lef top">
            <select name="tipo_vehiculo" id="tipo_vehiculo">
            <option value="1">Auto particular</option>
            <option value="2">Buses</option>
            <option value="3">Taxi</option>
            <option value="4">Metrovía</option>
            <option value="5">Moto</option>
            <option value="6">Camión</option>
            <option value="7">Camioneta</option>
            <option value="8">Expreso</option>
            </select>
          </td>
        </tr>
        <tr class="table-active">
          <td><label>Velocidad de Vehiculo:</label></td>
          <td align="lef top" >
              <select name="velocidad" id="velocidad">
              <option value="1">20 km/h</option>
              <option value="2">30 km/h</option>            
              <option value="3">40 km/h</option>            
              <option value="4">50 km/h</option>            
              <option value="5">60 km/h</option>            
              <option value="6">70 km/h</option>            
              </select>
            </td>
        </tr>
        <tr>
          <td class="table-active"><label>Sector:</label></td>
            <td align="lef top" >
              <select name="sector" id="sector">
              <option value="1">Norte</option>
              <option value="2">Sur</option>            
              <option value="3">Este</option>
              <option value="4">Oeste</option>
              </select>
            </td>
        </tr>        
        <tr class="table-active">        
          <td align="center" colspan="2">
            <input type="button" class="btn btn-sm btn-primary" value="Actualizar" name="bt_limpiar"  align="center" onclick="window.location.reload()"/>  
          </td>        
        </tr>
      </table>      
    </form>

    <img src="" id="imagen" class="img-responsive" style="height: 450px;">
    <?php
      if (isset($_POST['bt_aceptar']))
      {
        $fecha_desde = $_POST['fecha_desde'];

      }
    ?>
    </div> 
  </div>
  <div class="col-md-9">
    <div class="x_panel">

<!--<div id="mapid" style="width: 100%;height:100vh;"></div>-->
      <div id="mapid" style="width: 100%;height:580px;"></div>

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
      var tipo_vehiculo;
      var sector;
      var velocidad;

      var mymap = L.map('mapid', {
                    fadeAnimation: false,
                    zoomAnimation: false,
                    markerZoomAnimation: false
                  }).setView([-2.1887106287772053,-79.89135503768922], 16);
      var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
      
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
        fecha_desde   = $('#fecha_desde').val();
        tipo_vehiculo = $('#tipo_vehiculo').val();
        sector        = $('#sector').val();
        velocidad     = $('#velocidad').val();
        console.log(fecha_desde);
        console.log(tipo_vehiculo);
        console.log(sector);
        console.log(velocidad);
        var lvl_zoom=mymap.getZoom();

        if(fecha_desde!="" && tipo_vehiculo!="" && sector!="" && velocidad!="")
        {
          lat = e.latlng.lat;
          lng = e.latlng.lng;

          var newcoor       = new Array();
              newcoor[0]    = lat;
              newcoor[1]    = lng;

          latlngs.push(newcoor);
          arr_lat_lng[cont] = e.latlng;
          cont=cont+1;

          L.marker(newcoor, {icon: Icon_limite}).addTo(mymap);          

          carga_puntos(fecha_desde,newcoor[0],newcoor[1],tipo_vehiculo,sector);
          console.log(arr_lat_lng);
       
        }
        else
        {
          alert("Por favor llene los datos");
        }
      }
      mymap.on('click', onMapClick);
      /*
      *Funcion que se encarga en realizar la carga masiva.
      */
    function carga_puntos(fecha_desde,lat,long,tipo_vehiculo,sector)
      {
        $.ajax(
          {
            type:"GET",
            url: "ajax_guardar_gye/+" + fecha_desde + "+/" +lat + "/" +long + "/" +tipo_vehiculo + "/" +sector + "/" +velocidad,

            success: function(result)
            {
              console.log( result);              
            },
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
      var Icon_limite       = new Icon_all({iconUrl: "{{ asset('img/images/limite.png') }}"});
      L.icon                = function (options) {return new L.Icon(options);};    
      

  </script>
    </div>
  </div>
</div>  

</div>

@endsection
