<div class="row data-contact py-2">
    <div class="col-12">
        <h3 class="data-title">Datos personales</h3>

        <div class="row">
            <div class="col-12 col-sm-6 col-xl-12">
                {{-- Usamos las propiedades del objeto $personal --}}
                <p><i class="fa-solid fa-user data-icon"></i> {!! $personal->full_name !!}</p>
                <p><i class="fa-solid fa-envelope data-icon"></i> <a href="mailto:{!! $personal->email !!}" target="_blank">{!! $personal->email !!}</a></p>
                <p><i class="fa-brands fa-square-whatsapp data-icon"></i> <a href="https://wa.me/{!! $personal->whatsapp !!}" target="_blank">+{!! $personal->whatsapp !!}</a></p>
                <p><i class="fa-solid fa-location-dot data-icon"></i> <a href="{!! $personal->location_link !!}" target="_blank">{!! $personal->location !!}</a></p>
            </div>

            <div class="col-12 col-sm-6 col-xl-12">
                {{-- Formateamos la fecha con Carbon --}}
                <p><i class="fa-solid fa-cake-candles data-icon"></i> {{ \Carbon\Carbon::parse($personal->birthday)->format('d F, Y') }}</p>
                <p><i class="fa-solid fa-heart data-icon"></i> {!! $personal->civil_status !!}</p>
                {{-- 'linkedin' ahora es 'linkedin_url' --}}
                <p><i class="fa-brands fa-linkedin data-icon"></i> <a href="{!! $personal->linkedin_url !!}" target="_blank">{!! str_replace("https://linkedin.com/", "", $personal->linkedin_url)  !!}</a></p>
                {{-- El link al portfolio también viene del objeto --}}
                <p><i class="fa-solid fa-suitcase data-icon"></i> <a href="/portfolio" > portfolio </a></p>
                <p><i class="fa-solid fa-medal data-icon"></i> <a href="/califications" > calificaciones </a></p>
            </div>
        </div>
    </div>
</div>