<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
    <?php echo $css; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<title>ELEVATE Indonesia : Content Management System</title>
	<style type="text/css">
	.cms_footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 30px;
		background: black;
		color: white;
		margin-top: 30px;
		display: flex;
		justify-content: center;
		align-items: center;
		font-family: Arial,Helvetica,sans-serif;
	}
	</style>
	<script>
	function showModal() {
		$('#myModal').modal();
	}

	function goTo(category) {
		window.location.href = "http://localhost/elevate/index.php/cms?category=" + category;
	}
	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">CMS</a>
		    </div>
    		<ul class="nav navbar-nav navbar-right">
      			<li onclick="showModal()" class="navbar-brand" id="mouse"><span class="glyphicon glyphicon-log-in"></span> Login</li>
    		</ul>
  		</div>
	</nav>
	<div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h4 class="modal-title">Modal Header</h4>
      			</div>
      			<div class="modal-body">
        			<p>Some text in the modal.</p>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      			</div>
    		</div>
  		</div>
	</div>
	<div class="container">
		<div class="grid" onclick="goTo('women')">
			Women
		</div>
		<div class="grid" onclick="goTo('accessory')">
			Accessories
		</div>
		<div class="grid" onclick="goTo('men')">
			Men
		</div>
		<div class="grid" onclick="goTo('footwear')">
			Footwear
		</div>
		<div class="grid" onclick="goTo('kids')">
			Kids
		</div>
		<div class="grid" onclick="goTo('others')">
			Others
        </div>
	</div>
	<div class="cms_footer">
        Copyright Elevate - 2019
    </div>
</body>
</html>