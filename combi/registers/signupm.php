<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-msign.css">

</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Sign Up</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="../inc/signup.php">

								<div class="form-group">
									<label for="name">Username</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Which of the following are you? 
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item">L</a>
									    <a class="dropdown-item">G</a>
									    <a class="dropdown-item">B</a>
									   	<a class="dropdown-item">T</a>
									    <a class="dropdown-item">Q</a>

									  </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  	Did your family know that you are LGBTQ?
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item">No, they don't know.</a>
									    <a class="dropdown-item">Yes, they do.</a>
									  </div>
								</div>

		
								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Did you handle well the conflict if any?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item">No</a>
									   <a class="dropdown-item" >Yes</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  What's your ethnicity?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item">Asian</a>
									   <a class="dropdown-item">White</a>
									   <a class="dropdown-item">Black</a>
									   <a class="dropdown-item">Hispanic</a>
									   <a class="dropdown-item">Prefer not to disclose</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 	Do you agree others' support is important?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item">No</a>
									   <a class="dropdown-item">Yes</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 	Have you considered about coming out?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item">No</a>
									   <a class="dropdown-item">Yes</a>
									 </div>
								</div>

								<div class="form-group">
									<label for="password">
										Password
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>


								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Sign Up
									</button>
								</div>

							</form>
						</div>
					</div>
					
					<div class="footer">
						Copyright &copy; 2020 &mdash; Four Horse men   
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
