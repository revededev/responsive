<?php require "../../include/init.php";?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <title>SnowMount HTML+CSS</title>
      	<link rel="stylesheet" type="text/css" href="style/style.css">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Calligraffitti&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

	<section  id="montagne">
<!-- <div class="grid_container" id="grid_header"> -->
		<header>
			<div> <img src="images/logo_petit.svg"></div>
			<nav>

				<svg id="burger" aria-label="Menu" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
					<path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24"></path>
				</svg>
<!-- ajouter nav_links -->
				<div id="nav_links">
					<a href="<?php echo $_SESSION['pathRoot'].'/'; ?>">Home</a>
					<a href="maquettes.php">Voir les maquettes</a>
					<a href="#Contact">Contact</a>
					<a href="#" id="bouton_say">
						<h5>Say Hello</h5>
					</a>
			</nav>
		</header>
<!-- </div> -->
		<p>
			Wonderful<br>
			<span id="world">world</span>
		</p>	
		<a href="#our_work" class="bouton_work">
			<h5>Our Work </h5>
			<img src="images/icone_fleche.svg" alt="" />
		</a>
	</section> <!--  "montagne" -->

	<section id="about">
			<h1>About Me</h1>
			<p>
				Lorem ipsum dolor sit 
				amet, consetetur 
				sadipscing elitr, sed diam 
				nonumy eirmod tempor 
				invidunt ut labore et dolore 
				magna aliquyam erat,sed 
				diam vuluptua. At vero eos 
				et accusam et justo
			</p>
	</section>  <!-- div "about" -->

<!--<section id="portfolio">*/ -->
	<section class="grid_container" id="portfolio">

		<div id="our_work">
			<h1>Our Work</h1>
		</div>

		<div id="chalet">	
			<img src="images/chalet.jpg" alt="chalet">
		</div>

		<div id="loup_carre">
			<img src="images/loup_petit.jpg" alt="loup carre">
		</div>

		<div id="loup_large">
			<img src="images/loup_large.jpg" alt="loup large">
		</div>

		<div id="skieur">
			<div class="flex_col">
				<h2>Fly High</h2>
				<p>
					Lorem ipsum dolor sit amet, consetetur 
					sadipscing elitr, sed diam nonumy eirmod tempor 
					invidunt ut labore et dolore magna aliquyam erat,sed 
					diam vuluptua. At vero eos et accusam et justo
				</p>
				<a href="#" class="bouton_see">
					<h4>See More</h4>
				</a>
			</div>
		</div>

<div id="grid_rando-croix">
	<div id="flex_rando-croix">
			<img id="rando" src="images/randonneur.jpg" alt="rando">
			<img id="croix" src="images/croix.jpg" alt="croix">
	</div>
</div>
	</section> <!-- div "grid_container" protfolio -->

	<section class="grid_container" id="temoignage">
		<div id="temoignage_x_ark"> 
			<h1>Testimonial</h1>
				<img src="images/carolyn.jpg" class="photo_caro"  alt="photo_carolyn">
			<h6>Carolyn Clark</h6>
			<p>
				Lorem i&psum dolor sit 
				amet, consetetur 
				sadipscing elitr, sed diam 
				nonumy eirmod tempor 
				invidunt ut labore et dolore 
				magna aliquyam erat,sed 
				diam vuluptua. At vero eos 
				et accusam et
			</p>
			<section id="boutons">
				<button id="b_gauche"> G	</button>
				<button id="b_milieu"> M	</button>
				<button id="b_droit">  D	</button>
			</section>
		</div> <!-- temoignage ark (clark-mark-park) */ -->
	
<!-- ajouterles 3 boutons 1=clark / 2=mark / 3= park -->
	</section>  <!--div "temoignage"-->		


	<footer>
		<section class="grid_container_footer" id="grid_footer">

			<div id="SNOWMOUNT">
				<img src="images/logo_grand.svg" alt="logo_grand">
			</div>

			<div id="location">
				<h3>Location</h3>
				<p>Snowmount</p>
				<p>3979 Marseille road</p>
				<p>New York</p>
			</div>

			<div id="contact">
				<h3>Contact</h3>
				<p>(859) 759-1380</p>
				<p>jessica.lee@mail.com</p>
			</div>

			<div id="reseaux_sociaux">
				<img src="images/fb.svg" alt="facebook">
				<img src="images/instagram.svg" alt="instagram">
				<img src="images/youtube.svg" alt="Utube">
			</div>
		</section>
	</footer>

</body>
</html>
