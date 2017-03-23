<!DOCTYPE html>
<html>
<head>
	<title>Watch Trailer</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/Animeinfo.css">
<body>
{{csrf_field()}}
<header>
	<h1>Animeinfo.Broker</h1>
</header>
<div class="holder1">
	<div id="videoSpace">
	</div>
	<div id="video">
			
	</div>
	<h2>Trailer of: {{ $japananimations->aName }}</h2><br>
	<a href="/tBack/{{ $japananimations->id }}"><button>Go Back</button></a>
</div>
</body>
</html>