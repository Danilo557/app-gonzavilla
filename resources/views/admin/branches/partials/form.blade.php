<div class="form-group">
    {!! Form::label('address', 'Direccion', []) !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Direccion']) !!}
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('phone', 'Telefono', []) !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('whatsapp', 'Whatsapp', []) !!}
            {!! Form::tel('whatsapp', null, ['class' => 'form-control', 'placeholder' => 'Whatsapp']) !!}
            @error('whatsapp')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('state_id', 'Estado') !!}
            {!! Form::select('state_id', $states, null, ['class' => 'form-control', 'placeholder' => 'Estado']) !!}
            @error('state_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('municipality_id', 'Municipio') !!}
            {!! Form::select('municipality_id', $municipalities, null, [
                'class' => 'form-control',
                'placeholder' => 'Municipio',
            ]) !!}
            @error('municipality_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>




<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('map', 'Mapa', []) !!}
            {!! Form::text('map', null, ['class' => 'form-control', 'placeholder' => 'Mapa']) !!}
            @error('map')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div id="iframap">

            </div>
            
        </div>
    </div>
</div>
