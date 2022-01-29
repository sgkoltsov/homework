
<!doctype html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	   
	    <title>Blog Template</title>

	    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

	    

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<meta name="theme-color" content="#7952b3">   
	  
	    <!-- Custom styles for this template -->
	    <link href="/css/style.css" rel="stylesheet">
	</head>
	<body> 

		@include('layout.header')  

		<main class="container">
			<div class="row g-5">
				@yield('content')		    	
		    </div>
		</main>

		@include('layout.footer')    
	</body>
</html>
