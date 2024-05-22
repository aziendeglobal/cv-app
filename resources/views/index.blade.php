@extends('layout.base')

@section('meta-title', 'Nicolás Alberto Fuentes')

@section('content')
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
@endsection        