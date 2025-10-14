<div class="row data-init pb-2 rounded">
    <div class="col-12 text-white">
        {{-- Usamos las propiedades del objeto $personal --}}
        <h3 class="text-uppercase mt-5">{!! $personal->full_name !!}</h3>
        <p class="text-center">{!! $personal->headline !!}</p>
        {{-- Asumiendo que la imagen está en public/images/ --}}
        <img src="{{ asset('img/' . $personal->photo) }}" class="photo-image rounded-circle my-2 border border-5">
    </div>
</div>