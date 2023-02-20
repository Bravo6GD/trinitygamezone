<html>
<head></head>
<body>
<button><a href="{{url('/create')}}">Create</a></button>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
</thead>
<tbody>
    @foreach($student as $student)
        <tr>
            <td> {{$student->username}} </td>
            <td>{{$student->email}}</td>
            <td><img src="{{asset('storage/image/'.$student->image)}}"></td>
            <td> <a href="{{url('/edit/'.$student->id)}}"> Edit</a></td>
            <td> <a href="{{url('/delete/'.$student->id)}}"> Delete</a></td>
        </tr>
    @endforeach
</tbody>
</table>
</body>
</html>
