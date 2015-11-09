<?php echo $this->getContent(); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Menu-Edit</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Menu-Edit</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Item</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="http://localhost/rms/menu/update">
							<input type="hidden" name="mid" value="<?php echo $menu->m_id; ?>">
								<div class="form-group">
									<label>Item Name</label>
									<input class="form-control" name="name" value="<?php echo $menu->m_name; ?>">
								</div>
								<div class="form-group">
									<label>Item Price</label>
									<input class="form-control" name="price" value="<?php echo $menu->m_price; ?>">
								</div>
								<div class="form-group">
									<label>Item Type</label>
									<select class="form-control" name="type">
										<option value="Starter" <?php if ($menu->m_type == 'Starter') { ?> selected <?php } ?>>Starter</option>
										<option value="Main Course" <?php if ($menu->m_type == 'Main Course') { ?> selected <?php } ?>>Main Course</option>
										<option value="Desserts" <?php if ($menu->m_type == 'Desserts') { ?> selected <?php } ?>>Desserts</option>
										<option value="Beverages" <?php if ($menu->m_type == 'Beverages') { ?> selected <?php } ?>>Beverages</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item SubType</label>
									<select class="form-control" name="stype">
										<option value="Indian" <?php if ($menu->m_subtype == 'Indian') { ?> selected <?php } ?>>Indian</option>
										<option value="Chineese" <?php if ($menu->m_subtype == 'Chineese') { ?> selected <?php } ?>>Chineese</option>
										<option value="Italian" <?php if ($menu->m_subtype == 'Italian') { ?> selected <?php } ?>>Italian</option>
										<option value="Continental" <?php if ($menu->m_subtype == 'Continental') { ?> selected <?php } ?>>Continental</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item Category</label>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="Veg"<?php if ($menu->m_category == 'Veg') { ?> checked <?php } ?>>Vegeterian
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="NonVeg" <?php if ($menu->m_category == 'NonVeg') { ?> checked <?php } ?>>Non Vegeterian
										</label>
									</div>
								</div>
								<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit Button</button>
								</div>
