@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Categorium
@endsection

@section('content')
    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Actualizar Categoria</h6>
                                    <form method="POST" action="{{ route('categoria.update', $categorium->ID) }}"  role="form" enctype="multipart/form-data">
                                        {{ method_field('PATCH') }}
                                        @csrf

                                        @include('categorium.form')

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
