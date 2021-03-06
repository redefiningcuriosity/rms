<?php echo $this->getContent(); ?>
<style>
#hoverid:hover {background-color: #EEE;}
</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Contact</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Contact Us</h1>
			</div>
		</div><!--/.row-->	
	<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				
			</div>
			<div class="col-xs-24 col-md-12 col-lg-6"  >
				<a href="http://localhost/rms/placeorder">
				<div class="panel panel-blue panel-widget" >
					<div class="row no-padding" id="hoverid">
						<div class="col-sm-2 col-lg-2 widget-left">
							<em class="glyphicon glyphicon-shopping-cart glyphicon-l"></em>
						</div>
						<div class="col-sm-16 col-lg-10 widget-right"  id="hoverid">
							<div class="large">Hungry kya?</div>
							<div class="text-muted">Place a new order.</div>
						</div>
					</div>
				
				</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3"></div>
		</div><!--/.row-->
	
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Contact Form</div>
					<div class="panel-body">
						<?php echo $this->flash->output(); ?>
						<form class="form-horizontal" action="http://localhost/rms/contact/index" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Select the reason of your Query</label>
									<div class="col-md-9">
									<select class="form-control" name="reason">
									    <option value="">Please select one</option>
									    <option value="Order Related Query">Order Related Query</option>
									    <option value="Reservation of Tables">Reservation of Tables</option>
									    <option value="Bug fixes">Bug fixes/Website query</option>
									</select>
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" placeholder="Your email" class="form-control" type="text">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				</div>
				
			
