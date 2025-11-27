@extends('layout.base')

@section('meta-title', 'Calificaciones - '. $fullname)

@section('content')
<div class="row">
    <h1>Calificaciones: {{ $fullname }} | <a href="/">CV</a></h1>
</div>

@include('_port._califications')

@endsection