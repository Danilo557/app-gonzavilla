@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Line</h1>
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
                <a class="btn btn-primary  mb-3" href="{{ route('admin.lines.index') }}">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    {!!Form::open(['route'=>'admin.lines.store','autocomplete'=>'off','files'=>true])!!}
                    @include('admin.lines.partials.form')
                    {!!Form::submit('crear',['class'=>'btn btn-primary btn-lg'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
        
    </div>
@stop

@section('css')

@stop

@section('js')
    <script src="{{ asset('js/slugify.js') }}"></script>

    <script>
        $('#slug').slugify('#name');
    </script>
@stop
