<!DOCTYPE html>
<html lang="en">

  <head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Missão emprego para todos</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

	<!-- Custom styles for this template
	<link href="css/modern-business.css" rel="stylesheet"> -->

	<!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	
    	/* GLOBAL STYLES
		-------------------------------------------------- */
		/* Padding below the footer and lighter body text */

		html,
		body {
		    height: 100%;
		}

		body {
		    padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}

		body{
			font-family: Open Sans;
		}

		.img-portfolio {
		    margin-bottom: 30px;
		}

		.img-hover:hover {
		    opacity: 0.8;
		}

		/* Home Page Carousel */

		header.carousel {
		    height: 50%;
		}

		header.carousel .item,
		header.carousel .item.active,
		header.carousel .carousel-inner {
		    height: 100%;
		}

		header.carousel .fill {
		    width: 100%;
		    height: 100%;
		    background-position: center;
		    background-size: cover;
		}

		/* 404 Page Styles */

		.error-404 {
		    font-size: 100px;
		}

		/* Pricing Page Styles */

		.price {
		    display: block;
		    font-size: 50px;
		    line-height: 50px;
		}

		.price sup {
		    top: -20px;
		    left: 2px;
		    font-size: 20px;
		}

		.period {
		    display: block;
		    font-style: italic;
		}

		/* Footer Styles */

		footer {
		    margin: 50px 0;
		}

		/* Responsive Styles */

		@media(max-width:991px) {
		    .customer-img,
		    .img-related {
		        margin-bottom: 30px;
		    }
		}

		@media(max-width:767px) {
		    .img-portfolio {
		        margin-bottom: 15px;
		    }

		    header.carousel .carousel {
		        height: 70%;
		    }
		}
    </style>

  </head>

  <body>


  	<header class="row">
        @include('partials._navigation')
    </header>
    
    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('partials._footer')
    </footer>



	<!-- Bootstrap core JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>

</html>