<div class="row py-3">
    <div class="col-12">
        <h3 class="data-title">Certificaciones</h3>

        @foreach($cert as $certificate)
        <div class="col-12 py-2">
            <div class="row">
                <div class="col-12 col-xl-8">
                    {{-- Accedemos con ->title --}}
                    <p><b>{!! $certificate->title !!}</b></p>
                </div>
                <div class="col-12 col-xl-4">
                    {{-- La columna ahora se llama 'year' --}}
                    <p class="data-date"><b>{!! $certificate->year !!}</b></p>
                </div>
                {{-- La columna 'place' ahora es 'institution' --}}
                <p class="data-subtitle">{!! $certificate->institution !!}</p>
                {{-- La columna 'link' ahora es 'url' y 'name' es 'title' --}}
                <p><a href="{!! $certificate->url !!}" target="_blank">Ver Credencial</a></p>
            </div>
        </div>
        @endforeach

    </div>
</div>