<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Consultancy a Corporate Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('lesstraffic/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('lesstraffic/css/JiSlider.css') }}" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
<link href="{{ asset('lesstraffic/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('lesstraffic/css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">
</head>
	
<body>
<!-- banner -->
@yield('content')
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
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-diamond" aria-hidden="true"></i> FCI</a></h1>

				</div>





				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="effect-3">Home</a></li>
							<li><a href="services.html" class="effect-3">Services</a></li>
							<li><a href="portfolio.html" class="effect-3">Portfolio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li>
							<li><a href="mail.html" class="effect-3">Mail Us</a></li>
							@guest
								<ul class="agile_forms">
									<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>
									<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>
								</ul>
							@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li><a class="dropdown-item" href="{{ route('logout') }}"
			                               onclick="event.preventDefault();
			                                             document.getElementById('logout-form').submit();">
			                                {{ __('Logout') }}
			                            </a>
											                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                @csrf
			                            </form>
			                        	</li>

									</ul>
								</li>


							@endguest
						</ul>
					</nav>

				</div>
			</nav>	
<div class="clearfix"> </div> 
		</div>
</div>
<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Business Consultancy </h3>
									 <p>Grow Your Business</p>
										<div class="more">
									<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Best Business Support</h3>
									 <p>Planning Your Dream</p>
										<div class="more">
									<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Business Consultancy </h3>
									 <p>Grow Your Business.</p>
									<div class="more">
									<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
									</div>
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
		</div>
      </div>

<!-- //banner -->
	<!-- Modal1 -->
													<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form method="POST" action="{{ route('login') }}">
																					@csrf
																					<input type="email" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp">
																						<input type="submit" value="Sign In">
																					</div>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
																			<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
													<!-- Modal2 -->
													<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign Up</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="password" name="password" placeholder="Confirm Password" required="">
																					<input type="submit" value="Sign Up">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	
<!-- Modal2 -->
													<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="text" name="subject" placeholder="Subject" required="">
																					<textarea name="Comments" placeholder="Message" required=""></textarea>
																					<input type="submit" value="SUBMIT">
																				</form>
																			</div>
																			
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal2 -->	
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5>Consultancy</h5>
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- about -->
	<div class="inner_main_agile_section">
		<div class="container">
		<h6>What makes us different</h6>
				<h3 class="w3l_header w3_agileits_header">About <span>Us</span></h3>
		<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>
			
			<div class="agile_inner_grids">
								
				<div class="col-md-6 w3_agileits_about_grid_left">
					<p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere, 
						ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl. 
						Mauris ut enim sed tortor auctor luctus at vitae est.<span>Duis dignissim auctor rhoncus. 
						Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna. 
						Pellentesque molestie maximus nisl at ultrices.</span> </p>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Marketing</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Professional approach</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Production</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Effective Solutions</li>
					</ul>
				</div>
				<div class="col-md-6 w3_agileits_about_grid_right">
					
							  <div id="chart">
							  <ul id="numbers">
								<li><span>100%</span></li>
								<li><span>90%</span></li>
								<li><span>80%</span></li>
								<li><span>70%</span></li>
								<li><span>60%</span></li>
								<li><span>50%</span></li>
								<li><span>40%</span></li>
								<li><span>30%</span></li>
								<li><span>20%</span></li>
								<li><span>10%</span></li>
								<li><span>0%</span></li>
							  </ul>
							  <ul id="bars">
								<li><div data-percentage="56" class="bar"></div><span>Option 1</span></li>
								<li><div data-percentage="33" class="bar"></div><span>Option 2</span></li>
								<li><div data-percentage="54" class="bar"></div><span>Option 3</span></li>
								<li><div data-percentage="94" class="bar"></div><span>Option 4</span></li>
								<li><div data-percentage="44" class="bar"></div><span>Option 5</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Option 6</span></li>
							  </ul>
							</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
	<div class="medile_agile_its_section">
	     <div class="col-md-6 medile_agile_its_blue">
	           <h4>Request a Free Consultation <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h4>
	     </div>
		 <div class="col-md-6 medile_agile_its_green">
	             <div class="more click">
									<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal4">Click Here  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
	     </div>
		 <div class="clearfix"> </div>
	</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h6>Management Consultancy</h6>
			<h2> <span class="fixed_w3">We</span>  Carefully handle all <span class="fixed_w3">Projects</span> </h2>
			<p class="sub_para_agile">Ipsum dolor sit amet consectetur adipisicing elit</p>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						   <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						     <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						    <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						    <p>Project</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_banner_bottom_grids two">
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/5.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						   <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						     <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						    <p>Project</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/8.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Consultancy</h4>
						    <p>Project</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /blog -->
	<div class="events">
		<ul id="flexiselDemo1">	
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>23 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Learn Basics</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/8.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>25 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">business law</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>28 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">PHP Programming</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Earn Profit</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>2 April 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Strategy</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
<!-- //blog -->
	</div>
<!-- //banner-bottom -->

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our <span>SERVICES</span></h3>
		<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>
			
			<div class="agile_inner_grids">
								
								   <!-- choose icon -->
								   <div class="col-md-6 choose_icon">
										<div class="choose_left">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									<div class="choose_right">
										<h3>BUSINESS CONSULTING</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and
										typesetting industry.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
										<div class="clearfix"></div>
									 </div>
								 
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-bullhorn" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>ONLINE CONSULTING</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and
										typesetting industry.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								 
								  <!-- choose icon -->
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-user-secret" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>LAWYER CONSULTING</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and
										typesetting industry.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								  <div class="col-md-6 choose_icon">
									<div class="choose_left">
										<i class="fa fa-laptop" aria-hidden="true"></i>
									</div>
									<div class="choose_right">
										<h3>IT MANAGEMENT</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and
										typesetting industry.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="clearfix"></div>
								 </div>
								 <div class="clearfix"></div>
							</div>
						</div>
					</div>
	<!-- //services -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-laptop" aria-hidden="true"></i>
			<p class="counter">45</p>
			<h3>Courses</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		    <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Members</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-trophy" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Awards</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-user" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Investors</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<h3 class="w3l_header w3_agileits_header">Happy <span>Clients</span></h3>
		<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>
			
			<div class="agile_inner_grids">
					<div class="test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									  <i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Steve Warner</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t1.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor.</p>
										<h4>Andery</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t2.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Williams</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t3.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
										Lorem ipsum dolor .</p>
										<h4>Shane Smith</h4>
										<span>Lorem Ipsum</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t4.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>	
					</div>
				</div>	
		</div>
</div>	
</div>
<!-- //agile_testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="services.html">Services</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="portfolio.html">Portfolio</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3_newsletter_footer_grids">
				<div class="w3_newsletter_footer_grid_left">
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Your Email...." required="">
						<input type="submit" value="SEND">
					</form>
				</div>
			</div>
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>3481 Melrose Place, Beverly Hills, <span>New York City 90210.</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a> 
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2017 Consultancy. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="{{ asset('lesstraffic/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('lesstraffic/js/JiSlider.js') }}"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
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
	<script src="{{ asset('lesstraffic/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('lesstraffic/js/jquery.countup.js') }}"></script>
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
	<script type="text/javascript" src="{{ asset('lesstraffic/js/jquery.flexisel.js') }}"></script>
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
 <script src="{{ asset('lesstraffic/js/owl.carousel.js') }}"></script>
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


<script type="text/javascript" src="{{ asset('lesstraffic/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('lesstraffic/js/easing.js') }}"></script>
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
	<script src="{{ asset('lesstraffic/js/bootstrap.js') }}"></script>
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