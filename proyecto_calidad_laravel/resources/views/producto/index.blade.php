@extends('layouts.app')

@section('template_title')
    Productos
@endsection

@section('content')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">

                <h6 class="mb-4">Tabla de Productos</h6>

                {{-- Botones superiores --}}
                <div class="m-n2 mb-3">
                    <a href="{{ route('productos.create') }}" class="btn btn-outline-success m-2">
                        Registrar Producto
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
                                <th>Precio</th>
                                <th>Material</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->ID }}</td>
                                    <td>{{ $producto->Nombre }}</td>
                                    <td>{{ $producto->Precio }}</td>
                                    <td>{{ $producto->Material }}</td>
                                    <td>{{ $producto->Descripcion }}</td>
                                    <td>
                                        @if(!$producto->categorium || $producto->categorium->Estado == 0)
                                            <span class="text-danger">Sin categoría</span>
                                        @else
                                            {{ $producto->categorium->Nombre }}
                                        @endif
                                    </td>



                                    <td>
                                        <div class="m-n2 d-flex flex-wrap">


                                            <a href="{{ route('productos.edit', $producto->ID) }}"
                                            class="btn btn-outline-warning m-2">
                                                Editar
                                            </a>

                                            <form action="{{ route('productos.destroy', $producto->ID) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('¿Seguro que deseas eliminar este producto?')"
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
                        {!! $productos->withQueryString()->links() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Table End -->

@endsection
