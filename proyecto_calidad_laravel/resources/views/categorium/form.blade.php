<div class="row padding-1 p-1">

    <div class="col-md-12">

        {{-- Campo Nombre --}}
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input
                type="text"
                name="Nombre"
                id="nombre"
                placeholder="Nombre"
                class="form-control @error('Nombre') is-invalid @enderror"
                value="{{ old('Nombre', $categorium?->Nombre) }}"
            >
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>

</div>
