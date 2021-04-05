<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
    <a href="{{url('/pertanyaan/create')}}">Tambahin boy</a>
    <table>
    <tr>
        <th>Pertanyaan</th>
    </tr>
    @foreach($quest as $key)
    <tr>
        <td>{{$key->pertanyaan}}</td>
        <td>
        <a href="{{url('/pertanyaan').'/'.$key->id}}">Show boy</a>
        <a href="{{url('/pertanyaan/edit').'/'.$key->id}}">edit bro</a>
        <a href="{{url('/pertanyaan/delete').'/'.$key->id}}">Delete bro</a>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>