

<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $producto?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <label for="precio" class="form-label">{{ __('Precio') }}</label>
        <div class="form-floating mb-3">
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input 
                    type="text" 
                    name="Precio" 
                    class="form-control @error('Precio') is-invalid @enderror" 
                    value="{{ old('Precio', $producto?->Precio) }}" 
                    id="precio" 
                    placeholder="Precio"
                >
                <span class="input-group-text">.00</span>
                @error('Precio')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
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
        <label for="floatingCategoria">Categoría</label>
<div class="form-floating mb-3">
    <select name="ID_Categoria" 
            class="form-select @error('ID_Categoria') is-invalid @enderror"
            id="floatingCategoria"
            aria-label="Floating label select example">

        <option value="" disabled 
            {{ (!isset($producto) || !$producto->categorium || $producto->categorium->Estado == 0) ? 'selected' : '' }}>
            Sin categoría
        </option>

        @foreach($categorias as $cat)
            <option value="{{ $cat->ID }}"
                @if(isset($producto) && $producto->ID_Categoria == $cat->ID && $producto->categorium->Estado == 1)
                    selected
                @endif
            >
                {{ $cat->Nombre }}
            </option>
        @endforeach
    </select>

    <label for="floatingCategoria">Categoría</label>

    @error('ID_Categoria')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>




    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>