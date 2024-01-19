<div class="form-group">
    <div action="{{ route('admin.lines.upload', $line) }}" class="dropzone" id="my-great-dropzone">

    </div>
</div>
<div class="form-group">
     

    <div class="drop-show-images">
        <div class="d-flex flex-wrap">
            
        </div>
    </div>
   
</div>
<div class="form-group">
    {!! Form::label('name', 'Name', []) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
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
    <label>
        {!! Form::radio('status', 1, true, ['form-control']) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2, null, ['form-control']) !!}
        Publicado
    </label>
    @error('status')
        <br />
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
