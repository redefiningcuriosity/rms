	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://localhost/rms/dashboard"><span>RMS</span> Panel</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://localhost/rms/profile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="http://localhost/rms/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li {% if conname=="Dashboard" %} class="active" {% endif %}><a href="http://localhost/rms/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li {% if conname=="Cmenu" %} class="active" {% endif %}><a href="http://localhost/rms/cmenu"><span class="glyphicon glyphicon-th"></span> Menu</a></li>
			<li {% if conname=="Orders" %} class="active" {% endif %}><a href="http://localhost/rms/corders"><span class="glyphicon glyphicon-list-alt"></span> Orders</a></li>
			<li {% if conname=="Contact" %} class="active" {% endif %}><a href="http://localhost/rms/contact"><span class="glyphicon glyphicon-pencil"></span> Contact Us </a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->
{{ content() }}
