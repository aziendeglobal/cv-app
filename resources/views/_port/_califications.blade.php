<div class="row justify-content-center">
    @foreach($qualifications as $qual)
        @php
            // Generamos un ID único para el modal
            $modalId = 'qualModal-' . $qual->id;
        @endphp

        {{-- 1. TARJETA (CARD) --}}
        <div class="card col-12 col-xl-4 mx-2 my-4 shadow-sm">
            <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                {{-- Imagen de portada con ajuste de altura para uniformidad --}}
                <div style="height: 250px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #f8f9fa;">
                    <img src="{{ $qual->cover_image }}" class="card-img-top" alt="{{ $qual->title }}" style="max-height: 100%; width: auto; max-width: 100%;">
                </div>
            </a>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}" class="text-decoration-none text-dark">
                        {{ $qual->title }}
                    </a>
                </h5>
            </div>
            <div class="card-footer bg-white border-top-0">
                <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                    Ver Reputación
                </button>
            </div>
        </div>

        {{-- 2. MODAL --}}
        <div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="{{ $modalId }}Label">{{ $qual->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        {{-- Carrusel --}}
                        <div id="{{ $modalId }}Controls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($qual->images as $image)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <img src="{{ $image->image_url }}" class="d-block w-100 shadow-sm" alt="{{ $qual->title }}">
                                    </div>
                                @endforeach
                            </div>
                            
                            {{-- Controles del carrusel (Solo si hay más de 1 imagen) --}}
                            @if($qual->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#{{ $modalId }}Controls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#{{ $modalId }}Controls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>