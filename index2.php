<!doctype html>
<html lang="en">
  <head>
  	<title>HOTEL ASTON/login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body  style="background-color: #F2F3F3">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">HOTEL ASTON</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/rs.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login ADMIN/RESEPSIONIS</h3>
			      		</div>
								<!--<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>-->
			      	</div>
					  <form action="cek_login2.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required autocomplete="off" >
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password"  name="password" class="form-control" placeholder="Password" required autocomplete="off" >

	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
	            </div>
		            
		          </form>
				  <div class="text-center">
					<a class="small" href="index.php">Masuk Ke Home Aplikasi</a>
				</div>
		         
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

