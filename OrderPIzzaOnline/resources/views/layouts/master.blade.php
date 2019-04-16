<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
  <link rel="icon" href="/storage/images/logo2.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" media="screen" />

  <link rel="stylesheet"  href="{{ URL::to ('css/app.css') }}">

	@yield('styles')

</head>

<body>

<div class="container">

@include('partials.header')

@yield('content')


<footer>
         <div class="line">            
               <a class="center" >© 2017 Pizza Roko - Sva prava pridržana.</a>          
         </div>
      </footer>
</div>

<script src="/assets/js/roko.js"></script>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@yield('scripts')
</body>

</html>