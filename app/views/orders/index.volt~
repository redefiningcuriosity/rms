{{ content() }}
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Orders</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">All Orders</h1>
			</div>
		</div><!--/.row-->
		<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active col-lg-6"><a href="#tab1" data-toggle="tab">Undelivered Orders</a></li>
							<li class="col-lg-6"><a href="#tab2" data-toggle="tab">Delivered Orders</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Order id</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Date</div><div class="fht-cell"></div></th>
										<th><div class="th-inner"> Transaction Id</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Payment Method</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Delivery</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Action</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for order in undelivered %}
										<tr>
											<td>{{ order.o_id }}</td>
											<td>{{ order.o_price }}</td>
											<td>{{ order.o_date }}</td>
											<td>{{ order.o_transaction }}</td>
											<td>{{ order.o_payment }}</td>
											<td>Undelivered</td>
											<td>{{ link_to('orders/update/' ~order.o_id, '<span class="glyphicon glyphicon-check"></span>', 'onclick': 'return confirm("Change Order status as delivered??")') }}</td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="tab2">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Order id</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Price</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Date</div><div class="fht-cell"></div></th>
										<th><div class="th-inner"> Transaction Id</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Payment Method</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Order Delivery</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for order in delivered %}
										<tr>
											<td>{{ order.o_id }}</td>
											<td>{{ order.o_price }}</td>
											<td>{{ order.o_date }}</td>
											<td>{{ order.o_transaction }}</td>
											<td>{{ order.o_payment }}</td>
											<td>Delivered</td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		
