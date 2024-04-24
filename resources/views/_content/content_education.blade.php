<div class="row py-3">
    <div class="col-12 ">
        <h3 class="data-title">Formación</h3>

        @foreach($education as $course)

        <div class="row ">
            <div class="col-12 col-xl-8 ">
                <p><b>{!! $course['title'] !!}</b></p>
            </div>
            <div class="col-12 col-xl-4 ">
                <p class="data-date"><b>{!! $course['date'] !!}</b></p>
            </div>

            <p class="data-subtitle">{!! $course['place'] !!}</p>
            <p>{!! $course['name'] !!}</p>
            <p>{!! $course['description'] !!}</p>
        </div>
        @endforeach

    </div>
</div>