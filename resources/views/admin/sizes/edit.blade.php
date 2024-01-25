@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Size</h1>
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
                <a class="btn btn-primary  mb-3" href="{{ route('admin.sizes.index') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    {{-- Habilita el envio de archivos --}}
                    {!! Form::model($size, [
                        'route' => ['admin.sizes.update', $size],
                        'method' => 'PUT',
                        'autocomplete' => 'off',
                        'files' => true,
                    ]) !!}
                    @include('admin.sizes.partials.form')
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@stop

@section('js')
    <script src="{{ asset('js/slugify.js') }}"></script>

    <script>
        $('#slug').slugify('#name');
    </script>
@stop