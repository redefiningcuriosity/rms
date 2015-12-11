{{ content() }}
<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign up</div>
				<div class="panel-body">
					<form role="form" method="post" action="http://localhost/rms/signup">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter your first name" name="fname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter your last name" name="lname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter your e-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter your phone number" name="phno" type="numeric" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter password" name="pass" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Confirm password" name="cpass" type="password" autofocus="">
							</div>
							
							<input type="submit" value="Sign Up" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
