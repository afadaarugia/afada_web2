@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                <div class="card">
                    <table border="1">
                        <tr>
                            <td>id</td>
                            <td>judul</td>
                            <td>isi</td>
                            <td>users_id</td>
                            <td>Opsi</td>
                        </tr>

                        @foreach($berita as $item)

                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            <td><button type="submit" class="btn btn-primary">{{ __('Ubah') }}</button></td>
                             <td><button type="submit" class="btn btn-primary">{{ __('Hapus') }}</button></td>
                             {!! Form::open(['route'=> ['berita.destroy', $item->id], 'method'=>'delete'])!!}
                                    {!! Form::submit('hapus', ['class'=>'btn btn-sm btn-danger', 'on-click'=>"return confirm('yakin?');"]) !!}
                                {!! Form::close() !!}
                            
                        </tr>
                        @endforeach
                    </table>

@endsection