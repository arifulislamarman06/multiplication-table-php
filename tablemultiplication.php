<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multiplication Table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="https://www.sciencenews.org/wp-content/uploads/2019/04/040219_ec_multiplying-numbers_feat.jpg">
</head>
<body>

<section class="multiplication">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-6">
				<h1 style="text-align: center; display: block; width: 100%; padding-top: 5px; margin-bottom: 0;">
					TABLE OF MULTIPLICATION <br> নামতা 
				</h1>
				<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="number" placeholder="Number" autocomplete="off" pattern="[0-9]+">
					<button name="submit">GENERATE</button>
					
					
					
						</div>

		<div class="col-lg-6">
			<div class="result">
				<h3>
					<?php

						 if (isset($_POST['submit'])) {
							$input = $_POST['number'];
							for ($i=1; $i <= 10; $i++) {
								$sum = $input * $i; 
								echo $input ."×".  $i ."&nbsp;"."="."&nbsp;".  $sum .'<br>'; 
							}
							?>
							<button class="btn btn-motion" name="clear">CLEAR</button>
							<?php 
						}

							
					?>
					<?php if (isset($_POST['clear'])) {
							header("Refresh:1");
					} ?>
				</h3>
				
			</div>
		</div>
		</form>

	</div>
</div>
</section>
				

							
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>