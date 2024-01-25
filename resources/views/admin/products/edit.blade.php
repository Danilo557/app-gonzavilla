@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit product</h1>
@stop

@section('content')
    <div class="container">

        @if (session('info'))
            <div class="alert alert-success mt-2" role="alert">
                {{ session('info') }}
            </div>
        @endif
        <div class="d-flex flex-column">
            <div>
                <a class="btn btn-primary  mb-3" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    {{-- Habilita el envio de archivos --}}
                    {!! Form::model($product, [
                        'route' => ['admin.products.update', $product],
                        'method' => 'PUT',
                        'autocomplete' => 'off',
                        'files' => true,
                    ]) !!}
                    @include('admin.products.partials.form')
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop
@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/slugify.js') }}"></script>
    <script src="{{ asset('js/ckeditor-config.js') }}"></script>


    <script>
        $('#slug').slugify('#name');

        $('.js-example-basic-multiple').select2({
            ajax: {
                url: "{{ route('sizes.select2') }}",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        //Variable de url
                        term: params.term
                    }
                },
                processResults: function(data) {
                    return {
                        results: data
                    }
                }
            }
        });
    </script>
@stop
