{{ content() }}
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
							<input type="hidden" name="mid" value="{{ menu.m_id }}">
								<div class="form-group">
									<label>Item Name</label>
									<input class="form-control" name="name" value="{{ menu.m_name }}">
								</div>
								<div class="form-group">
									<label>Item Price</label>
									<input class="form-control" name="price" value="{{ menu.m_price }}">
								</div>
								<div class="form-group">
									<label>Item Type</label>
									<select class="form-control" name="type">
										<option value="Starter" {% if menu.m_type=="Starter" %} selected {% endif %}>Starter</option>
										<option value="Main Course" {% if menu.m_type=="Main Course" %} selected {% endif %}>Main Course</option>
										<option value="Desserts" {% if menu.m_type=="Desserts" %} selected {% endif %}>Desserts</option>
										<option value="Beverages" {% if menu.m_type=="Beverages" %} selected {% endif %}>Beverages</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item SubType</label>
									<select class="form-control" name="stype">
										<option value="Indian" {% if menu.m_subtype=="Indian" %} selected {% endif %}>Indian</option>
										<option value="Chineese" {% if menu.m_subtype=="Chineese" %} selected {% endif %}>Chineese</option>
										<option value="Italian" {% if menu.m_subtype=="Italian" %} selected {% endif %}>Italian</option>
										<option value="Continental" {% if menu.m_subtype=="Continental" %} selected {% endif %}>Continental</option>
									</select>
								</div>
								<div class="form-group">
									<label>Item Category</label>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="Veg"{% if menu.m_category=="Veg" %} checked {% endif %}>Vegeterian
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="category" value="NonVeg" {% if menu.m_category=="NonVeg" %} checked {% endif %}>Non Vegeterian
										</label>
									</div>
								</div>
								<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit Button</button>
								</div>
