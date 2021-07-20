<?php require('components/head.inc.php');?>
<?php include('components/navbar.inc.php');?>

<body>
	<section class="about gradient"
		style="margin-top:80px">
		<svg xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 1440 200">
			<path fill="#fff"
				fill-opacity="1"
				d="M0,128L48,128C96,128,192,128,288,117.3C384,107,480,85,576,64C672,43,768,21,864,37.3C960,53,1056,107,1152,112C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
			</path>
		</svg>
		<div class="container">
			<div class="row  align-items-center">
				<div class="col-md-5 text-center"><img src="img/confirm.svg"
						alt="feature image"
						class="img-fluid"></div>
				<div class="col-md-7 px-5 justify-content-center">
					<h1 class="text-center">Widomość została wysłana poprawnie.
					</h1>
					<p class="my-5"
						style="text-align:center">
						Odpowiem na wiadomość niezwłocznie po jej
						przeczytaniu. </p>
					<button class="card__button d-block my-5 text-uppercase"
						type="button"
						onclick="window.location.href='index.php'">Powrót na
						stronę
						główną</button>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 1440 170">
			<path fill="#fff"
				fill-opacity="1"
				d="M0,128L48,128C96,128,192,128,288,117.3C384,107,480,85,576,64C672,43,768,21,864,37.3C960,53,1056,107,1152,112C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
			</path>
		</svg>
	</section>
	<?php include('components/footer.inc.php')?>
</body>

</html>