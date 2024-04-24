<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nicolás Alberto Fuentes</title>

    @include('_partials.head_css')
    @include('_partials.head_js')
</head>

<body class="page-background ">
    <div class="container text-center mt-5 ">

        <div class="row">
            <div class="col-12 col-xl-3 column-intro px-5">
                @include('_content.content_title')
                @include('_content.content_personal')
                @include('_content.content_skills')
                @include('_content.content_lang')
            </div>


            <div class="col-12 col-xl-9 column-detail px-5">
                @include('_content.content_profile')
                @include('_content.content_education')
                @include('_content.content_employ')
                @include('_content.content_cert')
                @include('_content.content_volunt')
            </div>
        </div>

    </div>

    @include('_partials.body_css')
    @include('_partials.body_js')
    
</body>

</html>