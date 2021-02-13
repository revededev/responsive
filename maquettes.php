<?php require '../../include/header.php'; ?>

<main class="container">
	<h1>Ensemble des maquettes pour Snowmount</h1>
	<div class="d-flex flex-row flex-wrap justify-content-around align-items-baseline">
		<figure>
			<figcaption>Maquette pour 320px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/0320px.png' ?>" alt="320">
		</figure>
		<figure>
			<figcaption>Maquette pour 576px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/0576px.png' ?>" alt="576">
		</figure>
		<figure>
			<figcaption>Maquette pour 768px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/0768px.png' ?>" alt="768">
		</figure>
		<figure>
			<figcaption>Maquette pour 992px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/0992px.png' ?>" alt="992">
		</figure>
		<figure>
			<figcaption>Maquette pour 1200px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/1200px.png' ?>" alt="1200">
		</figure>
		<figure>
			<figcaption>Maquette pour 1600px</figcaption>
			<img src="<?php echo $_SESSION['pathRoot'].$wamp.'/public/img/maquettes/1600px.png' ?>" alt="1600">
		</figure>
	</div>
</main>
<?php require '../../include/footer.php'; ?>
