<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


    <style>
        /* ... */
    </style>
</head>
<body>
	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<div class="alert alert-danger">
			  <strong>Success!</strong> {{$error}}.
			</div>
		@endforeach
	@endif

	@if(\Session::has('success'))
		<div class="alert alert-success">
		  <strong>Success!</strong> {{\Session::get('success')}}.
		</div>
	@endif
	<a href="/addeventurl" type="button" class="btn btn-success">Add Event</a>
	<a href="/editevents" type="button" class="btn btn-primary">Edit Event</a>
	<a href="/deleteeventurl" type="button" class="btn btn-danger">Delete Event</a>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
</body>
</html>