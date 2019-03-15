<?php 
$title="Sign Up";
include 'header.php';
?>
<body class="moving-backgrounds">
	<div id="particles-js"></div>
	<div class="container-fluid">
		<span class="text-center1 text-center" style="color: white;"><h2 style="font-family: vanillaregular">Your Learning Experience Starts <b>NOW</b></h2></span>
		<div class="container-fluid" style="font-family: vanillaregular;"style="font-family: vanillaregular;> 
			<div class="row">
				<div class="col-sm">
				</div>
				<div class="col-md">
					<div class="row" style="padding-top: 10%; color: white" >
						
						<div class="col rounded" style="background-color: #323E78; padding-top: 5%">
							<form method="post" action="signupUser.php">
								<!-- Display validation errors here -->
								<div class="form-group">
									<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" required="required">
								</div>
								<div class="form-group">
									<input type="text" class="form-control"  name="firstName" aria-describedby="firstName" placeholder="First Name" required="required">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="lastName" aria-describedby="lastName" placeholder="Last Name" required="required">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" aria-describedby="password" placeholder="Password" required="required">
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="emailAgree" value="" id="defaultCheck1">
									<label class="form-check-label" for="defaultCheck1">
										I <b>want</b> to recieve e-mails regarding updates or new products
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="termsAgree" value="" id="defaultCheck1" required="required">
									<label class="form-check-label" for="defaultCheck1">
										I Agree to the 
										<!-- Button trigger modal -->
										<a href="#" data-toggle="modal" data-target="#exampleModal">
											terms of service
										</a>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Terms of Service</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body" style="color: black">
														<h1>Terms of Service ("Terms")</h1>


														<p>Last updated: February 11, 2019</p>


														<p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the https://ardvarklearning.net/ website (the "Service") operated by Ardvark Learning ("us", "we", or "our").</p>

														<p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>

														<p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms of Service agreement  for Ardvark Learning has been created with the help of <a href="https://termsfeed.com/">TermsFeed</a>.</p>


														<h2>Accounts</h2>

														<p>When you create an account with us, you must provide us information that is accurate, complete, and current at all times. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account on our Service.</p>

														<p>You are responsible for safeguarding the password that you use to access the Service and for any activities or actions under your password, whether your password is with our Service or a third-party service.</p>

														<p>You agree not to disclose your password to any third party. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.</p>


														<h2>Links To Other Web Sites</h2>

														<p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Ardvark Learning.</p>

														<p>Ardvark Learning has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Ardvark Learning shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

														<p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>


														<h2>Termination</h2>

														<p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

														<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

														<p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>

														<p>Upon termination, your right to use the Service will immediately cease. If you wish to terminate your account, you may simply discontinue using the Service.</p>

														<p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>


														<h2>Governing Law</h2>

														<p>These Terms shall be governed and construed in accordance with the laws of Virginia, United States, without regard to its conflict of law provisions.</p>

														<p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>


														<h2>Changes</h2>

														<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>

														<p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>


														<h2>Contact Us</h2>

														<p>If you have any questions about these Terms, please contact us.</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										Policy
									</label>
								</div>
								<br>
								<div class="form-group text-center-button">
									<button class="btn btn-primary" type="submit" name="signup">Sign Up</button>
								</div>
							</form>
							

						</div>
					</div>
				</div>
				<div class="col-sm">
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

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
