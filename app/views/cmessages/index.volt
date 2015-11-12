{{ content() }}
<style>
#hoverid:hover {background-color: #EEE;}
</style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div><!--/.row-->

		<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active col-lg-6"><a href="#tab1" data-toggle="tab">Unresolved Messages</a></li>
							<li class="col-lg-6"><a href="#tab2" data-toggle="tab">Resolved Messages</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Ticket Number</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User email</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User Reason</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User Message</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Action</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for msg in umsg %}
										<tr>
											<td>{{ msg.co_id }}</td>
											<td>{{ msg.u_fname }}</td>
											<td>{{ msg.co_email }}</td>
											<td>{{ msg.co_reason }}</td>
											<td>{{ msg.co_messgage }}</td>
											<td>{{ link_to('cmessages/reply/' ~msg.co_id, '<span class="glyphicon glyphicon-pencil"></span>', 'onclick': 'return confirm("Do you want to proceed to reply this message?")') }}</td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="tab2">
								<table class="table table-hover">
									<thead>
									<tr>
										<th><div class="th-inner ">Ticket Number</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User email</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User Reason</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">User Message</div><div class="fht-cell"></div></th>
										<th><div class="th-inner ">Action</div><div class="fht-cell"></div></th>
									</tr>
									</thead>
									<tbody>
									{% for msg in rmsg %}
										<tr onclick="window.document.location='http://localhost/rms/cmessages/view/{{ msg.co_id }}';">
											<td>{{ msg.co_id }}</td>
											<td>{{ msg.u_fname }}</td>
											<td>{{ msg.co_email }}</td>
											<td>{{ msg.co_reason }}</td>
											<td>{{ msg.co_messgage }}</td>
											<td> Resolved </td>
										</tr>
									{% endfor %}
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		
