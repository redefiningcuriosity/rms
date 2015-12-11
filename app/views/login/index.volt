{{ content() }}
<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				{{ flash.output() }}
				<div class="panel-heading">Log In</div>
				
				<div class="panel-body">
					<form role="form" method="post" action="login/start">
						<fieldset>
							
							<div class="form-group">
								<input class="form-control" placeholder="Enter your e-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Enter password" name="pass" type="password" value="">
							</div>
							<div class="form-group">
							<a href="http://localhost/rms/forgotpassword"> Forgot Password </a>
							</div>
							<input type="submit" value="Log in" class="btn btn-primary">
							
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
