@extends('layouts.app')

@section('content')
<body>
<a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

    <table border="1">
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>user</td>
        </tr>

        @foreach($kategoriGaleri as $item)

        <tr>
            <td>{!! $item->id !!}</td>
        <td>{!! $item->nama !!}</td>
            <td>{!! $item->users_id !!}</td>
            <td><a href="{!! route('kategori_galeri.show', [$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
            <a href="{!! route('kategori_galeri.edit', [$item->id]) !!}" class="btn btn-sm btn-warning">Ubah</a>
            {!! Form::open(['route'=> ['kategori_galeri.destroy', $item->id], 'method'=>'delete'])!!}
                                    {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger', 'on-click'=>"return confirm('yakin?')"]); !!}
                                {!! Form::close() !!}
        </tr>
        @endforeach
    </table>
</body>
@endsection