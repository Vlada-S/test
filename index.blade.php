<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>

<body>
<h2>Select video to play</h2>
<form action="{{route('showvideo')}}" method="post">
{!! csrf_field() !!}
<select name="vfile">

<option value="">Select video</option>
@foreach($files as $f)
		<option value="{{$f}}">{{$f}}</option>
@endforeach
</select>

<input type="submit" value="Show" class="btn btn-success">
</form>
</body>
</html>
