{{ content() }}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Menu</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Menu</h1>
			</div>
			<div class="col-lg-6" style=" text-align: right">
				<h1><a class="btn btn-primary" href="http://localhost/rms/menu/add">Add Item</a></h1>
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
										<th><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Type</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Subtype</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Category</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Action</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for veg in vegmenu %}
										<tr>
											<td>{{ veg.m_name }}</td>
											<td>{{ veg.m_price }}</td>
											<td>{{ veg.m_type }}</td>
											<td>{{ veg.m_subtype }}</td>
											<td>{{ veg.m_category }}</td>
											<td>{{ link_to('menu/edit/' ~veg.m_id, '<span class="glyphicon glyphicon-pencil"></span>', 'onclick': 'return confirm("Do you want to proceed to edit this item?")') }}&nbsp;&nbsp;&nbsp;{{ link_to('menu/delete/' ~veg.m_id, '<span class="glyphicon glyphicon-remove"></span>', 'onclick': 'return confirm("Do you want to proceed to delete this item?")') }}</td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="tab2">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Item Name</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Type</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Subtype</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Item Category</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Action</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for veg in nvegmenu %}
										<tr>
											<td>{{ veg.m_name }}</td>
											<td>{{ veg.m_price }}</td>
											<td>{{ veg.m_type }}</td>
											<td>{{ veg.m_subtype }}</td>
											<td>{{ veg.m_category }}</td>
											<td>{{ link_to('menu/edit/' ~veg.m_id, '<span class="glyphicon glyphicon-pencil"></span>', 'onclick': 'return confirm("Do you want to proceed to edit this item?")') }}&nbsp;&nbsp;&nbsp;{{ link_to('menu/delete/' ~veg.m_id, '<span class="glyphicon glyphicon-remove"></span>', 'onclick': 'return confirm("Do you want to proceed to delete this item?")') }}</td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		
