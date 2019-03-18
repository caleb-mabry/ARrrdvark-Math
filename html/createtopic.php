<?php
session_start();
include ('dbconnect.php');
include ('header.php');
?>
<body>
	<div id="particles-js"></div>
	<div class="container">
		<div class="row" style="padding-top: 10%">
			<div class="col-4">
			</div>
			<div class="col-4">
				<form>
					<div class="form-group">
						<label for="titleOfTopic">Topic Title</label>
						<input type="text" class="form-control" id="titleOfTopic">
					</div>
					<div class="form-group">
						<label for="textOfTopic">What's going on?</label>
						<textarea class="form-control id="textOfTopic" rows="3"></textarea>
					</div>
				</form>
			</div>
			<div class="col-3">
			</div>
		</div>
	</div>
</body>
</html>