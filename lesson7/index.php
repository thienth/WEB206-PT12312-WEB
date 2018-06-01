<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<form id="pForm">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="cfpassword" class="form-control">
			</div>
			<div class="text-center">
				<button class="btn btn-primary" type="submit">Register</button>
			</div>
			
		</form>
	</div>




<!-- 	<div class="progress">
		<div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
	</div> -->
	<!-- <div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Dropdown button
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div> -->

	<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://i.ytimg.com/vi/-7tqLY42GBc/hqdefault.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://znews-photo-td.zadn.vn/w660/Uploaded/spuouu2/2016_07_12/Larry.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="http://khohinhnen.com/wp-content/uploads/2014/08/hinh-nen-meo-con-de-thuong-18.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->

	<!-- <button class="btn btn-sm btn-primary" onclick="$('#myModal').modal({show: true, backdrop: 'static'})">Show modal</button>
	<div class="modal" tabindex="-1" role="dialog" id="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div> -->
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/vendor/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js-validate/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js-validate/additional-methods.min.js"></script>
	<script type="text/javascript" src="lodash/lodash.js"></script>

	<script type="text/javascript">
		async function getData(){
			await fetch('data.php')
			.then((result) => result.json())
			.then((rs) => {
				console.log(rs);
			});
		}
		var rsx = 

		console.log(rsx);

		console.log('something');

		// var _ = require('lodash');
		// _.forEach([1, 2], function(value) {
		//   console.log(value);
		// });
		// $('#pForm').validate({
		// 	rules: {
		// 		username: {
		// 			required: true,
		// 			maxlength: 20
		// 		},
		// 		email: {
		// 			required: true,
		// 			email: true
		// 		}
		// 	},
		// 	messages:{
		// 		username: {
		// 			required: 'Vui lòng nhập username',
		// 			maxlength: 'Độ dài không được vượt quá 20 ký tự'
		// 		},
		// 	}
		// });
	</script>
	<style type="text/css">
		label.error{
			color: red;
		}
	</style>
</body>
</html>