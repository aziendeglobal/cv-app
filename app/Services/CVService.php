<?php

namespace App\Services;

class CVService
{

    public function getData()
    {
        $data = [];

        $data['fullname'] = 'Nicolás Alberto Fuentes';
        $data['intro']['fullname_2'] = 'Nicolás A. Fuentes';
        $data['intro']['headline'] = 'Technical Leader | Full Stack Developer | Laravel Developer | Backend Developer';
        $data['intro']['photo'] = 'nicolas_fuentes1.png';
        //---
        $data['personal']['email'] = 'nicolas.a.fuentes@gmail.com';
        $data['personal']['whatsapp'] = '5491176001198';
        $data['personal']['location'] = 'Argentina, Ciudad de Buenos Aires';
        $data['personal']['location_link'] = 'https://maps.app.goo.gl/xq7KdUQjTJCGZBb66';
        $data['personal']['birthday'] = '25 de febrero de 1983';
        $data['personal']['civil_status'] = 'Casado';
        $data['personal']['linkedin'] = 'linkedin.com/in/nicolasalbertofuentes';
        //
        $data['skills'][] = 'Laravel';
        $data['skills'][] = 'Filament';
        $data['skills'][] = 'PrestaShop';
        $data['skills'][] = 'Desarrollo de aplicaciones web';
        $data['skills'][] = 'WordPress';
        $data['skills'][] = 'Angular';
        $data['skills'][] = 'PHP';
        $data['skills'][] = 'IA / AI (Copilot, Claude, Gemini)';
        $data['skills'][] = 'Scrum';
        $data['skills'][] = 'Kanban';
        $data['skills'][] = 'Bitbucket';
        $data['skills'][] = 'GitHub';
        $data['skills'][] = 'API Rest';
        $data['skills'][] = 'SOAP';
        $data['skills'][] = 'Ajax';
        $data['skills'][] = 'PuTTY';
        $data['skills'][] = 'Unix';
        $data['skills'][] = 'Git';
        $data['skills'][] = 'Jira';
        $data['skills'][] = 'Cpanel';

        $data['skills'][] = 'WHM';
        $data['skills'][] = 'AWS';
        $data['skills'][] = 'Booststrap';
        $data['skills'][] = 'CSS';
        $data['skills'][] = 'HTML';
        $data['skills'][] = 'JavaScript';
        $data['skills'][] = 'jQuery';
        $data['skills'][] = 'MySQL';
        $data['skills'][] = 'PhpMyAdmin';
        $data['skills'][] = 'SQL';
        $data['skills'][] = 'XAMPP';
        $data['skills'][] = 'Wamp';
        $data['skills'][] = 'Trello';
        $data['skills'][] = 'Visual Studio Code';
        $data['skills'][] = 'Análisis de requisitos';
        $data['skills'][] = 'Desarrollo de software';
        $data['skills'][] = 'Servidores web';
        $data['skills'][] = 'Base de datos';
        $data['skills'][] = 'Líder de equipo';
        $data['skills'][] = 'Reingeniería';
        //
        $data['lang'][1]['name'] = 'Español';
        $data['lang'][1]['level'] = 'nativo';

        $data['lang'][2]['name']  = 'English';
        $data['lang'][2]['level'] = 'básico';
        //
        $data['profile'] = '
        <p>Ingeniero en Sistemas con más de 10 años de experiencia en desarrollo full-stack y liderazgo técnico. Especializado en soluciones escalables para web y e-commerce, con un enfoque en Laravel, incluyendo el uso de Filament para construir interfaces administrativas modernas y eficientes. Combino expertise técnico con gestión de equipos y metodologías ágiles para lograr entregas de alto impacto.</p>
        
        <p>Mi Experiencia Clave:
        <br>
        ✔ Desarrollo y Arquitectura de Software:
        <br>
        Desarrollo de aplicaciones robustas con Laravel y PHP. Experiencia en Filament para la creación rápida de paneles administrativos y backoffices personalizados. Integración de APIs RESTful y diseño de arquitecturas escalables. Optimización de bases de datos y rendimiento en entornos de alta demanda. Uso de herramientas de inteligencia artificial (Copilot, Claude, Gemini) para acelerar el desarrollo de código, automatizar tareas y mejorar la calidad del software.
        <br>
        ✔ E-commerce & Web:
        <br>
        Implementación y personalización de tiendas virtuales con PrestaShop (instalación, módulos, diseño a medida). Desarrollo de sitios web y landing pages con WordPress, priorizando performance, seguridad y SEO técnico.
        <br>
        ✔ Liderazgo y Metodologías Ágiles:
        <br>
        Gestión de equipos de desarrollo bajo metodologías ágiles como Scrum/Kanban. Coordinación de proyectos end-to-end, desde la planificación hasta la entrega. Mentoría técnica y formación de equipos multidisciplinarios.
        </p>  
        
        <p>Objetivo Profesional:
        <br>
        Brindar soluciones a medida, escalables, de largo plazo, con altos estándares de calidad, integrando tecnología, estrategia y eficiencia en cada proyecto.</p>        
        ';

        //
        $data['education'][1]['title'] = 'Ingeniería en Sistemas de Información, Informática';
        $data['education'][1]['date'] = 'mar 2001 - jun 2011';
        $data['education'][1]['place'] = 'Universidad Tecnológica Nacional, Argentina';
        $data['education'][1]['name'] = 'Título: Ingeniero Informático | System Engineer | Software Engineer';
        $data['education'][1]['description'] = 'Duración de la carrera: 5 años + 1 año de tesis';

        //

        $data['employ'][5]['title'] = 'Technical Leader';
        $data['employ'][5]['date'] = 'may 2025 - presente';
        $data['employ'][5]['place'] = 'Buzz, Costa Rica';
        $data['employ'][5]['description'] = '
        <p>✔ Liderazgo Técnico: <br>Guía y soporte a desarrolladores en la resolución de problemas complejos (Laravel, WordPress, Filament). Revisión de código y mentoría para mantener estándares de calidad y buenas prácticas.</p> 

<p>✔ Gestión Ágil y Planificación Estratégica: <br>Coordinación de sprints y planificación de entregas bajo metodologías ágiles (Scrum/Kanban). Desglose de tareas, estimaciones de tiempo y recursos, y facilitación de ceremonias ágiles (daily standups, retrospectivas, planning poker). Priorización de iniciativas técnicas alineadas con los objetivos del negocio.</p> 

<p>✔ Desarrollo Estratégico: <br>Diseño de arquitecturas escalables y toma de decisiones técnicas clave. Optimización de procesos de desarrollo mediante CI/CD y automatizaciones.</p> 

<p>✔ Gestión de Infraestructura: <br>Supervisión de servidores y entornos de despliegue, con foco en seguridad y rendimiento.</p> 

<p>Aptitudes: <br>PHP · Liderazgo Técnico · Metodologías ágiles · Laravel · Filament · Wordpress · DevOps</p>    
        ';


        $data['employ'][4]['title'] = 'Programador Full Stack Senior';
        $data['employ'][4]['date'] = 'jun 2024 - may 2025';
        $data['employ'][4]['place'] = 'Buzz, Costa Rica';
        $data['employ'][4]['description'] = '
        <p>✔ Desarrollo Full Stack con Laravel & Filament: <br>Desarrollo y mantenimiento de aplicaciones web escalables utilizando Laravel y Filament. Implementación de funcionalidades personalizadas, optimización de rendimiento y refactorización de código para mejorar la seguridad y mantenibilidad.</p>

        <p>✔ WordPress Avanzado: <br>Desarrollo de temas y plugins a medida, integraciones con APIs externas y configuración de sitios multilingües. Uso intensivo de ACF, Custom Post Types y taxonomías para soluciones flexibles y orientadas al cliente.</p>

        <p>✔ Gestión de Infraestructura: <br>Administración de entornos Linux y despliegue en la nube. Resolución de incidencias técnicas y planificación de mejoras en la arquitectura de servidores.</p>

        <p>✔ Innovación con Inteligencia Artificial: <br>Aplicación de herramientas como Copilot, Claude y Gemini para acelerar el desarrollo. Exploración de flujos de trabajo asistidos por IA para aumentar la productividad y la calidad del software.</p>

        <p>Aptitudes: <br>PHP · Apis · Laravel · DevOps · Filament · Desarrollo Full Stack · Wordpress</p>       
        ';

        $data['employ'][3]['title'] = 'CEO & Technical Lead';
        $data['employ'][3]['date'] = 'may 2016 - presente';
        $data['employ'][3]['place'] = 'Aziende Global';
        $data['employ'][3]['description'] = '
        <p>✔ Liderazgo Técnico y Gestión:<br>
        Creación y dirección de equipos de desarrollo (reclutamiento, mentoría y coordinación).
        Diseño de arquitecturas escalables y toma de decisiones técnicas estratégicas.
        </p>
        <p>✔ Desarrollo Full Stack:<br>
        Aplicaciones web: Laravel (backend) + Angular (frontend), APIs REST, migraciones y seguridad.
        E-commerce: Implementación de tiendas en PrestaShop (instalación, plugins, optimización).
        </p>

        <p>✔ Operaciones y DevOps:<br>
        Configuración de servidores (Linux/WHM/cPanel), despliegues y monitoreo.
        Implementación de workflows ágiles (Jira, Bitbucket, GitHub).
        </p>
        <p> Aptitudes: <br>
        PrestaShop · PHP · jQuery · Liderazgo Técnico · Arquitectura de APIs · MySQL · Angular · api rest · Gestión de E-commerce · Bootstrap · Laravel · Desarrollo Full Stack · HTML5 · Wordpress
        </p>        
        ';


        $data['employ'][2]['title'] = 'Analista Programador Oracle PL/SQL';
        $data['employ'][2]['date'] = 'may 2011 - may 2016';
        $data['employ'][2]['place'] = 'Dicsys, Argentina';
        $data['employ'][2]['description'] = '
        <p>Desarrollo y mantenimiento de soluciones críticas para sistemas de Claro Argentina, enfocado en gestión de promociones y recargas.</p>  

        <p>Responsabilidades Clave:</p>

        <p>✔ Gestión de Promociones Masivas:
        Configuración y mantenimiento de Promo Plus, Promo Duplica/Triplica, Promo Carga Diferida. Automatización de procesos de registración de recargas (físicas/virtuales) desde múltiples canales.
        </p>
        <p>✔ Ciclo Completo de Desarrollo:
        Análisis de requisitos, diseño técnico y documentación de soluciones. Desarrollo de procedimientos, funciones y paquetes en PL/SQL (Oracle 11g/12c). Mantenimiento de Oracle Forms y APIs Java (proveedor Tecnotree).
        </p>
        <p>✔ Gestión de Proyectos:
        Seguimiento de iniciativas desde requerimientos hasta implementación. Creación de manuales y capacitación a usuarios finales. 
        </p>  
        <p>Aptitudes: <br>
        ClearQuest · Toad · API Java · Oracle Forms · JDeveloper · PL/SQL · RequisitePro · PL/SQL Developer
        </p>       
        ';


        $data['employ'][1]['title'] = 'Analista Programador Meta4 Peoplenet | Oracle PL/SQL';
        $data['employ'][1]['date'] = 'abr 2007 - may 2011';
        $data['employ'][1]['place'] = 'Gobierno de la Provincia de Córdoba, Argentina';
        $data['employ'][1]['description'] = '
        <p>Especialista en sistemas de liquidación de sueldos para la administración pública provincial.</p> 

<p>Responsabilidades Clave:</p> 

<p>✔ Desarrollo y Mantenimiento Meta4 PeopleNet:
 Modificación del Modelo de Datos y Meta4Objects para nuevas funcionalidades. Actualización de presentaciones y flujos del sistema de nómina.
</p> 
<p>✔ Análisis y Soluciones Técnicas:
 Relevamiento de requerimientos y diseño de mejoras para procesos de liquidación. Desarrollo de procedimientos almacenados y funciones en PL/SQL. Creación de consultas SQL avanzadas e informes con Crystal Reports.
</p> 
<p>✔ Documentación y Capacitación:
 Elaboración de manuales técnicos y para usuarios finales. Capacitación al personal en el uso de herramientas Meta4. 
<p>Aptitudes: <br>
Crystal Reports · Meta4 Peoplenet · SQL Avanzado · Oracle PL/SQL · Meta4 Emind · PL/SQL Developer</p>   
        ';


        $data['employ'][0]['title'] = 'Programador Web en PHP';
        $data['employ'][0]['date'] = 'mar 2006 - mar 2007';
        $data['employ'][0]['place'] = 'Santex, Argentina';
        $data['employ'][0]['description'] = '
        <p>Desarrollo y mantenimiento de soluciones web para clientes internacionales, con enfoque en comercio electrónico y aplicaciones web.</p> 

<p>Responsabilidades Clave:</p> 

<p>✔ Desarrollo Full Stack:
 Creación de funcionalidades personalizadas en PHP con framework Zend. Mantenimiento y optimización de sitios web (frontend: HTML, CSS, JavaScript; backend: PHP). Desarrollo de crawlers para extracción y procesamiento de datos.
</p> 
<p>✔ Soluciones E-commerce:
 Implementación y mantenimiento de tiendas virtuales. Integración de tecnologías AJAX para experiencias interactivas.
</p> 
<p>✔ Análisis y Mejoras Continuas:
 Recolección de requisitos y diseño de soluciones técnicas. Optimización de rendimiento y usabilidad en aplicaciones web. 
<p>Aptitudes: <br>
PHP · CSS · AJAX · MySQL · HTML · Zend Framework · JavaScript </p>  
        ';

        //
        $data['cert'][1]['title'] = 'Checkout Pro Mercado Pago';
        $data['cert'][1]['date'] = 'mar 2021';
        $data['cert'][1]['place'] = 'Mercado Pago';
        $data['cert'][1]['name'] = 'cert_d67098f4d6ea11ec80500242ac130004';
        $data['cert'][1]['link'] = 'https://www.mercadopago.com.ar/developers/panel/developer-program/certification/cert_d67098f4d6ea11ec80500242ac130004';

        $data['cert'][2]['title'] = 'WooCommerce Configuration - Mercado Pago';
        $data['cert'][2]['date'] = 'abr 2024';
        $data['cert'][2]['place'] = 'Mercado Pago';
        $data['cert'][2]['name'] = 'cert_fe364a3cfc0211eeb02a0ef34f299a4b';
        $data['cert'][2]['link'] = 'https://www.mercadopago.com.ar/developers/panel/developer-program/certification/cert_fe364a3cfc0211eeb02a0ef34f299a4b';

        //

        //
        $data['volunt'][1]['title'] = 'Mantenimiento y Desarrollo Web PHP';
        $data['volunt'][1]['date'] = 'mar 2007 - ago 2009';
        $data['volunt'][1]['place'] = 'TECHO - Argentina';
        $data['volunt'][1]['description'] = '
        <p>Participe en la administración del sitio, el cual estaba montado sobre Mambo, con base de datos MySql. </p>
        <p>Trabaje en la correción de diseño de algunas páginas, en la publicación de nuevos artículos.</p>
        <p>Además, diseñe y desarrolle script php y formularios, para la participación a eventos, y también para obtener reportes sobre las actividades de la Organización y su concurrencia.</p>
        <p> Detalle de actividades: <br>
        gestión y mantenimiento de la página web, desarrollo de scripts en PHP, manipulación de base de datos Mysql, implementación de pantallas, reportes, coordinación de actvidades, Colecta, Construcción</p>        
        ';

        return $data;
    }

