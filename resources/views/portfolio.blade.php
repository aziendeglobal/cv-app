@extends('layout.base')

@section('meta-title', 'Portfolio - Nicolás Alberto Fuentes')

@section('content')
<div class="row">
    <h1>Portfolio: Nicolás Alberto Fuentes | <a href="/">CV</a></h1> 
</div>

<div class="row">
    <div class="card-group ">

        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/fixup_home.png" class="card-img-top" alt="AZIENDE GLOBAL - FIXUP - LARAVEL">
            <div class="card-body">
                <h5 class="card-title">FIXUP - LARAVEL - FRONTEND</h5>
                <p class="card-text">
                    Frotend utilizado para brindar información acerca de la empresa, y para gestionar nuevas reparaciones de equipos automáticamente.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Fue implementado con Laravel y maquetado con Bootstrap. También, se utilizo jQuery y Javascript, para la interacción.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#fixupLaravel" data-bs-toggle="modal" data-bs-target="#fixupLaravel">Ver detalles</button>
            </div>
        </div>


        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/flaminco_checkout.png" class="card-img-top" alt="FLAMINCO - LARAVEL">
            <div class="card-body">
                <h5 class="card-title">FLAMINCO - LARAVEL - ADMINISTRADOR</h5>
                <p class="card-text">
                    Aplicación que brinda soporte para la administración de empresas.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Se integro la API de Mercado Pago, para realizar los pagos de las suscripciones automáticamente.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#flamincoLaravel" data-bs-toggle="modal" data-bs-target="#flamincoLaravel">Ver detalles</button>
            </div>
        </div>

        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/laravel_nova_1_login.png" class="card-img-top" alt="AZIENDE GLOBAL - LARAVEL NOVA">
            <div class="card-body">
                <h5 class="card-title">LARAVEL NOVA - ADMINISTRADOR</h5>
                <p class="card-text">
                    Solución de Laravel Nova implementada para Speedup, para realizar tareas y configuraciones de super-administrador.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Se realizó la implementación de Laravel Nova, junto con varias estadísticas, filtros, imports, exports y actions.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#speedupLaravelNova" data-bs-toggle="modal" data-bs-target="#speedupLaravelNova">Ver detalles</button>
            </div>
        </div>

    </div>
</div>



<div class="row">
    <div class="card-group ">

        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/speedup_1_login.png" class="card-img-top" alt="AZIENDE GLOBAL - SPEEDUP - LARAVEL">
            <div class="card-body">
                <h5 class="card-title">SPEEDUP - LARAVEL - ADMINISTRADOR</h5>
                <p class="card-text">
                    Speedup es una aplicación web para la gestión de reparación de equipos (smartphone, impresora, computadoras, etc.).
                    Es utilizado por usuarios con diferentes perfiles y roles.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Se desarrollo la aplicación desde cero con Laravel, realizando la migración desde una aplicación Desktop.
                    Se instalo una plantilla optimizada, realizando configuraciones en Bootstrap y jQuery. 
                    Se integraron varias APIs, como: Mercado Pago, Zenvia (Sirena), Oca, Correo Argentino, entre otras.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#speedupLaravel" data-bs-toggle="modal" data-bs-target="#speedupLaravel">Ver detalles</button>
            </div>
        </div>




        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/laravel_resources_docs.png" class="card-img-top" alt="API / ENDPOINTS - LARAVEL - BACKEND">
            <div class="card-body">
                <h5 class="card-title">API / ENDPOINTS - LARAVEL - BACKEND</h5>
                <p class="card-text">
                    Desarrollo de una aplicación de endpoints y APIs Rest para el proyecto de Speedup, para permitir el consumo externo e interno de otras aplicaciones de la plataforma.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Se realizó la implementación de Laravel, junto con Enpoints y APIs solicitados, y una interfaz para consulta desde el navegador.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#speedupResources" data-bs-toggle="modal" data-bs-target="#speedupResources">Ver detalles</button>
            </div>
        </div>



        <div class="card col-12 col-xl-4 mx-2 my-4">
            <img src="/img/portfolio/fixup_app_pasos_1_equipos.png" class="card-img-top" alt="AZIENDE GLOBAL - FIXUP - ANGULAR">
            <div class="card-body">
                <h5 class="card-title">WIZARD - ANGULAR - FRONTEND</h5>
                <p class="card-text">
                    Wizard complementario de la web de Fixup, utilizado para la registración de un equipo a reparar, por parte de un cliente, siguiendo paso a paso, los detalles para registrar el equipo a reparar y el servicio solicitado.
                </p>
                <p>&nbsp;</p>
                <p>
                    <b>DETALLES:</b>
                </p>
                <p>
                    Se desarrollo la aplicación desde cero con Angular, y consumiendo endpoints desarrollados en Laravel, para la impresión de los datos de cada paso.
                </p>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#fixupAngular" data-bs-toggle="modal" data-bs-target="#fixupAngular">Ver detalles</button>
            </div>
        </div>
    </div>
</div>

