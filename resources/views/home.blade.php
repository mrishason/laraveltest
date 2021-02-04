
<table>
    @foreach($foods as $food)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$food->name }}</td>
        <td>{{$food->description}}</td>
        <td>{{$food->created_at}}</td>
    </tr>
    @endforeach
</table>