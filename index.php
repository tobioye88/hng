<html>
<head>
	<meta charset="UTF-8">
	<title>MyBetapalce</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:900|Roboto" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="nav container d-flex">
			<div class="logo-group d-flex">
				<div class="logo bg-primary"><img class="d-block" src="assets/imgs/logo.png" alt="mybetapalce logo" height="70"></div>
				<div class="name y-center px-2">mybetaplace.com</div>
			</div>
			<div class="nav-links ml-auto y-center">
				<ul class="unstyled inline">
					<li class="px-1">Register</li>
					<li class="px-1">Contact</li>
					<li class="px-1">Login</li>
					<li class="text-primary"><?=Date('h:m:s a')?></li>
				</ul>
			</div>
		</nav>
	</header>
	<section class="bg-main">
		<div class="container py-4">
			<h1 class="text-dl text-white bigbold">find<br>apartments<br>quick and easy</h1>
			<p class="text-white py-2">mybetapalce.com</p>
			<div class="myselect">
				<select name="" id="">
					<option value="">Select Your School</option>
					<option value="FUTA">FUTA</option>
				</select><button class="btn btn-primary">Go!</button>
			</div>
		</div>
	</section>
</body>
</html>