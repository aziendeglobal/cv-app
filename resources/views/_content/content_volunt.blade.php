<div class="row py-3">
    <div class="col-12 ">
        <h3 class="data-title">Voluntariado</h3>

        @foreach($volunt as $volunteer)
        <div class="row ">
            <div class="col-12 col-xl-8 ">
                <p><b>{!! $volunteer['title'] !!}</b></p>
            </div>
            <div class="col-12 col-xl-4 ">
                <p class="data-date"><b>{!! $volunteer['date'] !!}</b></p>
            </div>
        
        <p class="data-subtitle">{!! $volunteer['place'] !!}</p>
        {!! $volunteer['description'] !!}
        </div>
        @endforeach

    </div>
</div>