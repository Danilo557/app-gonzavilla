<div class="form-group">
    {!! Form::label('unit', 'Unidad', []) !!}
    {!! Form::text('unit', null, ['class' => 'form-control', 'placeholder' => 'Unidades']) !!}
    @error('unit')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>