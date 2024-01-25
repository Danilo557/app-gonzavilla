@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>SubCategories</h1>

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
                <a class="btn btn-success  mb-3" href="{{ route('admin.subcategories.create') }}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div class="card">

                <div class="card-body">

                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Categorie</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $subcategory)
                                <tr>
                                    <td>
                                        {{ $subcategory->name }}
                                    </td>
                                    <td>
                                        {{ $subcategory->category->name }}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.subcategories.edit', $subcategory) }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('admin.subcategories.destroy', $subcategory) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-lg btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('plugins.Datatables', true)

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/datatable-config.js') }}"></script>
@stop
