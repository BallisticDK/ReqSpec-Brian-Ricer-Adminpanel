<!DOCTYPE html>
<html>
<head>
	<title>Admin - Panel</title>

	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>

<div id="tempbox">
	<a href="{{ route('createUser') }}">MAke New Ussder</a>

</div>


<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
 

@foreach($users as $user)
	<tr>
		<td>{{$user->id}}</td>
		<td>{{$user->name}}</td>
		<td>
			<form method="POST" action="{{ route('deleteUser', ['id' => $user->id]) }}">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE">
				<input type=submit class="btn btn-danger btn-sm" role="button" value="Delete">
			</form>
		</td>
		<td><a href="{{route('editUser', ['id' => $user->id])}}">Update dat shit</a></td>
	</tr>
@endforeach

 
</table>


</body>
</html>