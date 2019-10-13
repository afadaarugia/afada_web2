@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>

                    <table border="1">
                        <tr>
                            <td>id</td>
                            <td>nama</td>
                            <td>user</td>
                            <th scope="col">opsi</th>

                        </tr>

                        @foreach($kategoriArtikel as $item)

                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td>
                             <a href="{!! route('kategori_artikel.show', [$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
                            <a href="{!! route('kategori_artikel.edit', [$item->id]) !!}" class="btn btn-sm btn-warning">Ubah
                                {!! Form::open(['route'=> ['kategori_artikel.destroy', $item->id], 'method'=>'delete'])!!}
                                    {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger', 'on-click'=>"return confirm('yakin?');"]) !!}
                                {!! Form::close() !!}
                            

                        </tr>
                        @endforeach
                    </table>
@endsection