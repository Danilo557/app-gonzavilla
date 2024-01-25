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
 
