function carga_puntos(latlngA,latlngB,fecha_desde,fecha_hasta)
{
	$.ajax(
		{
			type:"GET",
			url: "ajax_carga_data/fecha_desde=" + fecha_desde + "/fecha_hasta=" + fecha_hasta,

  //url: "carga_data.php",          
			success: function(result)
			{

				var JsonResult = @json($result);                        
    			var count_result=JsonResult.latlngs.length;
				for(i=0;i<count_result;i++)
				{
					var id_user=JsonResult.latlngs[i][0];//ID user
					var lat_d=JsonResult.latlngs[i][1];//latitud
					var lng_d=JsonResult.latlngs[i][2];//longitud

					var point=new L.LatLng(lat_d,lng_d);
					var tolerance = tolerance === undefined ? 0.2 : tolerance;
 				  var hypotenuse = latlngA.distanceTo(latlngB),
 				 	delta = latlngA.distanceTo(point) + point.distanceTo(latlngB) - hypotenuse;
 				 	var result=delta/hypotenuse < tolerance
					if(result)
					{								
						var point_data = new Array();
								point_data[0] =id_user;
								point_data[1] =lat_d;
								point_data[2] =lng_d;
        latlngs_data.push(point_data);
						//L.marker(point, {icon: Icon_data}).addTo(mymap);
					}
				}
    capa_point(latlngs_data);
			}
});
}