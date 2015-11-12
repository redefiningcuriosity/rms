{{ content() }}
<style>
#hoverid:hover {background-color: #EEE;}
</style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">View Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Message</h1>
			</div>
		</div><!--/.row-->

				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Customer Message</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name"> Customer Name</label>
									<div class="col-md-9">
									<input id="name" name="name" class="form-control" type="text" value="{{ name1.u_fname }} " readonly>
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Customer E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" class="form-control" type="text" value="{{ q.co_email }}" readonly>
									</div>
								</div>

								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Reason</label>
									<div class="col-md-9">
										<input name="reason" class="form-control" type="text" value="{{ q.co_reason }}" readonly>
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Customer message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" rows="5" readonly>{{ q.co_message }}</textarea>
									</div>
								</div>
								
							</fieldset>
						</form>
					</div>
				</div>
				
				
