<div class="row py-3">
    <div class="col-12 ">
        <h3 class="data-title">Certificaciones</h3>

        @foreach($cert as $certificate)
        <div class="col-12  py-2">
            <div class="row ">
                <div class="col-12 col-xl-8 ">
                    <p><b>{!! $certificate['title'] !!}</b></p>
                </div>
                <div class="col-12 col-xl-4 ">
                    <p class="data-date"><b>{!! $certificate['date'] !!}</b></p>
                </div>
                <p class="data-subtitle">{!! $certificate['place'] !!}</p>
                <p><a href="{!! $certificate['link'] !!}">{!! $certificate['name'] !!}</a></p>
            </div>
        </div>
        @endforeach

    </div>
</div>