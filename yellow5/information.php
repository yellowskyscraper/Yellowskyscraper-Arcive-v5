<!doctype html>
<html lang="en">

<head>
	<title>Yellowskyscraper; new diggs.</title>

	<meta name="description" content="..." /> 
	
	<meta property="og:title" content="Yellowskyscraper, under construction since 1986" />
	<meta property="og:type" content="other" />
	<meta property="og:image" content="http://www.yellowskyscraper.com/yellow5/data/img/og.jpg" />
	<meta property="og:url" content="http://www.yellowskyscraper.com/yellow5/index.php" />
	<meta property="og:site_name" content="Yellowskyscraper, under construction since 1986" />
	<meta property="fb:app_id" content="..." />
	<meta property="og:description" content="..." />
	
	<?php include 'data/includes/header.php'; ?>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>   
	<script type="text/javascript">
   		
		var overlay;
		InfoOverlay.prototype = new google.maps.OverlayView();
	
		function initialize() {      
			var markLatLng = new google.maps.LatLng(37.78469, -122.41392);   
			var mapLatLng = new google.maps.LatLng(37.79069, -122.39800);  
			
			var mapOptions = {
				zoom: 13,
				center: mapLatLng,  
				draggable:false,
				scrollwheel:false,   
				scaleControl:false,
				disableDefaultUI: true,    
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById("mapplet"), mapOptions);  
			
		    var swBound = new google.maps.LatLng(37.79969, -122.41392);
		    var neBound = new google.maps.LatLng(37.78469, -122.41392);
		    var bounds = new google.maps.LatLngBounds(swBound, neBound);  
		      
		    var srcImage = 'data/img/InfoWindow.png';                    
		    overlay = new InfoOverlay(bounds, srcImage, map); 
		}                                                       
                   
		function InfoOverlay(bounds, image, map) {    
			this.bounds_ = bounds;
			this.image_ = image;
			this.map_ = map;                            
			this.div_ = null;  
			this.setMap(map);
		}
		
		InfoOverlay.prototype.onAdd = function() {  
			var div = document.createElement('DIV');
			div.style.borderStyle = "none";
			div.style.borderWidth = "0px";
			div.style.position = "absolute";                   
			
			var img = document.createElement("img");  
			img.style.position = "absolute"; 
			img.src = this.image_;
			img.style.width = "370px";
			img.style.height = "119px"; 
			                              
			var content = document.createElement("content");  
			content.style.position = "absolute";   
			content.style.margin = "10px"; 
			content.style.width = "370px";
			content.style.height = "119px";
		  	content.innerHTML = '<h1>Yellowskyscraper HQ</h1>'+ 
								'<h2>CEO James S. Hovell</h2>'+
						    	'<p>office@yellowskyscraper.com</p>';
						                       
			div.appendChild(img);
			div.appendChild(content);                       
			
			this.div_ = div;                                   
			
			var panes = this.getPanes();
			panes.overlayImage.appendChild(div);   
		}   

		InfoOverlay.prototype.draw = function() {  
			var overlayProjection = this.getProjection();         
			
			var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());   
			
			var div = this.div_;
		    div.style.left = sw.x + 'px';
			div.style.top = sw.y + 'px';                  
		}

		InfoOverlay.prototype.onRemove = function() {  
			this.div_.parentNode.removeChild(this.div_);
			this.div_ = null;   
		}  

	</script>

	<!--Deleted or special cases embedded styles-->
	<style type="text/css">
	

	</style>

</head>

<body onLoad="initialize()">

	<header id="navigation">
		<div class="row">
			<div class="twelvecol">
				<h1><a href="index.php">Yellowskyscraper</a></h1>
				<nav>
					<ul>
						<li><a href="work.php">Work</a></li>
						<li><a href="news.php">News</a></li>
						<li class="current-section"><a href="information.php">Information</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section id="first">
		<div class="row">
			<div class="tencol landing-header">
				<p>But how can we here at Yellowskyscraper have any time for new, exciting clients and adventures while entrenched in such an overwhelming undertaking as a massive restructuring? Well, thank goodness that's not for the blood, sweat, and tears of our employees to decide.</p>     
				
				<p>So please contact us, despite all the scary scaffolding out front, we're still very much in business and would love to hear from you.</p>
			</div>
			<div class="twocol last">

			</div>
		</div>

		<div class="row">
			<div class="tencol landing-credit">
				<p>Wish you the best possible,<br /> 
				CEO James S. Hovell</p>
			</div>
			<div class="twocol last">

			</div>
		</div>

		<div class="row">
			<!-- <div class="twelvecol">
				<div class="mapcontainer">
					<div id="mapoverlay"></div>
					<div id="mapplet"></div>
				</div>  
			</div> -->
		</div>
	</section>

	<section>
		<div class="row">
			<div class="twelvecol divider-line">
			</div>
		</div>

		<?php include 'data/includes/thumbnails.php'; ?>
	</section>

	<footer>
		<?php include 'data/includes/footer.php'; ?>
	</footer>

</body>

</html>