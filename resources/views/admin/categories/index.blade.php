@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1>
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
                <a class="btn btn-success  mb-3" href="{{ route('admin.lines.create') }}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div class="card">

                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @stop

    @section('css')

    @stop


    @section('plugins.Datatables', true)

    @section('js')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('js/datatable-config.js') }}"></script>
    @stop
