<div class="row data-contact py-2">
    <div class="col-12 ">
        <h3 class="data-title">Datos personales</h3>

        <div class="row ">
            <div class="col-12 col-sm-6 col-xl-12 ">
                <p><i class="fa-solid fa-user data-icon"></i> {!! $fullname !!}</p>
                <p><i class="fa-solid fa-envelope data-icon"></i> <a href="mailto:{!! $personal['email'] !!}" target="_blank">{!! $personal['email'] !!}</a></p>
                <p><i class="fa-brands fa-square-whatsapp data-icon"></i> <a href="https://wa.me/{!! $personal['whatsapp'] !!}" target="_blank">+{!! $personal['whatsapp'] !!}</a></p>
                <p><i class="fa-solid fa-location-dot data-icon"></i> <a href="{!! $personal['location_link'] !!}" target="_blank">{!! $personal['location'] !!}</a></p>
            </div>

            <div class="col-12 col-sm-6 col-xl-12 ">
                <p><i class="fa-solid fa-cake-candles data-icon"></i> {!! $personal['birthday'] !!}</p>
                <p><i class="fa-solid fa-heart data-icon"></i> {!! $personal['civil_status'] !!}</p>
                <p><i class="fa-brands fa-linkedin data-icon"></i> <a href="https://{!! $personal['linkedin'] !!}" target="_blank">{!! $personal['linkedin'] !!}</a></p>
            </div>
        </div>
    </div>
</div>