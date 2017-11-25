<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('tittle')</title>

        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="/css/responsive.css" rel="stylesheet" type="text/css">
		<link href="/css/animate.css" rel="stylesheet" type="text/css">
		<link href="/css/estilos.css" rel="stylesheet" type="text/css">
		<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

		<script type="text/javascript" src="/js/jquery.1.8.3.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.js"></script>
		<script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
		<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="/js/jquery.isotope.js"></script>
		<script type="text/javascript" src="/js/wow.js"></script>
		<script type="text/javascript" src="/js/classie.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    	<div class='container-fluid'>
    		@if ($errors->any())
    			<div class="alert alert-danger">
    				<strong>Error</strong> {{ $errors->first()}}
    			</div>
    		@endif
    		@if (session('success'))
    			<div class="alert alert-success">
    				<strong>Correcto</strong> {{ session('success') }}
    			</div>
    		@endif
            @yield('content')
        </div> 
    </body>
</html>