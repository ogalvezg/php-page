<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	<!--- Navigation -->
	<?php $page = 'portfolio'; include 'includes/navbar.php'; ?>
    <!--- End Navigation -->
    
    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h3>Portfolio</h3>
        </div>
    </div>

    <div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">FIND OUT OUR WORK</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
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