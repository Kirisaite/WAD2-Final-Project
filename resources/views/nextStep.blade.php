<!DOCTYPE html>
<html>
<head>
	<title>Step Two</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/Animeinfo.css">
<body class="body">
<form method="POST" action="/picUpload" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="holder">
	<table class="table2">
		<tr>
			
			<input type="text" name="name">
			<input type="file" name="image">
		</tr>
	</table>
	<button type="submit">Post</button></a>
</div>
</form>
</body>
</html>