    public function getPortfolio()
    {
        $data = [];

        $dataItem = [
            'title' => 'API / ENDPOINTS - BACKEND - LARAVEL',
            'description' => 'Desarrollo de una aplicación de endpoints y APIs Rest para el proyecto de Speedup, para permitir el consumo externo e interno de otras aplicaciones de la plataforma.',
            'details' => 'Se realizó la implementación de Laravel, junto con Enpoints y APIs solicitados, y una interfaz para consulta desde el navegador.',
            'cover' => 'laravel_resources_docs.png',
            'images' => ['laravel_resources_docs.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'AZNAREZ - LANDING PAGE - LARAVEL',
            'description' => 'Sitio Web oficial de Aznarez',
            'details' => 'Se maqueto el diseño en Bootstrap, y se implemento el proyecto en Laravel. Cuenta con un form de tasación estilizado.',
            'cover' => 'aznarez_1_home.png',
            'images' => ['aznarez_1_home.png', 'aznarez_2_form.png', 'aznarez_3_contacto.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'BFCR - ADMINISTRADOR - LARAVEL FILAMENT',
            'description' => 'Aplicación desarrollada en Filament, que permite administrar Proveedores, Exportadores, Productos y Compradores.',
            'details' => 'Se desarrolló con Filament, los CRUDs correspondientes (resources), se implementó páginas de listados (pages), se integró Google Maps, y se conectó la aplicación a un CRM externo para enviar y validar datos.',
            'cover' => 'bfcr_2_dashboard.png',
            'images' => ['bfcr_1_login.png', 'bfcr_2_dashboard.png', 'bfcr_3_listado.png', 'bfcr_4_edit.png', 'bfcr_5_edit_2.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'BUZZ - ADMINISTRADOR - LARAVEL',
            'description' => 'Aplicación Test que permite gestionar tickets a través de un CRUD, y externamente, a través de una API.',
            'details' => 'Se maqueto el diseño en Bootstrap, junto con Datatable y Chart.js, y al proyecto de lo implemento en Laravel. Cuenta con una API desarrollada para consumo externo, además esta conectada a la API de Giphy, para asignar automáticamente un gif.',
            'cover' => 'buzz_1_listado.png',
            'images' => ['buzz_1_listado.png', 'buzz_2_listado_filtro.png', 'buzz_3_modal.png', 'buzz_4_edit.png', 'buzz_5_dashboard.png', 'buzz_6_api.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'FIXUP - FRONTEND - LARAVEL',
            'description' => 'Frotend utilizado para brindar información acerca de la empresa, y para gestionar nuevas reparaciones de equipos automáticamente.',
            'details' => 'Fue implementado con Laravel y maquetado con Bootstrap. También, se utilizo jQuery y Javascript, para la interacción.',
            'cover' => 'fixup_home.png',
            'images' => ['fixup_home.png', 'fixup_servicio.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'FIXUP WIZARD - FRONTEND - ANGULAR ',
            'description' => 'Wizard complementario de la web de Fixup, utilizado para la registración de un equipo a reparar, por parte de un cliente, siguiendo paso a paso, los detalles para registrar el equipo a reparar y el servicio solicitado.',
            'details' => 'Se desarrollo la aplicación desde cero con Angular, y consumiendo endpoints desarrollados en Laravel, para la impresión de los datos de cada paso.',
            'cover' => 'fixup_app_pasos_1_equipos.png',
            'images' => ['fixup_app_pasos_1_equipos.png', 'fixup_app_pasos_2_marcas.png', 'fixup_app_pasos_3_modelos.png', 'fixup_app_pasos_4_fallas.png', 'fixup_app_pasos_5_form.png']
        ];

        $dataItem[] =  $dataItem;



        $dataItem = [
            'title' => 'FLAMINCO - ADMINISTRADOR - LARAVEL',
            'description' => 'Aplicación que brinda soporte para la administración de empresas.',
            'details' => 'Se integro la API de Mercado Pago, para realizar los pagos de las suscripciones automáticamente.',
            'cover' => 'flaminco_checkout.png',
            'images' => ['flaminco_checkout.png', 'flaminco_mercadopago.png', 'flaminco_success.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'SPEEDUP - ADMINISTRADOR - LARAVEL NOVA',
            'description' => 'Solución de Laravel Nova implementada para Speedup, para realizar tareas y configuraciones de super-administrador.',
            'details' => 'Se realizó la implementación de Laravel Nova, junto con varias estadísticas, filtros, imports, exports y actions.',
            'cover' => 'laravel_nova_1_login.png',
            'images' => ['laravel_nova_1_login.png', 'laravel_nova_2_dashboard.png', 'laravel_nova_3_listado.png', 'laravel_nova_4_edit.png', 'laravel_nova_5_show.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'MECHONGUE - ADMIN - LARAVEL',
            'description' => 'Aplicación web de la Cooperativa de Electricidad de Mechongue, para la gestión de facturas y comprobantes de pago.',
            'details' => ' Se desarrollo una aplicación web desde cero con Laravel, para que administradores puedan subir facturas de sus clientes, desde un panel de administración, y para que los clientes, desde un panel de cliente, puedan bajarlas y subir el comprobante de pago correspondiente.',
            'cover' => 'coop_electrica_mechongue_1_login.png',
            'images' => ['coop_electrica_mechongue_1_login.png', 'coop_electrica_mechongue_2_listado.png', 'coop_electrica_mechongue_3_detalle.png', 'coop_electrica_mechongue_4_import.png', 'coop_electrica_mechongue_5_cliente_dashboard.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'PDGSA  - ADMINISTRADOR - LARAVEL',
            'description' => 'Administrador que permite crear secciones CRUD dinámicamente, y que permite también configurar dinámicamente, los menus de usuarios',
            'details' => ' Se implemento el inicio de sesión con Google. Se desarrollo un generador de CRUD a medida, integrado a la plantilla Metronic de Laravel, que utiliza Datatable y Livewire, entre otras librerías. Se desarrollo una configuración dinámica de menú, particular para cada usuario y proyecto asociado.',
            'cover' => 'pdgsa_4_metronic_crud.png',
            'images' => ['pdgsa_1_metronic_login.png', 'pdgsa_2_metronic_dahsboard.png', 'pdgsa_3_metronic_listado.png', 'pdgsa_4_metronic_crud.png', 'pdgsa_5_metronic_edit.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'SPEEDUP - ADMINISTRADOR - LARAVEL',
            'description' => 'Speedup es una aplicación web para la gestión de reparación de equipos (smartphone, impresora, computadoras, etc.). Es utilizado por usuarios con diferentes perfiles y roles.',
            'details' => 'Se desarrollo la aplicación desde cero con Laravel, realizando la migración desde una aplicación Desktop. Se instalo una plantilla optimizada, realizando configuraciones en Bootstrap y jQuery. Se integraron varias APIs, como: Mercado Pago, Zenvia (Sirena), Oca, Correo Argentino, entre otras.',
            'cover' => 'speedup_1_login.png',
            'images' => ['speedup_1_login.png', 'speedup_2_dashboard.png', 'speedup_3_listado_reparaciones.png', 'speedup_4_detalle_reparacion.png', 'speedup_5_detalle_reparacion_modal.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'CHOCOLATE AMARGO - WORDPRESS',
            'description' => 'Web principal de Chocolate Amargo Repostería, implementada con WordPress y con WooCommerce configurado',
            'details' => 'Se instalo y configuro WordPress, junto con WooCommerce',
            'cover' => 'chocolate_amargo_1_home.png',
            'images' => ['chocolate_amargo_1_home.png', 'chocolate_amargo_2products.png', 'chocolate_amargo_3_page.png', 'chocolate_amargo_4_admin.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'KHALU - PRESTASHOP',
            'description' => 'Web principal de Khalu, implementada con PrestaShop',
            'details' => 'Se realizo upgrade de versión, se instalo y configurado un tema optimizado, se configuro transportistas, y realizaron diferentes tipos de optimizaciones.',
            'cover' => 'khalu_1_home.png',
            'images' => ['khalu_1_home.png', 'khalu_2_category.png', 'khalu_3_product.png', 'khalu_4_page.png', 'khalu_5_backoffice.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'APDI STUDIO - WORDPRESS',
            'description' => 'Web principal de APDI Estudio, implementada en WordPress y con WooCommerce configurado',
            'details' => 'Se instalo y configuró WordPress junto con WooCommerce.',
            'cover' => 'apdi_1_home.png',
            'images' => ['apdi_1_home.png', 'apdi_2_category.png', 'apdi_3_product.png', 'apdi_4_admin.png']
        ];

        $dataItem[] =  $dataItem;


        $dataItem = [
            'title' => 'AZIENDE GLOBAL - BLOG - WORDPRESS',
            'description' => 'El Blog de Aziende Global implementado en WordPress',
            'details' => 'Se instalo y configuro WordPress. Se agrego contenido, y se optimizó para SEO.',
            'cover' => 'aziende_global_blog_1_home.png',
            'images' => ['aziende_global_blog_1_home.png', 'aziende_global_blog_2_category.png', 'aziende_global_blog_3_post.png', 'aziende_global_blog_4_admin.png']
        ];

        $dataItem[] =  $dataItem;

        $dataItem = [
            'title' => 'AZIENDE GLOBAL - PRESTASHOP',
            'description' => ' Web principal de Aziende Global, implementada con PrestaShop (gestor de E-commerce)',
            'details' => 'Se instalo y configuro PrestaShop con un tema optimizado.',
            'cover' => 'aziende_global_1_home.png',
            'images' => ['aziende_global_1_home.png', 'aziende_global_2_category.png', 'aziende_global_3_category_2.png', 'aziende_global_4_product.png', 'aziende_global_5_backoffice.png']
        ];

        $dataItem[] =  $dataItem;
    }
}
