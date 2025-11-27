@extends('layout.base')

@section('meta-title', 'Portfolio - '. $fullname)

@section('content')
<div class="row">
    <h1>Portfolio: {{ $fullname }} | <a href="/">CV</a></h1>
</div>

<!-- INIT ==================================================== -->

{{-- Contenedor para las tarjetas --}}
<div class="row justify-content-center">
    @foreach($portfolios as $project)
        {{-- Generamos un ID único para el modal basado en el título del proyecto --}}
        @php
            $modalId = Str::slug($project->title);
        @endphp

        {{-- 1. LA TARJETA (CARD) --}}
        <div class="card col-12 col-xl-4  my-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                {{-- La imagen de portada viene de la base de datos --}}
                <img src="{{ asset('img/portfolio/' . $project->cover_image) }}" class="card-img-top" alt="{{ $project->title }}">
            </a>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                        {{-- El título viene de la base de datos --}}
                        {{ $project->title }}
                    </a>
                </h5>
                {{-- La descripción viene de la base de datos --}}
                <p class="card-text">{{ $project->description }}</p>
                <p>&nbsp;</p>
                <p><b>DETALLES:</b></p>
                {{-- Los detalles vienen de la base de datos --}}
                <p>{{ $project->details }}</p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                    Ver detalles
                </button>
            </div>
        </div>
    @endforeach
</div>


{{-- MODALES - Colocamos este bucle después del de las tarjetas --}}
@foreach($portfolios as $project)
    @php
        $modalId = Str::slug($project->title);
    @endphp

    {{-- 2. EL MODAL --}}
    <div class="modal fade mt-0" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="{{ $modalId }}Label">{{ $project->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- El ID del carrusel también debe ser único --}}
                    <div id="{{ $modalId }}Controls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            {{-- Iteramos sobre las imágenes de este proyecto --}}
                            @foreach($project->images as $image)
                                {{-- La primera imagen debe tener la clase 'active' --}}
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{ asset('img/portfolio/' . $image->image_path) }}" class="d-block w-100" alt="Slide image">
                                </div>
                            @endforeach
                        </div>
                        {{-- Los controles del carrusel apuntan al ID único --}}
                        <a class="carousel-control-prev" href="#{{ $modalId }}Controls" role="button" data-bs-target="#{{ $modalId }}Controls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#{{ $modalId }}Controls" role="button" data-bs-target="#{{ $modalId }}Controls" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- END ==================================================== -->



@endsection