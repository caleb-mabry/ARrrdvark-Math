<!DOCTYPE html>
<html>
<head>

  	<!-- script for the moving background -->
  	<script type="text/javascript" src="particles.js"></script>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">

<title>ARdvark Learning | <?php echo $title; ?></title>

<!-- Link to our stylesheet DO NOT MOVE -->
<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<a class="navbar-brand" href="index.php">ARdvark Learning</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="howto.php">How To</a>
			</li>
			<li class ="nav-item">
				<a class="nav-link" href="forum.php">Forum</a>
			</li>
		</ul>
		<ul class="navbar-nav mr-right">
			<li class="nav-item">
        <?php if(!isset($_SESSION['loginEmail'])): ?>
				<a class="nav-link" href="login.php">Login</a>
        <?php else: ?>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php endif ?>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.php">Sign Up</a>
			</li>
		</ul>
	</div>
</nav>
