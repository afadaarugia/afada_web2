@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                <div class="card">
                    
                    <table class ="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">judul</th>
                            <th scope="col">isi</th>
                            <th scope="col">users id</th>
                            <th scope="col">kategori artikel id</th>
                            <th scope="col">opsi</th>
                        </tr>
                    </thead>

        @foreach($artikel as $item)
                <tbody>
                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                        <td><a href="{!! route('artikel.show', [$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
                        <a href="{!! route('artikel.edit', [$item->id]) !!}" class="btn btn-sm btn-warning">Ubah</a>
                        {!! Form::open(['route'=> ['artikel.destroy', $item->id], 'method'=>'delete'])!!}
                                    {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger', 'on-click'=>"return confirm('yakin?');"]) !!}
                                {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
        @endforeach
    </table>
    </div>
    </div>
    </div>
    </div>
@endsection