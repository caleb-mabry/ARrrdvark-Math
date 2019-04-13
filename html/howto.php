<?php
session_start();
$title="How To";
include'header.php';
?>
<body>
<div id="particles-js"></div>
<div class="container">
	<div class="row">
		<div class="fixed noShowMobile">
<ul class="nav flex-column" >
  <li class="nav-item">
    <a class="nav-link active" href="#top">Get Started</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#top">Image Targets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#need_to_know">Need to Know</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#main_menu">Main Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#geo">Geometry</a>
  </li>
</ul>
</div>
<!-- All of the information that will be stored in the navigation -->
<div class="col" style="color:white;margin-right:0;padding-left:10%;margin-left:5%;">
	<h3 class="text-center">Getting Started</h3>
	<p>In order to use ARdvark Learning, you must first have a device that has a camera. Without a camera, your device will not be able to recognize any
	   of the image targets. Below, we have provided a link to download the Android .apk so that you may download the application before it goes public on the
	   Google Play Store.</p>
	<br>
	<div class="text-center"><button type="button" class="btn btn-success">Android Download</button></div>
	<br>
	<h3 class="text-center" id="need_to_know">Image Targets</h3>
	<p>Image targets are used to bring our equations to life. You can download all of ARdvark Learnings image targets below and print them off. In order to have you camera recognize
	   the image targets best, please be aware that cameras do not like glossy surfaces. Some camera resolutions are higher than others so you might have to point your phone directly
	   at the image target.</p>
	<form action="ImageTargets.pdf" class="text-center"  method="get">
	<button type="submit" class="btn btn-success">Image Targets</button>
	</form>
	<br>
	<h3 class="text-center">What You Should Know</h3>
	<p>ARdvark Math can aid any student to study general math concepts in a fun and engaging way with augmented reality. There are 5 categories that you can test your knowledge in, each category having 3 different difficulties.
	With 15 different randomly generated equations to test your knowledge, there are plenty of concepts to practice. The 5 categories that are currently available
	to be practiced are: Vectors, Numbers(General Arithmetic), Algebra, Fractions, Geometry. There are Image Targets for each of these categories, including the numgers 0-9, arithemtic operators, and a "Dropdown Equation" Image Target. When you select your difficulty in the main menu, your camera will appear with our overlay. To practice a specific
	category, you must place the corresponding Image Target in front of the camera for ARdvark Math to superimpose a practice problem overtop the Image Target. For example,
	if someone were to practice their algebra skills, they would simply need to place select "Algebra" from the dropdown menu and put the Algebra Image Target in front of the camera, like so (Show Screenshot of this).
	To try and solve the equation, you must use the numpad on the image to input your answer, then press the Enter button. The display will change to either "CORRECT" or "TRY AGAIN",
	indicating if you were able to guess the correct answer. You're always welcome to try as many times as you would like.<br> To get a new set of numbers for a new equation, hit the Refresh button and it will reset the variables in the equation and provide a new equation.</p>
	<br>
	<h3 class="text-center">Our Main Menu</h3>
	<br>
	<div class="col-md-8 offset-md-2"><img src="Pictures/menuSS.png" class="img-fluid" alt="MainMenu ScreenShot"></div>
	<br>
	<p id="geo">Our main menu will allow you to navigate to the different difficulties of each category, and the Number's Sandbox(more about <font color="blue"> Number's Sandbox</font>).
	Other things you can find on our homepage are our <a style="color:#EAC117" href="javascript:window.open('contactInfo.html', 'Contact Information', 'width=500,height=500');">
	Contact Information</a> and <a style="color:#EAC117" href="javascript:window.open('privacyPolicy.html', 'privacyPolicy', 'width=500,height=500');">
	Privacy Policy</a>, which are available by clicking the "Info" button, located at the top right of the Menu screen.</p>
	<br>
	<h3 class="text-center">Geometry</h3>
	<br>
	<div class="col-md-8 offset-md-2"><img src="Pictures/InterGeoSS.png" class="img-fluid" alt="InterGeometry ScreenShot"></div>
	<br>
	<p>The geometry category will test your ability to substitue values into a formula and manipulate variables. Under the easy difficulty, you can practice finding the angle to a triangle.
	You will have to find the volume of a sphere the surface area to a section of a cylinder in the intermediate and hard difficulties of the geometry category, respectively.</p>
</div>



	</div>
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

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active-sidebar");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>

</html>
