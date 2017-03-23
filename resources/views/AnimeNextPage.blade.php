<!DOCTYPE html>
<html>
<head>
	<title>AnimeInfo.Broker</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/Animeinfo.css">
<body>
 {{ csrf_field() }}
<header>
	<h1>Animeinfo.Broker</h1>
</header>
<div class="holder1">
<table id="table3">
	<tr>
		<td>
			<div id="pic2">
				<img src="{{ asset($japananimations->image) }}" id="imgBig">
			</div>
		</td>
		<td>
			<div id="addinfo">
			<p style="text-align: left; font-size: 20px;"><b>Description<a href="/edit/{{$japananimations->id}}"><p style="text-align: right;">Edit</p></a></b></p>
			<hr>
			<p style="text-align: left;">{{$japananimations->description}}</p>
			
			<p style="text-align: left; font-size: 20px;"><b>Background</b></p>
			<hr>
			<p style="text-align: left;">{{$japananimations->background}}</p>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div id="addinfo1" style="text-align: left;">
				<p>TITLE: {{$japananimations->aName}}</p>
				<p>GENRE: {{$japananimations->genre}}</p>
				<p>STUDIO: {{$japananimations->studio}}</p>
				<p>SEASON AIRED: {{$japananimations->seasonAired}}</p>
				<p>DATE AIRED: {{$japananimations->dateAired}}</p>
				<p>Episodes: {{$japananimations->numberOfEp}}</p>
				<p>STATUS: {{$japananimations->status}}</p>
			</div>
		</td>
	</tr>
	<a href="/back"><button>Go Back</button></a>
	<a href="/video/{{ $japananimations->id }}"><button>Watch Trailer</button></a>
</table>
</div>
</body>
</html>
