<?php echo $this->getContent(); ?>

<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Reset Password</div>
				
				<div class="panel-body">
				<?php if ($ur1 == $ur2) { ?>
					<form role="form" method="post" action="http://localhost/rms/forgotpassword/update">
						<fieldset>
							
							<div class="form-group">
								<input class="form-control" type="hidden" name="email" value="<?php echo $email; ?>">
							</div>
							<div class="form-group">
								<input class="form-control" type="hidden" name="reset" value="<?php echo $ur1; ?>">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="newpass" placeholder="Enter new pass">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="cpass" placeholder="Confirm new pass">
							</div>
							
							
							<input type="submit" value="submit" class="btn btn-primary">
							
						</fieldset>
<?php } else { ?>
	Wrong email. Please reset again.
<?php } ?>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
