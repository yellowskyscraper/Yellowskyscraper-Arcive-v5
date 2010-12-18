<!DOCTYPE html>
<html lang="en">
<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>Yellowskyscraper - Currently Rebuilding Stuff</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <?php include 'data/elements/headerlinks.php'; ?>
</head>

<body>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <header id="headercontainer">
		<div class="topbar"></div>   
			
		<nav>	                                                  
			<a href="Contact.php">contact</a>  
			<a href="About.php">about</a>   
			<a href="" class="active">work</a>
		</nav>

		<?php include 'data/elements/header.php'; ?>
    </header>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <section id="contentcontainer">

		<section id="detail">
		
			<div class="titlebar">
				<h2>Simply Forsaken</h2>
				<p>A greater study on isolation.</p>
			</div>

			<div class="detailsbar">    
				<p>Project Status <span class="black">|</span> Month Year <span class="black">|</span> Media Type or Category</p> 
       
				<div class='social'>     
					<?php   
					$header = 'Yellowskyscraper';  
					include 'data/elements/sharing.php';  
					?>
				</div>     
			</div>                           

			<div class="article_columns">
				<h3>A Prototype of Intelligence.</h3>
				<p>Simply Forsaken is a part of a larger exploration of loneliness, a part of a personal study of human isolation. Simply Forsaken is one in a series of observations and experiments intended to better my understanding of this curious and age old problem of our experience of life.</p><br>
				
				<p>If one was so inclined, they might say that our conscious understanding of the world is limited to, or constrained to our perception of it. We perceive our surroundings, then rationalize our surroundings, and it is through this that we build an understanding of our environment and our relationship to it. And since we can never truly escape these bodies of ours, and transcend subjective perception, we are forever, alas, as it can be known, trapped in a solipsist universes governed by these ever so temperamental senses.</p><br> 

				<p>My focus for this exploration was to create a small electronic device that could experience loneliness on its most shallow of levels; alone he grows anxious and erratic, accompanied he becomes calm and ordered. The device was granted a single mode to perceive his world; movement, and a single means to expressing that perception; an illuminated heartbeat.</p><br>

				<h3>Documentation.</h3>
				<p>For this a simple algorithm was written to detect changes in the environment sent in from a Dual-Axis Accelerometer, triggering the ebb and flow of the simulated emotional reaction of a heart beat.</p><br>
			</div>
			
			<img class="firstorder" src="data/projects/SimplyForsaken/image1.jpg" alt="Image Description" />
			
			<!-- <div class="dividerbar"></div>  --> 
			<div class="dividerdots"></div>
		</section>

    	<section id="portfolio" class="detailprojects">
			<?php include 'data/elements/thumbnails.php'; ?>
    	</section>

    </section>

	<footer></footer>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->

    <script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-9207090-1");
			pageTracker._trackPageview();
		} catch(err) {
			
		}
	</script>
<!--|///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|-->    
</body>
</html>