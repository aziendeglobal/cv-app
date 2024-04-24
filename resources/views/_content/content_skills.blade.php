@php
$countSkills = count($skills);
$countColumn = 0;

if($countSkills % 2){
$countColumn = intval(($countSkills / 2)+1);
}
else{
$countColumn = intval($countSkills / 2);
}


@endphp
<div class="row data-contact py-2">
    <div class="col-12  data-competencias">
        <h3 class="data-title ">Competencias</h3>

        <div class="row ">

            <div class="col-12 col-sm-6 col-xl-12 ">
                @foreach($skills as $skill)
                @if($loop->iteration <= $countColumn) 
                <p>{!! $skill !!}</p>
                    @endif
                    @endforeach

            </div>

            <div class="col-12 col-sm-6 col-xl-12 ">
                @foreach($skills as $skill)
                @if($loop->iteration > $countColumn)
                <p>{!! $skill !!}</p>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>