<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
	<style type="text/css">
	body{
		background-color: black;
		font-family: cursive;
	}
		#holder{
			border:1px solid white;
			float:center;
			margin-top: 3em;
			margin-right: auto;
			margin-left: auto;
			width: 20em;
			height: 22em;
			border-top-left-radius: 2em; 
			border-bottom-right-radius: 2em; 
		}
		table{
			float: center;
			margin-right: auto;
			margin-left: auto;
			margin-top:2em;
		}
		td{
			border:solid black 1px;
			margin: 7em;
		}
		p{
			color: white;
			text-align: center;
			font-size: 60px;
		}
		button{
			font-family: cursive;
			margin-left: 8.7em;
			margin-top: 2em;
			width: 7em;
			height: 3em;
			border-radius: 1.5em;
			color: white;
			background-color: black;
		}
		button:hover{
			opacity: .5;
			color: white;
			background-color: black;
		}
		input{
			border-radius: 2em;
			font-family: cursive;
		}
	</style>
</head>
<body>
<p>Edit</p>
<div id="holder">
	<form method="POST" action="/saveEdit">
		{{csrf_field()}}
		<table>
			<tr>	
				<input type="text" name="id" value="{{$student->id}}" hidden="true" >
			</tr>
			<tr>
				<td >
					<input type="text" name="idnum" value="{{$student->idnum}}" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="fname" value="{{$student->fname}}" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="mname" value="{{$student->mname}}" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="lname" value="{{$student->lname}}" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="course" value="{{$student->course}}" >
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="contactnum" value="{{$student->contactnum}}">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="guardian" value="{{$student->guardian}}">
				</td>
			</tr>
		</table>
		<button type="submit">Update</button>
	</form>
</div>
</body>
</html>
