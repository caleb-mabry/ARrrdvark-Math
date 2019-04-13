<?php
session_start();
$title = "Home";
include('header.php');
?>
<div class="landingPageBackground">
<div class="container-fluid">
	<div class="row text-center">
		<div class="col-4 improveContrast noShowMobile" >
<br>
			<div class="flip-card center noShowMobile">
				  <div class="flip-card-inner noShowMobile">
    					<div class="flip-card-front">
<br>
      						<h1>See what others have to say!</h1>
   					 </div>
    					<div class="flip-card-back">
      					<h1>Amazing.</h1>
      					<p>"Its incredible to think that technology has come so far so fast. ARdvark Math is an example of just how far technology can go within the classroom"</p> 
					<small>Jessica Frydl</small>
    					</div>
  				</div>
			</div>
<br>
	                <div class="flip-card center">
  				<div class="flip-card-inner">
    					<div class="flip-card-front">
	<br>     					
	 <h1>See what others have to say!</h1>
   					 </div>
  					  <div class="flip-card-back">
      					<h1>One of a kind</h1>
      					<p>"This is unlike any application that I have ever experienced. I cannot wait to see where this application will be a few years from now!"</p>
					<small>Caleb Mabry</small>
    					</div>
 				 </div>
			</div>
		</div>
		<div class="col-4">
		<img src="../Pictures/Archie2.png" class="img-fluid" alt="Logo of Archie the ARdvark">
		<h1>ARdvark Math</h1>
		</div>
	<div class="col-4 improveContrast noShowMobile">
		<h1 class="moveDown">Together, we can create a better world that is focused on the children of tomorrow. Join us in our journey to help students worldwide.</h1>
	</div>
	</div>
</div>

</div>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->

			<script>
				$(document).ready(function(){
				$("#fromTheTop").animate({marginTop:"7%",marginLeft:"8%"});;
				});
			</script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
			</body>
		</html>
