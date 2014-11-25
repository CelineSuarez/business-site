@extends('layouts.default')
@section('content')
	
@stop	

	<style>
		body 	{ padding-bottom:40px; padding-top:40px; }
	</style>
</head>
<body class="container">

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-flash"></span> Questions?  Contact Us!</h1>
		</div>	

		<!-- FORM STARTS HERE -->
		<form method="POST" action="/contact_request" novalidate>

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" class="form-control" name="name" placeholder="Goku">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control" name="email" placeholder="supersaiyan@example.com">
			</div>

			<div class="form-group">
				<label for="comments">Comments</label>
				<input type="textarea" id="comments" class="form-control" name="comments">
			</div>

			
			<button type="submit" class="btn btn-success">Send</button>

		</form>

	</div>
</div>