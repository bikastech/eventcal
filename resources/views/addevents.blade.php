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
    <div class="container">
	  <h2>Vertical (basic) form</h2>
	  <form method="POST" action="{{ action('EventController@store') }}">
	  	{{ csrf_field() }}
	    <div class="form-group">
	      <label for="email">Enter Name of Event:</label>
	      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
	    </div>
	    <div class="form-group">
	      <label for="email">Enter Color</label>
	      <input type="color" class="form-control" id="color" placeholder="Enter title" name="color">
	    </div>
	    <div class="form-group">
	      <label for="email">Start Date</label>
	      <input type="date" class="form-control" id="start_date" placeholder="Enter Start Date" name="start_date">
	    </div>

	    <div class="form-group">
	      <label for="email">End Date</label>
	      <input type="date" class="form-control" id="end_date" placeholder="Enter End Date" name="end_date">
	    </div>
	    
	    <button type="submit" class="btn btn-default">Submit</button>
	  </form>
	</div>

</body>
</html>

