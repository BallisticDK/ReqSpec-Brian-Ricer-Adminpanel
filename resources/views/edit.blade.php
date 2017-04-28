<!DOCTYPE html>
<html>
<head>
	<title>Update dat user</title>
</head>
<body>


<form method="POST" action="{{ route('updateUser', ['id' => $user->id])}}">
	<input type="text" name="name" value="{{ $user->name }}">
	<input type="email" name="email" value="{{ $user->email }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
</form>
</body>
</html>