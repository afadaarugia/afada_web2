@extends('layouts.app')

@section('content')
<body>
<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>keterangan</td>
            <td>path</td>
            <td>Opsi</td>
            
        </tr>

        @foreach($galeri as $item)

        <tr>
            <td>{!! $item->id !!}</td>
            <td>{!! $item->nama !!}</td>
            <td>{!! $item->keterangan !!}</td>
            <td>{!! $item->path !!}</td>
            <td><button type="submit" class="btn btn-primary">{{ __('Ubah') }}</button></td>
            <td><button type="submit" class="btn btn-primary">{{ __('Hapus') }}</button></td>
            {!! Form::open(['route'=> ['galeri.destroy', $item->id], 'method'=>'delete'])!!}
                                    {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger', 'on-click'=>"return confirm('yakin?');"]) !!}
                                {!! Form::close() !!}
        </tr>
        @endforeach
    </table>
</body>
@endsection