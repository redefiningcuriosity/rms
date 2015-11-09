<?php echo $this->getContent(); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Menu-Add</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Menu-Add</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Item</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="http://localhost/rms/menu/index">

								<div class="form-group">
									<label>Item Name</label>
									<input class="form-control" name="name" value="">
								</div>
								<div class="form-group">
									<label>Item Price</label>
									<input class="form-control" name="price" value="">
								</div>
								<div class="form-group">
									<label>Item Type</label>
									<select class="form-control" name="type">
										<option value="Starter" >Starter</option>
										<option value="Main Course" >Main Course</option>
										<option value="Desserts">Desserts</option>
										<option value="Beverages">Beverages</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item SubType</label>
									<select class="form-control" name="stype">
										<option value="Indian">Indian</option>
										<option value="Chineese">Chineese</option>
										<option value="Italian">Italian</option>
										<option value="Continental" >Continental</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item Category</label>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="Veg">Vegeterian
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="NonVeg">Non Vegeterian
										</label>
									</div>
								</div>
								<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit Button</button>
								</div>
