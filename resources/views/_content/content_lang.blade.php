<div class="row data-contact py-2">
    <div class="col-12">
        <h3 class="data-title">Idiomas</h3>
        @foreach($lang as $language)
            {{-- Accedemos a las propiedades del objeto Language --}}
            <p>{!! $language->name !!}: {!! $language->level !!}</p>
        @endforeach
    </div>
</div>