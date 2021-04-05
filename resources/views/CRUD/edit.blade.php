<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<h3>Edit Nama Lu Ndro!</h3>
	<form action="{{url('/pertanyaan').'/'.$data->id}}" method="POST">
		@csrf
		<input type="text" name="data" value="{{$data->pertanyaan}}" placeholder ="Nama lo siapa?"> <br><br>
		<input type="submit" value="Save">
	</form>
		
</body>
</html>