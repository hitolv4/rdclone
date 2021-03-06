<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rd-Clon</title>
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<h1>
					<a href="{{route('posts_path')}}">Rd-Clon</a>

					<small class="pull-right">
						<a href="{{route('create_post_path')}}">Crear Post</a>
					</small>
				</h1>

				
			</div>

		</div>

		<hr>

		@include('layouts._errors')
		@include('layouts._messages')
		@yield('content')

		<hr>
		
	</div>
	
</body>
</html>