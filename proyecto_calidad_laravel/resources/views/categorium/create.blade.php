@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Categorium
@endsection

@section('content')
    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h6 class="mb-4">Registrar Categoria</h6>
                        <form method="POST" action="{{ route('categoria.store') }}"  enctype="multipart/form-data">
                            @csrf

                            @include('categorium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
