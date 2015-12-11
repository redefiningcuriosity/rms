<?php echo $this->getContent(); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profile</h1>
			</div>
		</div><!--/.row-->
	
		
				<div class="panel panel-default">
					<?php echo $this->flash->output(); ?>
					<div class="panel-body">
						<form class="form-horizontal" action="http://localhost/rms/profile/update" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">First Name</label>
									<div class="col-md-9">
									<input id="fname" name="fname" value= "<?php echo $user->u_fname; ?>" class="form-control" type="text">
									</div>
								</div>

								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Last Name</label>
									<div class="col-md-9">
									<input id="lname" name="lname" value= "<?php echo $user->u_lname; ?>" class="form-control" type="text">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" value= "<?php echo $user->u_email; ?>" class="form-control" type="text" readonly>
									</div>
								</div>

								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your Phone</label>
									<div class="col-md-9">
										<input id="phno" name="phno" value= "<?php echo $user->u_phno; ?>" class="form-control" type="text">
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Update</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			
</div>
