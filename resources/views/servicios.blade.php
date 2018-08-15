<!DOCTYPE html>
<html lang="en">
<head>
<title>Less Traffic</title>
<!-- custom-theme -->



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->


<link href="{{ asset('packages/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('packages/css/JiSlider.css') }}" rel="stylesheet">  <!--no pasa nada si lo quito-->
<link rel="stylesheet" href="{{ asset('packages/css/flexslider.css') }}" type="text/css" media="screen" property="" /><!--no pasa nada si lo quito-->
<!-- Owl-carousel-CSS --><link href="{{ asset('packages/css/owl.carousel.css') }}" rel="stylesheet"><!--no pasa nada si lo quito-->
<link href="{{ asset('packages/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('packages/css/font-awesome.css') }}" rel="stylesheet">


<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">



</head>



<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
		   
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h6><a class="w3l_header w3_agileits_header" href="{{ asset('') }}"><img  src="{{ asset('packages/images/lt.jpeg') }}" style="width:7%;">Less Traffic</a></h6>
				</div>
				 <ul class="agile_forms">
					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>
				</ul>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ asset('') }}"  class="effect-3">Inicio</a></li>
							<li><a href="{{ asset('servicios') }}" class="effect-3">Servicios</a></li>
							<!--<li><a href="portfolio.html" class="effect-3">Portfolio</a></li>-->
							<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li><-->
							<li><a href="{{ asset('contactos') }}" class="effect-3">Contactos</a></li>
						</ul>
					</nav>

				</div>
			</nav>	
<div class="clearfix"> </div> 
		</div>
</div>


<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">NUESTROS <span>SERVICIOS</span></h3>
		<!--<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>-->
			
			<div class="agile_inner_grids">
								
								   <!-- choose icon -->
								   <div class="col-md-6 choose_icon">
										<div class="choose_left">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									<div class="choose_right">
										<h3>Desarrollo de sistema</h3>
										<p>LessTrafic se desarrollará en el lenguaje de etiqueta de php, usando framework de Laravel complementada con “AngularJs” para la web y framework de Ionic para entorno movil.</p>
									</div>
										<div class="clearfix"></div>
									 </div>
								 
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-bullhorn" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>Gestión de la Base de datos</h3>
										<p>Los datos generados por LessTrafic se gestionarán en “PostgreSQL” con extensión de “PostGis” para el manejo de datos espaciales. Su almacenamiento será en la nube.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								 
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-user-secret" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>Análisis de datos</h3>
										<p>Para realizar el análisis de las trayectorias, se utilizará dos técnicas de clustering desarrolladas en lenguaje r, en el cual se analizara y graficara sus resultados.</p>
									</div>
									<div class="clearfix"></div>
								 </div>


								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-laptop" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>Elaboración de gráficos y mapas</h3>
										<p>La elaboración de los mapas se realizará mediante “OpenStreetMaps (OSM)” y “CartoDB” , además del uso de api’s de OSM  para graficar mapas interactivos como “OpenLayers” para web y “Leaflet”.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								 <div class="clearfix"></div>
							</div>
						</div>
</div>












<!-- js -->
<script type="text/javascript" src="{{ asset('packages/js/jquery-2.1.4.min.js') }}"></script>   
<!-- //js -->
<script src="{{ asset('packages/js/JiSlider.js') }}"></script>
<script>
			$(window).load(function () {	
				$('#JiSlider').JiSlider({color: '#fff', start:0, reverse: false}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- stats -->
	<script src="{{ asset('packages/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('packages/js/jquery.countup.js') }}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>
<!-- flexisel -->
	<script type="text/javascript" src="{{ asset('packages/js/jquery.flexisel.js') }}"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:800,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->
<!-- requried-jsfiles-for owl -->
 <script src="{{ asset('packages/js/owl.carousel.js') }}"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->


<script type="text/javascript" src="{{ asset('packages/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('packages/js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="{{ asset('packages/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>