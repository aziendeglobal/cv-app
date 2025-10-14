<div class="row py-3">
    <div class="col-12">
        <h3 class="data-title">Voluntariado</h3>

        @foreach($volunt as $volunteer)
        <div class="row">
            <div class="col-12 col-xl-8">
                <p><b>{!! $volunteer->title !!}</b></p>
            </div>
            <div class="col-12 col-xl-4">
                <p class="data-date">
                    <b>
                        {{-- Construimos el rango de fechas con Carbon --}}
                        {{ \Carbon\Carbon::parse($volunteer->start_date)->format('M Y') }} -
                        @if($volunteer->end_date)
                            {{ \Carbon\Carbon::parse($volunteer->end_date)->format('M Y') }}
                        @else
                            Presente
                        @endif
                    </b>
                </p>
            </div>
            {{-- 'place' ahora es 'organization' --}}
            <p class="data-subtitle">{!! $volunteer->organization !!}</p>
            {!! $volunteer->description !!}
        </div>
        @endforeach

    </div>
</div>