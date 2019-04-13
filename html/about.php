<?php
session_start();
$title="About Us";
include 'header.php';
?>
<div id="particles-js"></div>

<div class="parallax"></div>
<br>
<div  class="container-fluid">
<div class="row">
	<div class="col-4"><img src="CMPhoto.png" class="img-fluid" alt="Photo of Caleb"></div>
	
	<div class="col"><h3 style="color: white">Caleb is the main web developer for the project Ardvark Math. For the past couple of years, Caleb has been working
	to create responsive websites that provide users with an unparalled experience. This website was built using HTML5, CSS3, PHP7, and sprinkles of (not so wonderful) javascript. After graduation, Caleb will be working as a PHP developer and hopes to expand the usability of Ardvark Math. I love to work on side projects and help those who are looking to learn more. You can reach out to me at caleb.mabry.15@cnu.edu.</h3></div>
</div>
<br>
<div class="row">
	<div class="col-4"><img src="CCPhoto.jpg" class="img-fluid" alt="Photo of Cameron"></div>
		<div class="col"><h3 style="color: white">Cameron is the lead application developer for the project Ardvark Math. Cam has been spending most of his time learning new techniques in Unity and C# to further improve the app's overall function and quality.
		He hopes to continue to create new content and applications with ARdvark Learning and Caleb. After graduating this year, Cam plans on finding a company where he can continue to help others and enjoy doing it.</h3></div>
</div>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
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

