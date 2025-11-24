@extends('layouts.app')

@section('template_title')
    Categorías
@endsection

@section('content')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">

                <h6 class="mb-4">Tabla de Categorías</h6>

                {{-- Botón superior --}}
                <div class="m-n2 mb-3">
                    <a href="{{ route('categoria.create') }}" class="btn btn-outline-success m-2">
                        Registrar Categoría
                    </a>
                </div>

                {{-- Mensaje de éxito --}}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categoria as $categorium)
                                <tr>
                                    <td>{{ $categorium->ID }}</td>
                                    <td>{{ $categorium->Nombre }}</td>
                                    <td>
                                        <div class="m-n2 d-flex flex-wrap">

                                            {{-- Editar --}}
                                            <a href="{{ route('categoria.edit', $categorium->ID) }}"
                                               class="btn btn-outline-warning m-2">
                                                Editar
                                            </a>

                                            {{-- Eliminar / Desactivar --}}
                                            <form action="{{ route('categoria.destroy', $categorium->ID) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('¿Seguro que deseas eliminar esta categoría?')"
                                                    class="btn btn-outline-danger m-2">
                                                    Eliminar
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{-- PAGINACIÓN --}}
                    <div class="mt-3">
                        {!! $categoria->withQueryString()->links() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection

