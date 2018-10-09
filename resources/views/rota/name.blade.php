<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Rota - Name</title>
  </head>
  <body>
    <div class="container">
    	<!-- for each -->
    	@foreach ($data as $shift)   
    	<div class="row d-flex justify-content-center">
	        <div class="card" style="width: 100%;">
			  <div class="card-body">
			    <h5 class="card-title">{{$shift->person}}</h5>
			    <p class="card-text">
			    	{{$shift->date}}<br>
			    	{{$shift->start}} - {{$shift->finish}}<br> 
		            @if ($shift->room_id == 7)
		                {{$shift->other_text}}<br>
		            @else
		                {{$shift->room_id}}<br>
		            @endif
			    </p>
			    <!-- <a href="#" class="card-link">Who's on my shift?</a> -->
			  </div>
			</div>
		</div>
        @endforeach   

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>