<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>

<form action="{{ route('storeUser') }}" method="POST">
	<input type="text" name="name">
	<input type="email" name="email">
	<input type="password" name="password">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" value="submit">
</form>


</body>
</html>