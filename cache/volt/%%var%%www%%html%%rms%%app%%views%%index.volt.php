<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $this->tag->getTitle(); ?>

<link href="http://localhost/rms/public/css/bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/rms/public/css/datepicker3.css" rel="stylesheet">
<link href="http://localhost/rms/public/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="http://localhost/rms/public/js/html5shiv.js"></script>
<script src="http://localhost/rms/public/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
<?php echo $this->getContent(); ?>
<script src="http://localhost/rms/public/js/jquery-1.11.1.min.js"></script>
	<script src="http://localhost/rms/public/js/bootstrap.min.js"></script>
	<script src="http://localhost/rms/public/js/chart.min.js"></script>
	<script src="http://localhost/rms/public/js/chart-data.js"></script>
	<script src="http://localhost/rms/public/js/easypiechart.js"></script>
	<script src="http://localhost/rms/public/js/easypiechart-data.js"></script>
	<script src="http://localhost/rms/public/js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>
</html>

