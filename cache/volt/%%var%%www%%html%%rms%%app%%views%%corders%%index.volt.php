<?php echo $this->getContent(); ?>
<style>
#hoverid:hover {background-color: #EEE;}
</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Orders</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Past Orders</h1>
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
			<div class="col-xs-12 col-md-6 col-lg-3">
		</div><!--/.row-->
		<div class="col-lg-12">
			<table class="table table-hover">
				<thead>
					<tr>
					<th><div class="th-inner ">Order Number</div><div class="fht-cell"></div></th>
					<th><div class="th-inner ">Date</div><div class="fht-cell"></div></th>
					<th><div class="th-inner ">Price</div><div class="fht-cell"></div></th>
					<th><div class="th-inner ">Transaction ID</div><div class="fht-cell"></div></th>
					<th><div class="th-inner ">Payment Method</div><div class="fht-cell"></div></th>
					<th><div class="th-inner ">Delivery status</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
