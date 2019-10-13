@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah berita</div>

                    <div class="card-body">
                    {!! Form::open (['route'=> 'artikel.store', 'method'=>'post']) !!}
                            @include('berita.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
 $(document).ready(function() {
    CKEDITOR.replace('isi');
});
</script>
@endsection