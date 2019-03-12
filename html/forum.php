<?php
include('db-connect.php');
session_start();
ini_set('display_errors', 1);
if(isset($_SESSION['loginEmail'])) {
  $query = "SELECT firstName,lastName 
  FROM users
  WHERE email = '{$_SESSION['loginEmail']}'";
  $result = mysqli_query($conn,$query);
  while($row=$result->fetch_assoc()) {
  echo "Welcome ".$row["firstName"].$row["lastName"];
}
}

else {
    header("Location: https://ardvarklearning.net/forumnotloggedin.php");
}
?>

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


<title>ARdvark Learning | Forum</title>

<!-- Link to our stylesheet DO NOT MOVE -->
<link rel="stylesheet" href="stylesheet.css">

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
	<a class="navbar-brand" href="index.html">ARdvark Learning</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.html">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="howto.html">How To</a>
			</li>
			<li class ="nav-item active">
				<a class="nav-link" href="forum.php">Forum</a>
			</li>
		</ul>
		<ul class="navbar-nav mr-right">
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.php">Sign Up</a>
			</li>
		</ul>
	</div>
</nav>
    <body>
    <div id="particles-js"></div>
      <div class="row">
        <div class="col text-center">
        <h1> You are logged in </h1>
      </div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js">
</script>

<script>
  particlesJS("particles-js", {
    particles: {
      number: { value: 110, density: { enable: true, value_area: 800 } },
      color: { value: "#afb63e" },
      shape: {
        type: "star",
        stroke: { width: 0, color: "#000000" },
        polygon: { nb_sides: 5 },
        image: { src: "img/github.svg", width: 100, height: 100 }
      },
      opacity: {
        value: 0.5,
        random: false,
        anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false }
      },
      size: {
        value: 3,
        random: false,
        anim: { enable: false, speed: 40, size_min: 0.1, sync: false }
      },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#28219b",
        opacity: 0.4,
        width: 1
      },
      move: {
        enable: true,
        speed: 0.75,
        direction: "bottom",
        random: false,
        straight: false,
        out_mode: "bounce",
        bounce: false,
        attract: { enable: false, rotateX: 600, rotateY: 1200 }
      }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: false, mode: "repulse" },
        onclick: { enable: true, mode: "push" },
        resize: true
      },
      modes: {
        grab: { distance: 400, line_linked: { opacity: 1 } },
        bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
        repulse: { distance: 200, duration: 0.4 },
        push: { particles_nb: 4 },
        remove: { particles_nb: 2 }
      }
    },
    retina_detect: true
  });

  requestAnimationFrame(update);
</script>

</body>

</html>
