<!DOCTYPE HTML>
<html  lang="en" >
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		admin dashboard
 	</title>
     <link rel="stylesheet" href="{{ asset('css/index.css') }}">
 	 <!-- Bootstrap css -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <!-- fontawesome -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
    <header>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="text-align:center; color:green;margin-top:10px;">
                <h3> Admin panel </h3>
            </div>
        </div>
    </header>

    
@yield('content')

  <!-- tags for bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
   
   <footer id='footer'>
 	<div >
            <div style="text-align: center;color: #007bff ;">
                  <h2> &copy; Admin panel {{date('Y')}}  </h2>	       		 		
            </div>	
	 </div>
    </footer>
</body>
</html>


     