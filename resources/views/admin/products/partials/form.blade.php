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
    {!! Form::label('subcategory_id', 'subcategory') !!}
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
