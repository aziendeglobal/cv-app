<div class="row">
    <div class="col-12 mt-5">
        <h3 class="data-title">Perfil</h3>
        {{-- Usamos la propiedad 'profile_summary' del objeto $personal --}}
        {!! $personal->profile_summary !!}


    </div>
</div>

{{-- NUEVA SECCIÓN DE SKILLS CATEGORIZADOS (Integrada visualmente bajo el perfil) --}}
<div class="mt-4 pt-3 border-top">
    <h5 class="mb-3 text-uppercase text-secondary text-start" style="font-size: 0.9rem; letter-spacing: 1px;">Stack Tecnológico & Habilidades</h5>

    <div class="row text-start">
        @foreach($skills_categories as $category)
        {{-- Solo mostramos la categoría si tiene skills activos --}}
        @if($category->skills->isNotEmpty())
        <div class="col-12 mb-2">
            <span class="fw-bold text-dark">{{ $category->name }}:</span>
            <span class="text-muted">
                {{-- Usamos join para separar por comas limpiamente --}}
                {{ $category->skills->pluck('name')->join(', ') }}.
            </span>
        </div>
        @endif
        @endforeach
    </div>
</div>