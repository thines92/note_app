<?php 

	include "templates/header.php";
	include "assets/php/signup.php";

 ?>


	<section id="signup-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>Sign Up</h1>

					<?php echo $error; ?>

					<div class="col-sm-8 col-sm-offset-2">

						<form method="post">
							<div class="form-group">
								<input type="email" name="email" class="form-control" id="signup-email" placeholder="Enter your email address" required="true">
							</div><!-- email -->

							<div class="form-group">
								<input type="email" name="email" class="form-control" id="signup-email-validate" placeholder="Re-enter your email address" required="true">
							</div><!-- email check -->

							<div class="form-group">
								<input type="password" name="password" class="form-control" id="signup-password" placeholder="Enter a password" required="true">
							</div><!-- password -->

							<div class="form-group">
								<input type="password" name="password" class="form-control" id="signup-password-validate" placeholder="Re-enter a password" required="true">
							</div><!-- password check -->

							<a href="index.php" class="btn btn-success">
								Back
							</a>

							<input type="submit" name="submit" value="Sign up" class="btn btn-success" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include "templates/footer.php"; ?>