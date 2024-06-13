@extends('layout.base')

@section('meta-title', 'Portfolio - Nicolás Alberto Fuentes')

@section('content')
<div class="row">
    <h1>Portfolio: Nicolás Alberto Fuentes | <a href="/">CV</a></h1>
</div>


<div class="row">
    <div class="card-group ">
        @include('_port.apdi_wordpress')
        @include('_port.api_laravel_backend')
        @include('_port.aziendeglobal_prestashop')
    </div>
</div>


<div class="row">
    <div class="card-group ">
        @include('_port.aziendeglobal_blog_wordpress')
        @include('_port.aznarez_landing')
        @include('_port.buzz_admin')

    </div>
</div>



<div class="row">
    <div class="card-group ">
        @include('_port.chocolateamargo_wordpress')
        @include('_port.fixup_laravel_frontend')
        @include('_port.flaminco_laravel_admin')

    </div>
</div>

<div class="row">
    <div class="card-group ">
        @include('_port.khalu_prestashop')
        @include('_port.laravel_nova_admin')
        @include('_port.mechongue_laravel_admin')
    </div>
</div>

<div class="row">
    <div class="card-group ">
        @include('_port.pdgsa_laravel_admin')
        @include('_port.speedup_laravel_admin')
        @include('_port.wizard_angular_frontend')
    </div>
</div>

@include('_port._califications')

@endsection