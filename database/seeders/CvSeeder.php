<?php

namespace Database\Seeders;

use App\Models\Calification;
use App\Models\CategorySkill;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\PersonalDetail;
use App\Models\Portfolio;
use App\Models\PortfolioTechnology;
use App\Models\PortfolioType;
use App\Models\Skill;
use App\Models\Volunteering;
use Illuminate\Database\Seeder;
use App\Models\Qualification;

class CvSeeder extends Seeder
{
    public function run(): void
    {
        // Personal Details
        PersonalDetail::create([
            'full_name' => 'Nicolás Alberto Fuentes',
            'headline' => 'Technical Leader | Full Stack Developer | Laravel Developer | Backend Developer',
            'photo' => 'nicolas_fuentes1.png',
            'email' => 'nicolas.a.fuentes@gmail.com',
            'whatsapp' => '5491176001198',
            'location' => 'Argentina, Ciudad de Buenos Aires',
            'location_link' => 'https://maps.app.goo.gl/xq7KdUQjTJCGZBb66',
            'birthday' => '1983-02-25',
            'civil_status' => 'Casado',
            'linkedin_url' => 'https://linkedin.com/in/nicolasalbertofuentes',
            'portfolio_url' => '/portfolio',
            'profile_summary' => '
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
        ',
        ]);

        // Skills

        //$skills = ['Laravel', 'Filament', 'PrestaShop', 'Desarrollo de aplicaciones web', 'WordPress', 'Angular', 'PHP', 'IA / AI (Copilot, Claude, Gemini)', 'Scrum', 'Kanban', 'Bitbucket', 'GitHub', 'API Rest', 'SOAP', 'Ajax', 'PuTTY', 'Unix', 'Git', 'Jira', 'Cpanel', 'WHM', 'AWS', 'Booststrap', 'CSS', 'HTML', 'JavaScript', 'jQuery', 'MySQL', 'PhpMyAdmin', 'SQL', 'XAMPP', 'Wamp', 'Trello', 'Visual Studio Code', 'Análisis de requisitos', 'Desarrollo de software', 'Servidores web', 'Base de datos', 'Líder de equipo', 'Reingeniería'];
        //foreach ($skills as $skill) {
        //    Skill::create(['name' => $skill]);
        //}


        // --- SKILLS CATEGORIZADOS ---

        // 1. Stack Tecnológico Principal (Backend)
        $catBackend = CategorySkill::create(['name' => 'Stack Tecnológico Principal (Backend)', 'order' => 1]);
        $catBackend->skills()->createMany([
            ['name' => 'PHP (Experto)', 'active' => true],
            ['name' => 'Laravel (Experto)', 'active' => true],
            ['name' => 'Filament', 'active' => true],
            ['name' => 'PrestaShop', 'active' => true],
            ['name' => 'WordPress / WooCommerce', 'active' => true],
            ['name' => 'MySQL / SQL Optimization', 'active' => true],
            ['name' => 'API Rest / SOAP', 'active' => true],
        ]);

        // 2. DevOps, Infraestructura y Control de Versiones
        $catDevops = CategorySkill::create(['name' => 'DevOps & Infraestructura', 'order' => 2]);
        $catDevops->skills()->createMany([
            ['name' => 'AWS', 'active' => true],
            ['name' => 'Unix / Linux', 'active' => true],
            ['name' => 'Git (Avanzado)', 'active' => true],
            ['name' => 'GitHub / Bitbucket', 'active' => true],
            ['name' => 'Cpanel / WHM', 'active' => true],
            ['name' => 'PuTTY', 'active' => true],
            ['name' => 'Docker', 'active' => false], // Ejemplo: oculto hasta que lo domines bien
        ]);

        // 3. Frontend (Stack Complementario)
        $catFrontend = CategorySkill::create(['name' => 'Frontend (Stack Complementario)', 'order' => 3]);
        $catFrontend->skills()->createMany([
            ['name' => 'JavaScript', 'active' => true],
            ['name' => 'HTML5 / CSS3', 'active' => true],
            ['name' => 'Bootstrap', 'active' => true],
            ['name' => 'jQuery', 'active' => true],
            ['name' => 'Angular', 'active' => true], // Evalúa si dejarlo true o false según tu nivel actual
            ['name' => 'Ajax', 'active' => true],
        ]);

        // 4. Gestión y Metodologías
        $catManagement = CategorySkill::create(['name' => 'Gestión & Metodologías', 'order' => 4]);
        $catManagement->skills()->createMany([
            ['name' => 'Scrum', 'active' => true],
            ['name' => 'Kanban', 'active' => true],
            ['name' => 'Jira', 'active' => true],
            ['name' => 'Liderazgo de equipos', 'active' => true],
            ['name' => 'IA Tools (Copilot, Claude, Gemini)', 'active' => true],
        ]);

        // 5. Herramientas Locales (Opcional / Legacy)
        $catTools = CategorySkill::create(['name' => 'Herramientas de Desarrollo', 'order' => 5]);
        $catTools->skills()->createMany([
            ['name' => 'PhpMyAdmin', 'active' => true],
            ['name' => 'Visual Studio Code', 'active' => true],
            ['name' => 'XAMPP / Wamp', 'active' => false], // Lo ponemos false por defecto según la recomendación, pero puedes cambiarlo
        ]);

        // Languages
        Language::create(['name' => 'Español', 'level' => 'Nativo']);
        Language::create(['name' => 'English', 'level' => 'Básico']);

        // Experiences
        Experience::create([
            'title' => 'Technical Leader',
            'company' => 'Buzz, Costa Rica',
            'start_date' => '2025-05-01',
            'end_date' => null,
            'description' => '
            <p>✔ Liderazgo Técnico: <br>Guía y soporte a desarrolladores en la resolución de problemas complejos (Laravel, WordPress, Filament). Revisión de código y mentoría para mantener estándares de calidad y buenas prácticas.</p> 

            <p>✔ Gestión Ágil y Planificación Estratégica: <br>Coordinación de sprints y planificación de entregas bajo metodologías ágiles (Scrum/Kanban). Desglose de tareas, estimaciones de tiempo y recursos, y facilitación de ceremonias ágiles (daily standups, retrospectivas, planning poker). Priorización de iniciativas técnicas alineadas con los objetivos del negocio.</p> 

            <p>✔ Desarrollo Estratégico: <br>Diseño de arquitecturas escalables y toma de decisiones técnicas clave. Optimización de procesos de desarrollo mediante CI/CD y automatizaciones.</p> 

            <p>✔ Gestión de Infraestructura: <br>Supervisión de servidores y entornos de despliegue, con foco en seguridad y rendimiento.</p> 

            <p>Aptitudes: <br>PHP · Liderazgo Técnico · Metodologías ágiles · Laravel · Filament · Wordpress · DevOps</p>              
            ',
        ]);

        Experience::create([
            'title' => 'Programador Full Stack Senior',
            'company' => 'Buzz, Costa Rica',
            'start_date' => '2024-06-10',
            'end_date' => '2025-04-30',
            'description' => '
        <p>✔ Desarrollo Full Stack con Laravel & Filament: <br>Desarrollo y mantenimiento de aplicaciones web escalables utilizando Laravel y Filament. Implementación de funcionalidades personalizadas, optimización de rendimiento y refactorización de código para mejorar la seguridad y mantenibilidad.</p>

        <p>✔ WordPress Avanzado: <br>Desarrollo de temas y plugins a medida, integraciones con APIs externas y configuración de sitios multilingües. Uso intensivo de ACF, Custom Post Types y taxonomías para soluciones flexibles y orientadas al cliente.</p>

        <p>✔ Gestión de Infraestructura: <br>Administración de entornos Linux y despliegue en la nube. Resolución de incidencias técnicas y planificación de mejoras en la arquitectura de servidores.</p>

        <p>✔ Innovación con Inteligencia Artificial: <br>Aplicación de herramientas como Copilot, Claude y Gemini para acelerar el desarrollo. Exploración de flujos de trabajo asistidos por IA para aumentar la productividad y la calidad del software.</p>

        <p>Aptitudes: <br>PHP · Apis · Laravel · DevOps · Filament · Desarrollo Full Stack · Wordpress</p>              
            ',
        ]);


        Experience::create([
            'title' => 'Technical Lead',
            'company' => 'Aziende Global',
            'start_date' => '2016-05-01',
            'end_date' => null,
            'description' => '
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
            ',
        ]);



        Experience::create([
            'title' => 'Analista Programador Oracle PL/SQL',
            'company' => 'Dicsys, Argentina',
            'start_date' => '2011-05-01',
            'end_date' => '2016-04-30',
            'description' => '
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
            ',
        ]);



        Experience::create([
            'title' => 'Analista Programador Meta4 Peoplenet | Oracle PL/SQL',
            'company' => 'Gobierno de la Provincia de Córdoba, Argentina',
            'start_date' => '2007-04-01',
            'end_date' => '2011-04-30',
            'description' => '
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
            ',
        ]);



        Experience::create([
            'title' => 'Programador Web en PHP',
            'company' => 'Santex, Argentina',
            'start_date' => '2006-03-15',
            'end_date' => '2007-03-15',
            'description' => '
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
            ',
        ]);


        // ... (agregar el resto de las experiencias)

        // Educations
        Education::create([
            'title' => 'Ingeniería en Sistemas de Información, Informática',
            'institution' => 'Universidad Tecnológica Nacional, Argentina',
            'start_date' => '2001-03-01',
            'end_date' => '2011-06-01',
            'description' => 'Título: Ingeniero Informático | System Engineer | Software Engineer. <br> Duración de la carrera: 5 años + 1 año de tesis',
        ]);

        // Certifications
        Certification::create([
            'title' => 'Checkout Pro Mercado Pago',
            'institution' => 'Mercado Pago',
            'year' => 2021,
            'url' => 'https://www.mercadopago.com.ar/developers/panel/developer-program/certification/cert_d67098f4d6ea11ec80500242ac130004',
        ]);

        Certification::create([
            'title' => 'WooCommerce Configuration - Mercado Pago',
            'institution' => 'Mercado Pago',
            'year' => 2024,
            'url' => 'https://www.mercadopago.com.ar/developers/panel/developer-program/certification/cert_fe364a3cfc0211eeb02a0ef34f299a4b',
        ]);
        // ... (agregar el resto de las certificaciones)

        // Volunteerings
        Volunteering::create([
            'title' => 'Mantenimiento y Desarrollo Web PHP',
            'organization' => 'TECHO - Argentina',
            'start_date' => '2007-03-01',
            'end_date' => '2009-08-01',
            'description' => '
            <p>Participe en la administración del sitio, el cual estaba montado sobre Mambo, con base de datos MySql. </p>
        <p>Trabaje en la correción de diseño de algunas páginas, en la publicación de nuevos artículos.</p>
        <p>Además, diseñe y desarrolle script php y formularios, para la participación a eventos, y también para obtener reportes sobre las actividades de la Organización y su concurrencia.</p>
        <p> Detalle de actividades: <br>
        gestión y mantenimiento de la página web, desarrollo de scripts en PHP, manipulación de base de datos Mysql, implementación de pantallas, reportes, coordinación de actvidades, Colecta, Construcción</p>      
        ',
        ]);




        // --- PORTFOLIO ---

        PortfolioType::create([
            'id' => 1,
            'name' => 'Backend',
        ]);

        PortfolioType::create([
            'id' => 2,
            'name' => 'Frontend',
        ]);

        PortfolioType::create([
            'id' => 3,
            'name' => 'Api / Endpoints',
        ]);



        PortfolioTechnology::create([
            'id' => 1,
            'name' => 'Laravel',
        ]);

        PortfolioTechnology::create([
            'id' => 2,
            'name' => 'WordPress',
        ]);

        PortfolioTechnology::create([
            'id' => 3,
            'name' => 'PrestaShop',
        ]);
        PortfolioTechnology::create([
            'id' => 4,
            'name' => 'Filament',
        ]);

        PortfolioTechnology::create([
            'id' => 5,
            'name' => 'Angular',
        ]);

        PortfolioTechnology::create([
            'id' => 6,
            'name' => 'Laravel Nova',
        ]);


        //1. Proyectos de Alta Complejidad (Highlight)-------------------


        $p = Portfolio::create([
            'title' => 'CosteApp: Plataforma SaaS de Gestión de Costos - Laravel Filament',
            'portfolio_technology_id' => 4,
            'portfolio_type_id' => 1,
            'description' => 'Plataforma SaaS (Software as a Service) Cloud-Native diseñada para la inteligencia financiera de PyMEs, transformando hojas de cálculo complejas en flujos de trabajo automatizados y escalables.',
            'details' => 'Desarrollo rápido de aplicaciones (RAD) utilizando el ecosistema Filament PHP (TALL Stack). Diseño de algoritmos de cálculo de costos unitarios y rentabilidad en tiempo real. Arquitectura optimizada para reemplazar procesos manuales (Excel Legacy) por una solución centralizada en la nube, garantizando la integridad de los datos y la toma de decisiones basada en métricas precisas.',
            'cover_image' => 'costeapp_1_dashboard.png',
            'priority' => 1,
        ]);
        $p->images()->createMany([
            ['image_path' => 'costeapp_1_dashboard.png'],
            ['image_path' => 'costeapp_2_dashboard.png'],
            ['image_path' => 'costeapp_3_dashboard.png'],
            ['image_path' => 'costeapp_4_listado.png'],
            ['image_path' => 'costeapp_5_detalle.png'],
            ['image_path' => 'costeapp_6_login.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Advanced Map Markers: Módulo de Geolocalización - PrestaShop',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'Solución modular Plug & Play para la geolocalización estratégica de puntos de venta, eventos y distribuidores dentro del ecosistema PrestaShop.',
            'details' => 'Desarrollo de arquitectura modular nativa siguiendo los estándares estrictos de PrestaShop. Integración avanzada con Google Maps Platform API permitiendo personalización visual completa (JSON Styling). Panel de administración "No-Code" para la gestión dinámica de POIs (Puntos de Interés). Implementación de Hooks personalizados para una inyección flexible en el frontend sin dependencias de código.',
            'cover_image' => 'advancedmapmarkers_1_front.png',
            'priority' => 1,
        ]);
        $p->images()->createMany([
            ['image_path' => 'advancedmapmarkers_2_backend.png'],
            ['image_path' => 'advancedmapmarkers_3_backend.png'],
            ['image_path' => 'advancedmapmarkers_4_backend.png'],
            ['image_path' => 'advancedmapmarkers_5_backend.png'],
            ['image_path' => 'advancedmapmarkers_6_backend.png'],
            ['image_path' => 'advancedmapmarkers_7_backend.png'],
            ['image_path' => 'advancedmapmarkers_8_backend.png'],
            ['image_path' => 'advancedmapmarkers_1_front.png'],

        ]);


        $p = Portfolio::create([
            'title' => 'Speedup: Administrador de Reparaciones - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Plataforma SaaS integral para la gestión operativa de servicios técnicos (SAT), migrada desde una arquitectura Legacy Desktop a la Nube.',
            'details' => 'Arquitectura monolítica modular en Laravel. Migración completa de datos y lógica de negocio desde software de escritorio. Integración de ecosistema de APIs (Logística, Pagos, Notificaciones Omnicanal). Diseño de flujos de trabajo complejos para gestión de estados de reparación en tiempo real.',
            'cover_image' => 'speedup_1_login.png',
            'priority' => 7,
        ]);
        $p->images()->createMany([
            ['image_path' => 'speedup_1_login.png'],
            ['image_path' => 'speedup_2_dashboard.png'],
            ['image_path' => 'speedup_3_listado_reparaciones.png'],
            ['image_path' => 'speedup_4_detalle_reparacion.png'],
            ['image_path' => 'speedup_5_detalle_reparacion_modal.png'],
        ]);




        $p = Portfolio::create([
            'title' => 'Speedup: APIs - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 3,
            'description' => 'Arquitectura API RESTful escalable diseñada para desacoplar el núcleo de negocio y permitir la interconexión entre múltiples interfaces (Web, Móvil, Terceros).',
            'details' => 'Diseño de endpoints bajo estándar JSON:API. Implementación de seguridad vía Tokens (Sanctum/Passport) y Rate Limiting. Optimización de respuestas mediante Eager Loading y Caching. Documentación técnica para consumo de equipos externos e internos.',
            'cover_image' => 'laravel_resources_docs.png',
            'priority' => 12,
        ]);
        $p->images()->createMany([
            ['image_path' => 'laravel_resources_docs.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Speedup: Administrador - Laravel Nova',
            'portfolio_technology_id' => 6,
            'portfolio_type_id' => 1,
            'description' => 'Panel de Super-Administración centralizado para la gestión multi-tenant de la plataforma Speedup.',
            'details' => 'Implementación avanzada de Laravel Nova para gestión de recursos críticos. Desarrollo de Custom Tools y Metrics para análisis de datos en tiempo real. Configuración de sistema de Roles y Permisos (ACL) granular para control de acceso jerárquico.',
            'cover_image' => 'laravel_nova_1_login.png',
            'priority' => 13,
        ]);
        $p->images()->createMany([
            ['image_path' => 'laravel_nova_1_login.png'],
            ['image_path' => 'laravel_nova_2_dashboard.png'],
            ['image_path' => 'laravel_nova_3_listado.png'],
            ['image_path' => 'laravel_nova_4_edit.png'],
            ['image_path' => 'laravel_nova_5_show.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'PDGSA: Administrador de Proyectos - Laravel Livewire',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Framework interno para la generación dinámica de paneles administrativos (CRUDs) y gestión de permisos en tiempo de ejecución.',
            'details' => 'Desarrollo de un motor de generación de interfaces basado en Metronic y Livewire. Implementación de lógica dinámica para la construcción de menús y rutas basada en perfiles de usuario. Integración de autenticación social (OAuth) y componentes reactivos para manipulación de datos masivos.',
            'cover_image' => 'pdgsa_4_metronic_crud.png',
            'priority' => 4,
        ]);
        $p->images()->createMany([
            ['image_path' => 'pdgsa_4_metronic_crud.png'],
            ['image_path' => 'pdgsa_1_metronic_login.png'],
            ['image_path' => 'pdgsa_2_metronic_dashboard.png'],
            ['image_path' => 'pdgsa_3_metronic_listado.png'],
            ['image_path' => 'pdgsa_5_metronic_edit.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Fixup: Wizard de Reparación - Angular',
            'portfolio_technology_id' => 5,
            'portfolio_type_id' => 2,
            'description' => 'SPA (Single Page Application) orientada a la conversión, diseñada como un Wizard interactivo para la autogestión de clientes.',
            'details' => 'Desarrollo Frontend en Angular con gestión de estado compleja. Consumo de APIs RESTful de Laravel. Implementación de validaciones asíncronas y lógica de negocio en el cliente para guiar al usuario. Enfoque Mobile-First y optimización de tiempos de carga.',
            'cover_image' => 'fixup_app_pasos_1_equipos.png',
            'priority' => 14,
        ]);
        $p->images()->createMany([
            ['image_path' => 'fixup_app_pasos_1_equipos.png'],
            ['image_path' => 'fixup_app_pasos_2_marcas.png'],
            ['image_path' => 'fixup_app_pasos_3_modelos.png'],
            ['image_path' => 'fixup_app_pasos_4_fallas.png'],
            ['image_path' => 'fixup_app_pasos_4_form.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Turisopen: Administrador - Filament Laravel',
            'portfolio_technology_id' => 4,
            'portfolio_type_id' => 1,
            'description' => 'ERP vertical para la industria turística enfocado en la gestión financiera y operativa de reservas y proveedores.',
            'details' => 'Modelado de datos complejo para manejar la lógica de reservas, pagos a proveedores y conciliación de cobros. Automatización de flujos operativos y generación de documentación financiera automática.',
            'cover_image' => 'turisopen_2_listado.png',
            'priority' => 2,
        ]);
        $p->images()->createMany([
            ['image_path' => 'turisopen_0_login.png'],
            ['image_path' => 'turisopen_1_dashboard.png'],
            ['image_path' => 'turisopen_2_listado.png'],
            ['image_path' => 'turisopen_3_detalle.png'],
            ['image_path' => 'turisopen_4_detalle.png'],
            ['image_path' => 'turisopen_5_detalle.png'],
            ['image_path' => 'turisopen_6_usuarios.png'],
            ['image_path' => 'turisopen_7_roles.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'BFCR: Administrador - Filament Laravel',
            'portfolio_technology_id' => 4,
            'portfolio_type_id' => 1,
            'description' => 'Sistema de gestión B2B (Backoffice) para la trazabilidad de la cadena de suministro entre proveedores y exportadores.',
            'details' => 'Desarrollo ágil utilizando el stack TALL (Tailwind, Alpine, Laravel, Livewire) a través de Filament PHP. Sincronización bidireccional con CRM externo vía API. Implementación de geolocalización de entidades y reportes dinámicos.',
            'cover_image' => 'bfcr_2_dashboard.png',
            'priority' => 5,
        ]);
        $p->images()->createMany([
            ['image_path' => 'bfcr_1_login.png'],
            ['image_path' => 'bfcr_2_dashboard.png'],
            ['image_path' => 'bfcr_3_listado.png'],
            ['image_path' => 'bfcr_4_edit.png'],
            ['image_path' => 'bfcr_5_edit_2.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Flaminco: Administrador - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Sistema de gestión administrativa (SaaS) con automatización de facturación y suscripciones.',
            'details' => 'Integración robusta con la API de Mercado Pago para gestión de recurrencia (Suscripciones). Automatización de estados de cuenta de clientes y proveedores. Panel de control para monitoreo de métricas de negocio.',
            'cover_image' => 'flaminco_checkout.png',
            'priority' => 7,
        ]);
        $p->images()->createMany([
            ['image_path' => 'flaminco_checkout.png'],
            ['image_path' => 'flaminco_mercadopago.png'],
            ['image_path' => 'flaminco_success.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Fixup: Plataforma Corporativa & Integración CRM- Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 2,
            'description' => 'Portal digital de captación de clientes y automatización de solicitudes de servicio técnico, integrado en tiempo real al ecosistema operativo de la empresa.',
            'details' => 'Arquitectura Web diseñada para la conversión. Desarrollo de capas de integración para la inyección automática de leads y tickets de reparación hacia un CRM externo, eliminando la carga manual de datos. Implementación de validaciones de negocio en el frontend (jQuery/JS) para asegurar la integridad de la información antes del procesamiento.',
            'cover_image' => 'fixup_home.png',
            'priority' => 17,
        ]);
        $p->images()->createMany([
            ['image_path' => 'fixup_home.png'],
            ['image_path' => 'fixup_servicio.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'Mechongue: Portal de Autogestión & Facturación Digital - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Plataforma de transformación digital para el sector de Utilities (Servicios Públicos), enfocada en la digitalización del ciclo de facturación y cobranza de la cooperativa.',
            'details' => 'Desarrollo de un Portal de Autogestión (Self-Service) seguro para abonados. Sistema de gestión documental robusto para la distribución masiva de facturación y recepción digital de comprobantes de pago. Implementación de estricto control de acceso (ACL) para segregar la operatoria administrativa de la experiencia del cliente final.',
            'cover_image' => 'coop_electrica_mechongue_1_login.png',
            'priority' => 22,
        ]);
        $p->images()->createMany([
            ['image_path' => 'coop_electrica_mechongue_1_login.png'],
            ['image_path' => 'coop_electrica_mechongue_2_listado.png'],
            ['image_path' => 'coop_electrica_mechongue_3_detalle.png'],
            ['image_path' => 'coop_electrica_mechongue_4_import.png'],
            ['image_path' => 'coop_electrica_mechongue_5_cliente_dashboard.png'],
        ]);


        //2. E-commerce y Plataformas (PrestaShop / WordPress )--------------------------


        $p = Portfolio::create([
            'title' => 'Buro de Juegos - PrestaShop',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'E-commerce mayorista de alto tráfico. Recuperación de desastres (Disaster Recovery), securización y optimización de infraestructura.',
            'details' => 'Reingeniería de la plataforma tras incidente de seguridad (Malware). Migración segura de base de datos y actualización de Core. Implementación de estrategias de caché y optimización de consultas SQL para mejorar el Time-to-First-Byte (TTFB) y la experiencia de usuario.',
            'cover_image' => 'buro_1_home.png',
            'priority' => 31,
        ]);
        $p->images()->createMany([
            ['image_path' => 'buro_1_home.png'],
            ['image_path' => 'buro_2_category.png'],
            ['image_path' => 'buro_3_product.png'],
            ['image_path' => 'buro_4_backoffice.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Shopping para Mascotas - PrestaShop',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'Marketplace de productos para mascotas con enfoque en UX y geolocalización de sucursales.',
            'details' => 'Desarrollo de módulos personalizados (Google Maps Store Locator). Hardening de seguridad y actualización de stack tecnológico. Optimización de Core Web Vitals y rediseño completo de la interfaz de usuario (UI).',
            'cover_image' => 'shoppingmascotas_1_home.png',
            'priority' => 30,
        ]);
        $p->images()->createMany([
            ['image_path' => 'shoppingmascotas_1_home.png'],
            ['image_path' => 'shoppingmascotas_2_category.png'],
            ['image_path' => 'shoppingmascotas_3_product.png'],
            ['image_path' => 'shoppingmascotas_4_page.png'],
            ['image_path' => 'shoppingmascotas_5_backoffice.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Khalu: Ecommerce - PrestaShop',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'Plataforma de comercio electrónico optimizada para conversión y logística compleja.',
            'details' => 'Personalización avanzada de plantilla y módulos. Configuración de reglas de negocio para logística y transportistas. Refactorización de código legado tras upgrade de versión para asegurar compatibilidad y estabilidad del sistema.',
            'cover_image' => 'khalu_1_home.png',
            'priority' => 32,
        ]);
        $p->images()->createMany([
            ['image_path' => 'khalu_1_home.png'],
            ['image_path' => 'khalu_2_category.png'],
            ['image_path' => 'khalu_3_product.png'],
            ['image_path' => 'khalu_4_page.png'],
            ['image_path' => 'khalu_5_backoffice.png'],
        ]);

        //3. Sitios Corporativos y Proyectos Menores---------------

        $p = Portfolio::create([
            'title' => 'Aznarez: Web Corporativa - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 2,
            'description' => 'Landing Page corporativa de alto rendimiento con motor de tasación inmobiliaria integrado.',
            'details' => 'Desarrollo a medida en Laravel (sin CMS) para máxima velocidad y seguridad. Implementación de lógica de negocio personalizada para el formulario de tasación. Arquitectura MVC limpia y optimización SEO técnica on-page.',
            'cover_image' => 'aznarez_1_home.png',
            'priority' => 50,
        ]);
        $p->images()->createMany([
            ['image_path' => 'aznarez_1_home.png'],
            ['image_path' => 'aznarez_2_form.png'],
            ['image_path' => 'aznarez_3_contacto.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Buzz: Administrador - Laravel',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Prototipo funcional de sistema de Help Desk (Ticketing) con enriquecimiento de contenido multimedia.',
            'details' => 'Desarrollo Full Stack (Laravel + Bootstrap). Integración de API de terceros (Giphy) para automatización de respuestas visuales. Diseño de base de datos relacional para trazabilidad de tickets.',
            'cover_image' => 'buzz_1_listado.png',
            'priority' => 51,
        ]);
        $p->images()->createMany([
            ['image_path' => 'buzz_1_listado.png'],
            ['image_path' => 'buzz_2_listado_filtro.png'],
            ['image_path' => 'buzz_3_modal.png'],
            ['image_path' => 'buzz_4_edit.png'],
            ['image_path' => 'buzz_5_dashboard.png'],
            ['image_path' => 'buzz_6_api.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Chocolate Amargo: Branding & Web Corporativa - WordPress',
            'portfolio_technology_id' => 2,
            'portfolio_type_id' => 2,
            'description' => 'Plataforma digital enfocada en Brand Awareness y captación de clientes para el sector gastronómico, con catálogo de productos integrado.',
            'details' => 'Implementación de estrategia de diseño Mobile-First para maximizar la conversión en dispositivos móviles. Personalización avanzada de tema (Child Theme) para alineación estricta con la identidad de marca. Optimización de imágenes y caché para alto rendimiento (Core Web Vitals) y configuración de SEO Local para posicionamiento geográfico.',
            'cover_image' => 'chocolate_amargo_1_home.png',
            'priority' => 60,
        ]);
        $p->images()->createMany([
            ['image_path' => 'chocolate_amargo_1_home.png'],
            ['image_path' => 'chocolate_amargo_2_products.png'],
            ['image_path' => 'chocolate_amargo_3_page.png'],
            ['image_path' => 'chocolate_amargo_4_admin.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Studio APDI: E-commerce de Activos Digitales - WordPress',
            'portfolio_technology_id' => 2,
            'portfolio_type_id' => 2,
            'description' => 'Solución de comercio electrónico configurada específicamente para la venta y distribución automatizada de productos digitales y servicios de diseño.',
            'details' => 'Configuración de WooCommerce para manejo de productos virtuales y descargables con protección de enlaces. Integración de pasarelas de pago con validación de transacciones en tiempo real. Automatización de correos transaccionales para la entrega inmediata de activos digitales post-compra.',
            'cover_image' => 'apdi_1_home.png',
            'priority' => 61,
        ]);
        $p->images()->createMany([
            ['image_path' => 'apdi_1_home.png'],
            ['image_path' => 'apdi_2_category.png'],
            ['image_path' => 'apdi_3_product.png'],
            ['image_path' => 'apdi_4_admin.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Aziende Dev: Plataforma de Contenidos Técnicos - WordPress',
            'portfolio_technology_id' => '2',
            'portfolio_type_id' => '2',
            'description' => 'Hub de contenidos y blog corporativo diseñado para el posicionamiento orgánico (SEO) en nichos tecnológicos y desarrollo de software.',
            'details' => 'Arquitectura de información optimizada para la indexación. Implementación de Marcado de Esquema (Schema.org) para artículos técnicos y fragmentos enriquecidos. Optimización de la legibilidad y estructura semántica del contenido. Configuración de seguridad (Hardening) para protección contra ataques comunes en CMS.',
            'cover_image' => 'aziende_global_blog_1_home.png',
            'priority' => 71,
        ]);
        $p->images()->createMany([
            ['image_path' => 'aziende_global_blog_1_home.png'],
            ['image_path' => 'aziende_global_blog_2_category.png'],
            ['image_path' => 'aziende_global_blog_3_post.png'],
            ['image_path' => 'aziende_global_blog_4_admin.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Aziende Web: Portal Corporativo & Catálogo B2B - PrestaShop',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'Portal corporativo orientado a la oferta de servicios profesionales y soluciones empresariales, funcionando como motor de generación de leads.',
            'details' => 'Implementación de PrestaShop en modo catálogo/híbrido para la exhibición de servicios sin checkout directo. Diseño de taxonomías personalizadas para categorización de soluciones de IT. Optimización de Call-to-Actions (CTAs) y formularios de contacto para maximizar el ratio de conversión de visitantes a prospectos comerciales.',
            'cover_image' => 'aziende_global_1_home.png',
            'priority' => 72,
        ]);
        $p->images()->createMany([
            ['image_path' => 'aziende_global_1_home.png'],
            ['image_path' => 'aziende_global_2_category.png'],
            ['image_path' => 'aziende_global_3_category_2.png'],
            ['image_path' => 'aziende_global_4_product.png'],
            ['image_path' => 'aziende_global_5_backoffice.png'],
        ]);






        // 1. Workana
        $q = Qualification::create([
            'title' => 'EXPERIENCIA: WORKANA.COM',
            'cover_image' => 'calification-workana-nicolasfuentes-aziende-dev-2.webp',
        ]);
        $q->images()->createMany([
            ['image_url' => 'calification-workana-nicolasfuentes-aziende-dev-2.webp'],
        ]);

        // 2. Freelancer.com
        $q = Qualification::create([
            'title' => 'EXPERIENCIA: FREELANCER.COM',
            'cover_image' => 'calification-freelancer-u-nicolasfuentes-reviews-aziende-dev.webp',
        ]);
        $q->images()->createMany([
            ['image_url' => 'calification-freelancer-u-nicolasfuentes-reviews-aziende-dev.webp'],
        ]);

        // 3. Facebook
        $q = Qualification::create([
            'title' => 'EXPERIENCIA: FACEBOOK',
            'cover_image' => 'calification-facebook-opiniones-nicolasfuentes-aziende-dev-1.webp',
        ]);
        $q->images()->createMany([
            ['image_url' => 'calification-facebook-opiniones-nicolasfuentes-aziende-dev-1.webp'],
            ['image_url' => 'calification-facebook-opiniones-nicolasfuentes-aziende-dev-2.webp'],
        ]);
    }
}
