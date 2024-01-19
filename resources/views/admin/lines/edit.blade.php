@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Line</h1>
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
                    {{-- Habilita el envio de archivos --}}
                    {!! Form::model($line, [
                        'route' => ['admin.lines.update', $line],
                        'method' => 'PUT',
                        'autocomplete' => 'off',
                        'files' => true,
                    ]) !!}
                    @include('admin.lines.partials.form')
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css"
        integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"
        integrity="sha512-TjBzDQIDnc6pWyeM1bhMnDxtWH0QpOXMcVooglXrali/Tj7W569/wd4E8EDjk1CwOAOPSJon1VfcEt1BI4xIrA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js"
        integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/slugify.js') }}"></script>
    <script src="{{ asset('js/images.js') }}"></script>

    <script>
        $('#slug').slugify('#name');

        var url_get_images = "{{ route('admin.lines.images',$line) }}";
        var url_domain = "{{ Request::root() }}";

        var url_delete_image= url_domain + "/admin/lines/removeimage/";

        Dropzone.options.myGreatDropzone = { // camelized version of the `id`
            //Token CSRF
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            //Mensaje default
            dictDefaultMessage: 'Arrastre una imagen al recuadro',
            acceptedFiles: 'image/*',
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            complete: function(file) {
                //Remueve(visualmente) del formulario la imagen despues de cargada
                this.removeFile(file)
            },
            queuecomplete: function() {
                //Livewire.emit('refreshProduct');
                dropz.get_images();
                console.log("archivo subido");
            }

        };
    </script>
@stop
