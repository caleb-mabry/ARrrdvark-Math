<?php
$title="About Us";
include 'header.php';
?>


<body>
	<div id="particles-js"></div>
	<div class="container-fluid ">
		<div class="row">
			<div class="col">
				<!-- Used as Spacing -->
			</div>
			<div class="col-8">
				<img class="rounded img-fluid" src="togetherness.jpeg" alt="Cameron and Caleb, founders of ARdvark Learning">
			</div>
			<div class="col">
				<!-- Used as Spacing -->
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<!-- Used as Spacing -->
			</div>
			<div class="col-6 text-center rounded formattingAboutDescText">
				<img src="CCPhoto.jpg" class="rounded img-fluid" style="width: 500px; height: 500px">
				<br><br>
				<h4>Cameron Carlson</h4>
				<h5>The lead candy</h5>
				<h5>Cam is a sucker for a good piece of candy, but when he's full, he's ready for an even better piece of candy. While laying awake at night, some of his most reoccurring thoughts are: If the Earth is flat and there are ice walls surrounding the edges, why haven't we flown over them? Will Elon Musk actually make it possible to live on Mars in my lifetime? Why can I never plug in my USB on the first try? Minds like his will end up saving the ecosystem, and end world hunger.
				</h5>

			</div>
			<div class="col">
				<!-- Used as Spacing -->
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col">
				<!-- Used as Spacing -->
			</div>
			<div class="col-6 text-center rounded formattingAboutDescText">
				<img src="CMPhoto.png" class="rounded img-fluid">
				<br><br>
				<h4>Caleb Mabry</h4> 
				<h5>The lead lint</h5>
				<br>
				<h5>
					Caleb's favorite hobbies include: collecting belly button lint, timing the local bus routes, staring at Richmond's light polluted sky and kicking dirt on peoples shoes. When he isn't doing these things, he's most likely reading about how to become a better programmer and wheat penny enthusiast.
				</h5>
			</div>
			<div class="col">
				<!-- Used as Spacing -->
			</div>
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

