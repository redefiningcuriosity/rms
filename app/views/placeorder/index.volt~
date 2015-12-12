<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Place Order</li>
			</ol>
		</div><!--/.row-->
		<form action="http://localhost/rms/placeorder/review" method="POST">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Place an Order</h1>
			</div>
			
		</div><!--/.row-->
		<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active col-lg-6"><a href="#tab1" data-toggle="tab">Vegetarian Menu</a></li>
							<li class="col-lg-6"><a href="#tab2" data-toggle="tab">Non Vegetarian menu</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Select</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Type</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Subtype</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Quantity</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for veg in vegmenu %}
										<tr>
											<td><?php echo Phalcon\Tag::checkField(array("item[]", "value" => "$veg->m_id")); ?></td>
											<td>{{ veg.m_name }}</td>
											<td>{{ veg.m_price }}</td>
											<td>{{ veg.m_type }}</td>
											<td>{{ veg.m_subtype }}</td>
											<td><input type="number" min="1" value="1" name="quantity{{ veg.m_id }}"></td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="tab2">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Select</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Type</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Subtype</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Quantity</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for veg in nvegmenu %}
										<tr>
											<td><?php echo Phalcon\Tag::checkField(array("item[]", "value" => "$veg->m_id")); ?></td>
											<td>{{ veg.m_name }}</td>
											<td>{{ veg.m_price }}</td>
											<td>{{ veg.m_type }}</td>
											<td>{{ veg.m_subtype }}</td>
											<td><input type="number" min="1" value="1" name="quantity{{ veg.m_id }}"></td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			
		<div class="row">
			<div class="col-lg-12" style=" text-align: right">
				<input type="Submit" class="btn btn-primary" value="Proceed to Review Order">
			</div>
		</div>
		</div><!--/.col-->
		</form>
