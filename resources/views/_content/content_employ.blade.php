<div class="row py-3">
    <div class="col-12">
        <h3 class="data-title">Experiencia</h3>
    </div>

    @foreach($employ as $employment)
    <div class="col-12 py-2">
        <div class="row">
            <div class="col-12 col-xl-8">
                <p><b>{!! $employment->title !!}</b></p>
            </div>
            <div class="col-12 col-xl-4">
                <p class="data-date">
                    <b>
                        {{ \Carbon\Carbon::parse($employment->start_date)->format('M Y') }} -
                        {{-- Si end_date es null, mostramos 'Presente' --}}
                        @if($employment->end_date)
                            {{ \Carbon\Carbon::parse($employment->end_date)->format('M Y') }}
                        @else
                            Presente
                        @endif
                    </b>
                </p>
            </div>
        </div>
        {{-- 'place' ahora es 'company' --}}
        <p class="data-subtitle">{!! $employment->company !!}</p>
        {!! $employment->description !!}
    </div>
    @endforeach

</div>