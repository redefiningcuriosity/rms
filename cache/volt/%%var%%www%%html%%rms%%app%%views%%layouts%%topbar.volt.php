	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin"><span>Admin</span> Panel</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $name; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="adminprofile"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
			<li <?php if ($conname == 'Admin') { ?> class="active" <?php } ?>><a href="admin"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li <?php if ($conname == 'Menu') { ?> class="active" <?php } ?>><a href="menu"><span class="glyphicon glyphicon-th"></span> Menu</a></li>
			<li <?php if ($conname == 'Orders') { ?> class="active" <?php } ?>><a href="orders"><span class="glyphicon glyphicon-list-alt"></span> Orders</a></li>
			<li <?php if ($conname == 'Sales') { ?> class="active" <?php } ?>><a href="sales"><span class="glyphicon glyphicon-stats"></span> Sales</a></li>
			<li <?php if ($conname == 'Messages') { ?> class="active" <?php } ?>><a href="cmessages"><span class="glyphicon glyphicon-pencil"></span> Messages</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->
<?php echo $this->getContent(); ?>
