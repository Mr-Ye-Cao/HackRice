<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-signup.css">

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
							<form method="POST" id="myform" class="my-login-validation" novalidate="" action="../inc/signup.php">

								<div class="form-group">
									<label for="name">Username</label>
									<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									  <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Which of the following are you? 
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item 11" id="a">L</a>
									    <a class="dropdown-item 12">G</a>
									    <a class="dropdown-item 13">B</a>
									   	<a class="dropdown-item 14">T</a>
									    <a class="dropdown-item 15">Q</a>
									  </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									  <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  	Does your family know that you are LGBTQ?
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item 21">No, they don't know.</a>
									    <a class="dropdown-item 22">Yes, they support me.</a>
									    <a class="dropdown-item 23">Yes, they don't support me.</a>
									  </div>
								</div>

		
								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Have you previously had sexual eductation?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item 31">No</a>
									   <a class="dropdown-item 32" >Yes</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  What's your ethnicity?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item 41">Asian</a>
									   <a class="dropdown-item 42">White</a>
									   <a class="dropdown-item 43">Black</a>
									   <a class="dropdown-item 44">Hispanic</a>
									   <a class="dropdown-item 45">Prefer not to disclose</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 	Do you have anyone supports you?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item 51">No</a>
									   <a class="dropdown-item 52">Yes</a>
									 </div>
								</div>

								<div class="dropdown" style="margin-bottom: 0.43cm;">
									 <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 	Have you considered about coming out?
									 </button>
									 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									   <a class="dropdown-item 61">No</a>
									   <a class="dropdown-item 62">Yes</a>
									 </div>
								</div>

								<div class="form-group">
									<label for="password">
										Password
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>


								<div class="form-group m-0">
									<button type="submit" name="submit" class="btn btn-primary btn-block">
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

	<script type="text/javascript" defer>
			var all = document.querySelectorAll(".dropdown-item")
			for (var i = all.length - 1; i >= 0; i--) {
				all[i].addEventListener("click",function(e){
					str = e.target.className;
					str = str.substring(str.indexOf(' ')+1);

					var input = document.createElement('input');
					input.name = "q"+str.substr(0,1);
					input.setAttribute("value",str);
					input.hidden = "true";

					document.getElementById('myform').appendChild(input);
				})
			}
		
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
