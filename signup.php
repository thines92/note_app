<?php include "templates/header.php" ?>


	<section id="signup-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>Sign Up</h1>

					<div class="col-sm-8 col-sm-offset-2">
						<form method="post">
							<div class="form-group">
								<input type="email" class="form-control" id="signup-email" placeholder="Enter your email address" required="true">
							</div><!-- email -->

							<div class="form-group">
								<input type="email" class="form-control" id="signup-email-validate" placeholder="Re-enter your email address" required="true">
							</div><!-- email check -->

							<div class="form-group">
								<input type="password" class="form-control" id="signup-password" placeholder="Enter a password" required="true">
							</div><!-- password -->

							<div class="form-group">
								<input type="password" class="form-control" id="signup-password-validate" placeholder="Re-enter a password" required="true">
							</div>

							<button type="submit" class="btn btn-success">
								Sign Up
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include "templates/footer.php" ?>