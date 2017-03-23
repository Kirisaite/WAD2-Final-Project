<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/Animeinfo.css">
<body>
{{csrf_field()}}
<header>
	<h1>Animeinfo.Broker</h1>
</header>
<div class="holder1">
	<h1>My Anime List</h1><br>
		<table id="tableHolder">
		<tr>
			<th> </th>
			<th>Title</th>
			<th>Genre</th>
			<th>Studio</th>
			<th>Aired</th>
			<th>Year</th>
			<th>Episodes</th>
			<th>Status</th>
		</tr>
		@foreach($japananimations as $japananimation)
			<tr>
				<td>
					<div id="pic">
						<img src="{{ asset($japananimation->image) }}" id="imgSmall">
					</div></a>
				</td>
				<td>
					<h3>{{ $japananimation->aName }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->genre }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->studio }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->seasonAired }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->dateAired }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->numberOfEp }}</h3>
				</td>
				<td>
					<h3>{{ $japananimation->status }}</h3>
				</td>
				<td>
					<a href="/next/{{ $japananimation->id }}" style="text-decoration: none;"><div id="next">View More</div></a>
				</td>
			</tr>
		@endforeach
		</table>

	<a href="/Animeinfo"><button type="submit">Add New Anime</button></a>
</div>
</body>
</html>