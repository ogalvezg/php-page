<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!--- Navigation -->
	<?php $page = 'pricing'; include 'includes/navbar.php'; ?>
    <!--- End Navigation -->
    
    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h3>Pricing</h3>
        </div>
    </div>

    <div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="#">Bootstrap Course</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
    </div>

    <div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">Tailormade prices</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>Starting from $450.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Starting from $300.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>Starting from $550.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>


	<!--- Start Footer -->
	<?php include 'includes/footer.php'; ?>
	<!--- End of Footer -->

	<!--- Script Source Files -->
	<?php include 'includes/scripts.php'; ?>
	<!--- End of Script Source Files -->

</body>
</html>