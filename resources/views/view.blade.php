<h1>Information</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>PASSWORD</td>
        <td>Created_at</td>
        <td>Updated_at</td>
        <td>Action</td>
      
</tr>
 @foreach($user as $users)
<tr>
    
        <td>{{ $users->id}}</td>
        <td>{{ $users->name}}</td>
        <td>{{ $users->email}}</td>
        <td>{{ $users->password}}</td>
        <td>{{ $users->created_at}}</td>
        <td>{{ $users->updated_at}}</td>
        <td align='center'><a style='text-decoration:none;' href="{{ url('delete')}}">X</a></td>
</tr>
@endforeach 
</table>

<a href="{{ url('/')}}">Click to go back</a>