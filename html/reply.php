<?php
session_start();
$title = "Reply";
include('db-connect.php');
include('header.php');
$id = $_GET['id'];
?>

<body>
	<div id="particles-js"></div>
	<div class="container">
		<div class="row" style="padding-top: 10%; font-family: vanillaregular;">
			<div class="col-4">
			</div>
			<div class="col-4 rounded" style="background-color: #323E78;">
				<br>
				<?php echo "<form method='post' action='replyaction.php?id=$id'>";
?>
					<div class="form-group">
						<label for="replyToTopic">What's going on?</label>
						<textarea class="form-control" name="replyToTopic" rows="3" required></textarea>
					</div>
					  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
				<br>
			</div>
			<div class="col-3">
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
</body>
</html>
