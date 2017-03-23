<!DOCTYPE html>
<html>
<head>
	<title>Add Anime Step 1</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/Animeinfo.css">
<body class="body">
<form method="POST" action="/push" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="holder">
	<table class="table2">
		<tr>
			<td>
				<input type="text" name="aName" placeholder="Title">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="genre" placeholder="Genre">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="studio" placeholder="Studio">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="numberOfEp" placeholder="Number of Episode">
			</td>
		</tr>
		<tr>
			<td>
				<input type="number" name="dateAired" placeholder="Date Aired">
			</td>
		</tr>
		<tr>
			<td>
				<p>Season Aired:</p>
				<input type="radio" value="Spring" name="seasonAired">Spring<br>
				<input type="radio" value="Summer" name="seasonAired">Summer<br>
				<input type="radio" value="Fall" name="seasonAired">Fall<br>
				<input type="radio" value="Winter" name="seasonAired">Winter<br>
			</td>
		</tr>
		<tr>
			<td>
				<p>Status:</p>
				<input type="radio" name="status" value="Airing">Airing<br>
				<input type="radio" name="status" value="Finished">Finished Airing<br>
			</td>
		</tr>
		<table class="table2">
			<tr>
				<td>
					<p>Synopsis:</p>
					<textarea name="description"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<p>Background:</p>
					<textarea name="background"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Cover Photo: 
					<input type="file" name="image">
				</td>
			</tr>
		</table>
		<button style="margin-left: 23vw;" type="submit">Post</button>
	</table>
</div>
</form>
</body>
</html>