<!-- SPEEDUP - LARAVEL - ADMINISTRADOR ---------------------------------------------->
<div class="modal fade mt-0" id="speedupLaravel" tabindex="-1" role="dialog" aria-labelledby="SpeedupLaravelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">SPEEDUP - LARAVEL - ADMINISTRADOR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="speedupLaravelControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/speedup_1_login.png" class="d-block w-100" alt="Speedup - Laravel - login">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/speedup_2_dashboard.png" class="d-block w-100" alt="Speedup - Laravel - dashboard">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/speedup_3_listado_reparaciones.png" class="d-block w-100" alt="Speedup - Laravel - listado">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/speedup_4_detalle_reparacion.png" class="d-block w-100" alt="Speedup - Laravel - detalle">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/speedup_5_detalle_reparacion_modal.png" class="d-block w-100" alt="Speedup - Laravel - detalle modal">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#speedupLaravelControls" role="button" data-slide="prev" data-bs-target="#speedupLaravelControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark bg-dark"  aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#speedupLaravelControls" role="button" data-slide="next" data-bs-target="#speedupLaravelControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SPEEDUP - LARAVEL NOVA - ADMINISTRADOR ---------------------------------------------->
<div class="modal fade mt-0" id="speedupLaravelNova" tabindex="-1" role="dialog" aria-labelledby="SpeedupLaravelNovaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">SPEEDUP - LARAVEL NOVA - ADMINISTRADOR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="speedupLaravelNovaControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/laravel_nova_1_login.png" class="d-block w-100" alt="laravel_nova_1_login">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/laravel_nova_2_dashboard.png" class="d-block w-100" alt="laravel_nova_2_dashboard">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/laravel_nova_3_listado.png" class="d-block w-100" alt="laravel_nova_3_listado">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/laravel_nova_4_edit.png" class="d-block w-100" alt="laravel_nova_4_edit">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/laravel_nova_5_show.png" class="d-block w-100" alt="laravel_nova_5_show">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#speedupLaravelNovaControls" role="button" data-slide="prev" data-bs-target="#speedupLaravelNovaControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#speedupLaravelNovaControls" role="button" data-slide="next" data-bs-target="#speedupLaravelNovaControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FIXUP - LARAVEL - FRONTEND ---------------------------------------------->
<div class="modal fade mt-0" id="fixupLaravel" tabindex="-1" role="dialog" aria-labelledby="FixupLaravelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">FIXUP - LARAVEL - FRONTEND</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="fixupLaravelControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/fixup_home.png" class="d-block w-100" alt="fixup_home">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/fixup_servicio.png" class="d-block w-100" alt="fixup_servicio">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#fixupLaravelControls" role="button" data-slide="prev" data-bs-target="#fixupLaravelControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#fixupLaravelControls" role="button" data-slide="next" data-bs-target="#fixupLaravelControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FIXUP - ANGULAR - FRONTEND ---------------------------------------------->
<div class="modal fade mt-0" id="fixupAngular" tabindex="-1" role="dialog" aria-labelledby="fixupAngularLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">WIZARD - ANGULAR - FRONTEND</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="fixupAngularControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/fixup_app_pasos_1_equipos.png" class="d-block w-100" alt="fixup_app_pasos_1_equipos">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/fixup_app_pasos_2_marcas.png" class="d-block w-100" alt="fixup_app_pasos_2_marcas">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/fixup_app_pasos_3_modelos.png" class="d-block w-100" alt="fixup_app_pasos_3_modelos">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/fixup_app_pasos_4_fallas.png" class="d-block w-100" alt="fixup_app_pasos_4_fallas">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/fixup_app_pasos_5_form.png" class="d-block w-100" alt="fixup_app_pasos_5_form">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#fixupAngularControls" role="button" data-slide="prev" data-bs-target="#fixupAngularControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#fixupAngularControls" role="button" data-slide="next" data-bs-target="#fixupAngularControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FLAMINCO - LARAVEL - ADMINISTRADOR ---------------------------------------------->
<div class="modal fade mt-0" id="flamincoLaravel" tabindex="-1" role="dialog" aria-labelledby="flamincoLaravelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">FLAMINCO - LARAVEL - ADMINISTRADOR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="flamincoLaravelControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/flaminco_checkout.png" class="d-block w-100" alt="flaminco_checkout">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/portfolio/flaminco_mercadopago.png" class="d-block w-100" alt="flaminco_mercadopago">
                        </div>
                        <div class="carousel-item active">
                            <img src="/img/portfolio/flaminco_success.png" class="d-block w-100" alt="flaminco_success">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#flamincoLaravelControls" role="button" data-slide="prev" data-bs-target="#flamincoLaravelControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#flamincoLaravelControls" role="button" data-slide="next" data-bs-target="#flamincoLaravelControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- API / ENDPOINTS - LARAVEL - BACKEND ---------------------------------------------->
<div class="modal fade mt-0" id="speedupResources" tabindex="-1" role="dialog" aria-labelledby="speedupResourcesLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">API / ENDPOINTS - LARAVEL - BACKEND</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="speedupResourcesControls" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/portfolio/laravel_resources_docs.png" class="d-block w-100" alt="laravel_resources_docs">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#speedupResourcesControls" role="button" data-slide="prev" data-bs-target="#speedupResourcesControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#speedupResourcesControls" role="button" data-slide="next" data-bs-target="#speedupResourcesControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('_content.port_califications')

@endsection