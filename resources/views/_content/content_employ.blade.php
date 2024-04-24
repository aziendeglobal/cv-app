<div class="row py-3">
    <div class="col-12 ">
        <h3 class="data-title">Experiencia</h3>
    </div>

    @foreach($employ as $employment)

    <div class="col-12  py-2">
        <div class="row ">
            <div class="col-12 col-xl-8 ">
                <p><b>{!! $employment['title'] !!}</b></p>
            </div>
            <div class="col-12 col-xl-4 ">
                <p class="data-date"><b>{!! $employment['date'] !!}</b></p>
            </div>
        </div>
        <p class="data-subtitle">{!! $employment['place'] !!}</p>
        {!! $employment['description'] !!}
    </div>

    @endforeach    

</div>