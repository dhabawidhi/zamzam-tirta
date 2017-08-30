<!DOCTYPE html>
<html>
<head>
<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="css/jquery-ui.css">
<!-- Twitter Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

	<title></title>
</head>
<body>
<style type="text/css">
	body{

		font-size: 12px;
	}
</style>

<input class="form-control" type='text' id='datepicker' placeholder='Select date' />

<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$('#datepicker').datepicker({ minDate: 0 });
</script>
</body>

</html>