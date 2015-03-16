<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
$doc->addScript('templates/' . $this->template . '/js/template.js');

// Add Stylesheets
$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>

<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Ecotoner</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
<script>
function telefonos(){
	document.getElementById("telefonos2").style.display="initial";
	document.getElementById("telefonos").style.display= "none";
}

function telefonos2(){
	document.getElementById("telefonos").style.display="initial";
	document.getElementById("telefonos2").style.display= "none";
}


</script>
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<a class="navbar-brand" href="index.html"><img src="images/logoblack.jpg" alt=""></a>
							</div>	
							<div onclick="telefonos()" id="telefonos" style="display:none" class="col-md-8">

								<ul class="social-icons fnegro">
									<li>  &nbsp; +502 23263333   50calle 18-37 zona 12 Bodega 1 Guatemama Ciudad	</li>

									<li>  &nbsp; +503 2263800  Calle Douglas Varela y Ave. Marina Nacional Casa I-1 Col. General Arce, San Salvador	</li>

									<li>  &nbsp; +504 25080845 25080846   Col. Los Álamos, 18 calle 8-9 ave. No. 225 San Pedro Sula. Honduras.	</li>
								</ul>	
								
							</div>	

							<div id="telefonos2" onclick="telefonos2()"  class="col-md-8">

								<ul class="tel fnegro">
									<li> Guatemala, Guatemala &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;+502 23263333	<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Flag_of_Guatemala.svg/200px-Flag_of_Guatemala.svg.png" width="20px"></li>

									<li> San Salvador, El Salvador   &nbsp; &nbsp;   +503 2263800 &nbsp;	<img src="http://www.mlssoccer.com/sites/league/files/imagecache/mc_team_logo/el-salvador.png" width="20px"></li>

									<li> San Pedro Sula, Honduras. &nbsp; +504 25080845 	<img src="http://img2.wikia.nocookie.net/__cb20130805022158/avatar/es/images/7/79/Bandera_de_Honduras.png" width="20px"></li>
								</ul>	
								
							</div>		




						</div>
					</div>
				</div>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop"><a class="active" href="index.html">INICIO</a>
								
							</li>
							<li class="drop"><a href="projects.html">QUIENES SOMOS</a>
								
							</li>
							
							<li class="drop"><a href="services.html">PRODUCTOS Y SERVICIOS</a>
								
							</li>
							<li class="drop"><a href="blog.html">COMPRAMOS VACIOS</a>
								
							</li>
							<li class="drop"><a href="blog.html">PREGUNTAS FRECUENTES</a>
								
							</li>
							<li><a href="contact.html">CONTACTENOS</a></li>
							<li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<!-- End Header -->

		<!-- home-section 
			================================================== -->
		<section id="home-section" class="slider1">
			
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/slideimage2.jpg"  alt="slidebg1" data-lazyload="upload/slide/slideimage2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							

						</li>

						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/slideimage4.jpg"  alt="2" data-lazyload="upload/slide/slideimage4.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="Parallax 3D">
							<!-- MAIN IMAGE -->
							<img src="upload/slide/slideimage1.jpg"  alt="3dbg" data-lazyload="upload/slide/slideimage1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="450" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Confianza<br>
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption finewide_medium_white lfl tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="490" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="1500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Buen Servicio<br>
							</div>

						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>
		<!-- End home section -->

		<div>
			
			<p>Brindarle a nuestros clientes , la mejor relación precio-calidad en la compra de sus cartuchos de impresora, de tal forma que al comprarlos obtendrá un ahorro sustancial sin que la calidad resulte afectada</p>
		</div>

		<!-- news-section 
			================================================== -->
		<section class="news-section">
			<div class="container">
				
				<div class="news-box">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="news-post">
								<img src="images/portada/p1.jpg" alt="">
								<h2><center><a href="single-post.html">Toner </a>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<a href="single-post.html">Tintas </a></center></h2>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="news-post">
								<img src="images/portada/p2.jpg" alt="">
								<h2><center><a href="single-post.html">Nuestras Soluciones</a></center></h2>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="news-post">
								<img src="images/portada/p3.jpg" alt="">
								<h2><center><a href="single-post.html">Vendelos Aca</a></center></h2>
								
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="news-post">
								<img src="images/portada/p4.jpg" alt="">
								<h2><center><a href="single-post.html">Solicita tu Garantia</a></center></h2>
								
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End news section -->
<!-- clients-section 
			================================================== -->
		<section class="clients-section">
			<div class="container">
				
				<div class="row">
					<div class="col-md-4">
						<a href="#"><img src="images/video.jpg" alt=""></a>

					</div>	
					<div class="col-md-8">
							<a href="#"><img src="images/printer.jpg" alt=""></a>
					</div>	
					
					</div>
					
				</div>

			</div>
		</section>
		<!-- End clients section -->
		<!-- clients-section 
			================================================== -->
		<section class="clients-section">
			<div class="container">
				<div class="clients-title">
					<h2>productos compatibles</h2>
					<p>Toda marca pertenece a sus propios dueños uso solo demostrativo o de referencia</p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="client-list">
							<li>
								<a href="#"><img src="http://image.naldzgraphics.net/2011/07/3-hp.jpg" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://www.lrsoutputmanagement.com/portals/16/Images/Logos/Logos_high_res/lexmark-logo.jpg" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://2.bp.blogspot.com/-2LHi5eDwf7w/U98vM-Cm3zI/AAAAAAAAQW4/PYJ6-OcfKu0/s1600/Canon%2BLogo.png" width="120" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://www.comunicacioncorporativa.net/newswire/wp-content/uploads/2012/02/logo-epson.jpg" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://upload.wikimedia.org/wikipedia/en/d/db/Xerox_2008_Logo.png" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://images.fonearena.com/blog/wp-content/uploads/2013/01/Samsung-Logo.jpg" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://upload.wikimedia.org/wikipedia/ru/7/73/Minolta_logo.png" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://www.ridani.com/wp-content/uploads/2013/08/brother_logo.png" width="120px" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="http://goodlogo.com/images/logos/kyocera_logo_3039.gif"  width="120px" alt=""></a>
							</li>
						</ul>
					</div>
					
				</div>

			</div>
		</section>
		<!-- End clients section -->

		<!-- footer 
			================================================== -->
		<footer>
			
			<p class="copyright">

			
				&copy; Copyright 2015. "ECOTONER"  All rights reserved.
			</p>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<!-- Revolution slider -->
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:1140,
				startheight:700,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"none",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:40,
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});	//ready
		
	</script>
</body>
</html>