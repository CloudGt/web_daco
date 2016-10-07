?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Dacotrans de Centroamerica</title> 
	<meta name="description" content="Empresa importacion exportacion"/>
	<meta name="keywords" content="importaciones, importacion, exportacion, exportaciones, guatemala, alemania centroamerica, estados unidos" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs & Informática Dacotrans Guatemala"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="lib/css/ap-scroll-top.css" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	<!--start: Header -->
	<header>
		
							
	</header>
	
	
	<!-- start: 7th Page - Contact -->
	<div id="mapBg"></div>
	<div id="contact" class="color blue transparent">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

				
	
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contacto</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Contact Info -->
					<b>Dacotrans de Centroamerica, Sociedad Anónima</b> <br>
					•24av. 41-81 Zona 12, Interior Almacenadora Integrada <br>
					•Ciudad de Guatemala, 01012, Guatemala <br>
					•Telefono: (+502) 2381-1200 <br>
					•Fax: (+502) 2381-1244 <br>
					•Email: dacotrans@dacotrans.com.gt <br>
					•Web: dacotrans.com.gt	<br>
					<!-- end: Contact Info -->
				
				</div>	
			
			</div>
			<!-- end: Row -->
			
			<hr class="clean">
			
			<!-- start: Row -->
			<div class="row-fluid">		
			
				<!-- start: Map -->
				<div class="span6">
					
					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="envio.php">
							
							<fieldset>
								
								<input tabindex="4" id="name" name="name" type="text" value="" class="span12" placeholder="Nombre" >
								<input tabindex="2" id="de_email" name="de_email" type="text" value="" class="span12" placeholder="Email">
								<input tabindex="3" id="www" name="tel" type="text" value="" class="span12" placeholder="Telefono">
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="el_body" rows="7" placeholder="Mensaje"></textarea>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Enviar Mensaje</button>
								</div>
								
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->
					

				</div>
				<!-- end: Map -->
				
				<div class="span6">
					
					<!-- starts: Google Maps -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<div id="googlemaps">
						<div id="map" class="google-map google-map-full"></div>
					</div>
					<script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWfmBx3gWIE5W9HvQxmWG31uvCGqYTwA"></script>
					<script src="js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
						$('#map').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: '14.5751453,-90.5414904', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
						$('#mapBg').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: '14.5751453,-90.5414904', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
					</script>
					<!-- end: Google Maps -->
				
				</div>	
			
			</div>
			<!-- end: Row -->

			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 7th Page - Contact -->

	

	<footer>

		
	</footer>	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script src="lib/js/ap-scroll-top.js"></script>
<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>


		<script type="text/javascript">
            // Setup plugin with default settings
            $(document).ready(function() {

                $.apScrollTop({
                    'onInit': function(evt) {
                        console.log('apScrollTop: init');
                    }
                });

                // Add event listeners
                $.apScrollTop().on('apstInit', function(evt) {
                    console.log('apScrollTop: init');
                });

                $.apScrollTop().on('apstToggle', function(evt, details) {
                    console.log('apScrollTop: toggle / is visible: ' + details.visible);
                });

                $.apScrollTop().on('apstCssClassesUpdated', function(evt) {
                    console.log('apScrollTop: cssClassesUpdated');
                });

                $.apScrollTop().on('apstPositionUpdated', function(evt) {
                    console.log('apScrollTop: positionUpdated');
                });

                $.apScrollTop().on('apstEnabled', function(evt) {
                    console.log('apScrollTop: enabled');
                });

                $.apScrollTop().on('apstDisabled', function(evt) {
                    console.log('apScrollTop: disabled');
                });

                $.apScrollTop().on('apstBeforeScrollTo', function(evt, details) {
                    console.log('apScrollTop: beforeScrollTo / position: ' + details.position + ', speed: ' + details.speed);

                    // You can return a single number here, which means that to this position
                    // browser window scolls to
                    /*
                    return 100;
                    */

                    // .. or you can return an object, containing position and speed:
                    /*
                    return {
                        position: 100,
                        speed: 100
                    };
                    */

                    // .. or do not return anything, so the default values are used to scroll
                });

                $.apScrollTop().on('apstScrolledTo', function(evt, details) {
                    console.log('apScrollTop: scrolledTo / position: ' + details.position);
                });

                $.apScrollTop().on('apstDestroy', function(evt, details) {
                    console.log('apScrollTop: destroy');
                });

            });


            // Add change events for options
            $('#option-enabled').on('change', function() {
                var enabled = $(this).is(':checked');
                $.apScrollTop('option', 'enabled', enabled);
            });

            $('#option-visibility-trigger').on('change', function() {
                var value = $(this).val();
                if (value == 'custom-function') {
                    $.apScrollTop('option', 'visibilityTrigger', function(currentYPos) {
                        var imagePosition = $('#image-for-custom-function').offset();
                        return (currentYPos > imagePosition.top);
                    });
                }
                else {
                    $.apScrollTop('option', 'visibilityTrigger', parseInt(value));
                }
            });

            $('#option-visibility-fade-speed').on('change', function() {
                var value = parseInt($(this).val());
                $.apScrollTop('option', 'visibilityFadeSpeed', value);
            });

            $('#option-scroll-speed').on('change', function() {
                var value = parseInt($(this).val());
                $.apScrollTop('option', 'scrollSpeed', value);
            });

            $('#option-position').on('change', function() {
                var value = $(this).val();
                $.apScrollTop('option', 'position', value);
            });
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


function mostrar(){
	document.getElementById('ocultar').style.display = 'none';
	document.getElementById('mostrar').style.display = 'block';
}

function ocultar(){
	document.getElementById('ocultar').style.display = 'block';
	document.getElementById('mostrar').style.display = 'none';
}
function mostrar2(){
	document.getElementById('ocultar2').style.display = 'none';
	document.getElementById('mostrar2').style.display = 'block';
}

function ocultar2(){
	document.getElementById('ocultar2').style.display = 'block';
	document.getElementById('mostrar2').style.display = 'none';
}

function mostrar3(){
	document.getElementById('ocultar3').style.display = 'none';
	document.getElementById('mostrar3').style.display = 'block';
}

function ocultar3(){
	document.getElementById('ocultar3').style.display = 'block';
	document.getElementById('mostrar3').style.display = 'none';
}







</script>


<!-- end: Java Script -->

</body>
</html>