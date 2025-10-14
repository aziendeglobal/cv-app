<div class="row py-3">
    <div class="col-12">
        <h3 class="data-title">Formación</h3>

        @foreach($education as $course)
        <div class="row">
            <div class="col-12 col-xl-8">
                <p><b>{!! $course->title !!}</b></p>
            </div>
            <div class="col-12 col-xl-4">
                {{-- Formateamos las fechas para que se vean bien --}}
                <p class="data-date">
                    <b>
                        {{ \Carbon\Carbon::parse($course->start_date)->format('M Y') }} - 
                        {{ \Carbon\Carbon::parse($course->end_date)->format('M Y') }}
                    </b>
                </p>
            </div>

            {{-- 'place' ahora es 'institution' --}}
            <p class="data-subtitle">{!! $course->institution !!}</p>
            
            {{-- El campo 'name' lo integramos en 'description' en el seeder --}}
            <p>{!! $course->description !!}</p>
        </div>
        @endforeach

    </div>
</div>