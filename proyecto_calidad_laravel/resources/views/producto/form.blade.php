<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="i_d" class="form-label">{{ __('Id') }}</label>
            <input type="text" name="ID" class="form-control @error('ID') is-invalid @enderror" value="{{ old('ID', $producto?->ID) }}" id="i_d" placeholder="Id">
            {!! $errors->first('ID', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $producto?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="Precio" class="form-control @error('Precio') is-invalid @enderror" value="{{ old('Precio', $producto?->Precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('Precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="material" class="form-label">{{ __('Material') }}</label>
            <input type="text" name="Material" class="form-control @error('Material') is-invalid @enderror" value="{{ old('Material', $producto?->Material) }}" id="material" placeholder="Material">
            {!! $errors->first('Material', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $producto?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="i_d__categoria" class="form-label">{{ __('Id Categoria') }}</label>
            <input type="text" name="ID_Categoria" class="form-control @error('ID_Categoria') is-invalid @enderror" value="{{ old('ID_Categoria', $producto?->ID_Categoria) }}" id="i_d__categoria" placeholder="Id Categoria">
            {!! $errors->first('ID_Categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="Estado" class="form-control @error('Estado') is-invalid @enderror" value="{{ old('Estado', $producto?->Estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('Estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>