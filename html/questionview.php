<?php
session_start();
$title = "Post View";
include('db-connect.php');
include('header.php');

?>
<body>
	  <div id="particles-js"></div>
<div class="row"style="padding-top: 10%;">
	<div class="col-2">
	</div>
	<div class="col-8">
		<?php
		$id = $_GET['id'];
		$query = "SELECT * FROM posts WHERE post_id=$id";
		$result = $conn->query($query);
		if ($row=$result->fetch_assoc()) {
			echo "<div class='row' style='font-family: vanillaregular'>";
			echo "<div class='col rounded' style='background-color:white'>";
			echo "Topic: &nbsp" . $row['post_title'];
			echo "<br><br>";
			echo "What's happening: " .$row['post_content'];
			echo "<div class='text-right'>";
			echo "Reply | Delete";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "<br></a>";
			}
	
else { echo "no";
}
?>
	</div>
	<div class="col-2">
	</div>
</div>
	
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js">
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
