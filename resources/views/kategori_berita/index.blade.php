@extends('layouts.app')

@section('content')
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>user</td>
        </tr>

        @foreach($kategoriBerita as $item)

        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->nama !!}</td>
            <td>{!! $item->users_id !!}</td>
        </tr>
        @endforeach
    </table>
</body>
@endsection