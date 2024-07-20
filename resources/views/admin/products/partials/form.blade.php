@if (Request::routeIs('admin.products.edit'))
    <div class="row mb-3">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            @if ($product->image)
                <img id="preview" class="img-fluid" src="{{ asset('/storage/' . $product->image_url) }}" height="400px"
                    width="100%">
                    @else
                    <img id="preview" class="img-fluid" src="{{$product->image_url }}" height="400px"
                    width="100%">

            @endif


        </div>
        <div class="col-md-6">
            <div class="custom-file">

                {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label', 'accept' => 'image/*']) !!}
                {!! Form::file('image', null, ['class' => 'custom-file-input', 'placeholder' => 'Choose file']) !!}

                @error('image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
@endif


<div class="form-group">
    {!! Form::label('name', 'Título', []) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Título']) !!}
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', []) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('line_id', 'Line') !!}
    {!! Form::select('line_id', $lines, null, ['class' => 'form-control', 'placeholder' => 'Line']) !!}
    @error('line_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Description', []) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('ingredients', 'Ingredients', []) !!}
    {!! Form::textarea('ingredients', null, ['class' => 'form-control']) !!}
    @error('ingredients')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('suggested_use', 'Suggested Use', []) !!}
    {!! Form::textarea('suggested_use', null, ['class' => 'form-control']) !!}
    @error('suggested_use')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Categoría']) !!}
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('subcategory_id', 'Sub Categoría') !!}
    {!! Form::select('subcategory_id', $subcategories, null, [
        'class' => 'form-control',
        'placeholder' => 'Subcategory',
    ]) !!}
    @error('subcategory_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>




<div class="form-group">
    {!! Form::label('feature_id', 'Feature') !!}
    {!! Form::select('feature_id', $features, null, [
        'class' => 'form-control',
        'placeholder' => 'Feature',
    ]) !!}
    @error('feature_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('sizes', 'Sizes') !!}
    <select class="js-example-basic-multiple w-100" name="sizes[]" multiple="multiple">
        @foreach ($sizes as $size)
            <option value="{{ $size->id }}" @selected($product_size->contains($size))> {{ $size->unit }}</option>
        @endforeach
    </select>

</div>


@if (Request::routeIs('admin.products.edit'))
    <div class="form-group">
        <div class="card">

            <div class="card-body">
                <h2>Nutrition Information Table</h2>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-add-nutri mb-3" data-toggle="modal"
                    data-target="#exampleModal">
                    Nuevo
                </button>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Percentage</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="body_nutrition_information_table">



                    </tbody>
                </table>


            </div>
        </div>



    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nutrimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div>
                        <div class="form-group">
                            <label>Nutrimento</label>
                            <select id="nutrition_selected" class="custom-select custom-select mb-3">
                                <option selected value="" disabled>Seleccione una opcion</option>
                                @foreach ($nutrition_list as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="basic-url">Porcentaje</label>
                            <div class="input-group mb-3">

                                <input id="nutrition_persentage" type="number" min="0" max="100"
                                    class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-primary btn-agregar-nutrimento">Agregar </a>

                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endif
