<?php

namespace Database\Seeders;

use App\Models\Calification;
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
        $skills = ['Laravel', 'Filament', 'PrestaShop', 'Desarrollo de aplicaciones web', 'WordPress', 'Angular', 'PHP', 'IA / AI (Copilot, Claude, Gemini)', 'Scrum', 'Kanban', 'Bitbucket', 'GitHub', 'API Rest', 'SOAP', 'Ajax', 'PuTTY', 'Unix', 'Git', 'Jira', 'Cpanel', 'WHM', 'AWS', 'Booststrap', 'CSS', 'HTML', 'JavaScript', 'jQuery', 'MySQL', 'PhpMyAdmin', 'SQL', 'XAMPP', 'Wamp', 'Trello', 'Visual Studio Code', 'Análisis de requisitos', 'Desarrollo de software', 'Servidores web', 'Base de datos', 'Líder de equipo', 'Reingeniería'];
        foreach ($skills as $skill) {
            Skill::create(['name' => $skill]);
        }

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





        $p = Portfolio::create([
            'title' => 'Studio APDI',
            'portfolio_technology_id' => 2,
            'portfolio_type_id' => 2,
            'description' => 'Web principal de APDI Estudio, implementada en WordPress y con WooCommerce configurado para la venta de productos digitales.',
            'details' => 'Se instalo y configuró WordPress junto con WooCommerce. Se diseño y maquetó el sitio en base a un diseño preexistente, adaptándolo a las necesidades del cliente. Se configuraron pasarelas de pago y productos digitales para la venta online.',
            'cover_image' => 'apdi_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'apdi_1_home.png'],
            ['image_path' => 'apdi_2_category.png'],
            ['image_path' => 'apdi_3_product.png'],
            ['image_path' => 'apdi_4_admin.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Speedup - Repositorio de APIs',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 3,
            'description' => 'Desarrollo de una aplicación de endpoints y APIs Rest para el proyecto de Speedup, para permitir el consumo externo e interno de otras aplicaciones de la plataforma.',
            'details' => 'Se realizó la implementación de Laravel, junto con Enpoints y APIs solicitados, y una interfaz para consulta desde el navegador. Se implementaron autenticación por token, paginación, filtros y búsquedas. Se documentaron los endpoints para facilitar su uso por terceros.',
            'cover_image' => 'laravel_resources_docs.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'laravel_resources_docs.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Aziende Dev - Blog Corporativo',
            'portfolio_technology_id' => '2',
            'portfolio_type_id' => '2',
            'description' => 'El Blog de Aziende Global implementado en WordPress, con diseño personalizado y optimización SEO.',
            'details' => 'Se instalo y configuro WordPress. Se agrego contenido, y se optimizó para SEO. Se diseño y maquetó el sitio en base a un diseño preexistente, adaptándolo a las necesidades del cliente.',
            'cover_image' => 'aziende_global_blog_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'aziende_global_blog_1_home.png'],
            ['image_path' => 'aziende_global_blog_2_category.png'],
            ['image_path' => 'aziende_global_blog_3_post.png'],
            ['image_path' => 'aziende_global_blog_4_admin.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Aziende Web',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => ' Web principal de Aziende Global, implementada en PrestaShop y con catálogo de productos y servicios.',
            'details' => 'Se instalo y configuro PrestaShop con un tema optimizado. Se agrego contenido, productos y se optimizó para SEO. Se diseño y maquetó el sitio en base a un diseño preexistente, adaptándolo a las necesidades del cliente.',
            'cover_image' => 'aziende_global_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'aziende_global_1_home.png'],
            ['image_path' => 'aziende_global_2_category.png'],
            ['image_path' => 'aziende_global_3_category_2.png'],
            ['image_path' => 'aziende_global_4_product.png'],
            ['image_path' => 'aziende_global_5_backoffice.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'Aznarez - Web Corporativa',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 2,
            'description' => 'Sitio Web oficial de Aznarez',
            'details' => 'Se maqueto el diseño en Bootstrap, y se implemento el proyecto en Laravel. Cuenta con un form de tasación estilizado. Se optimizó para SEO y performance.',
            'cover_image' => 'aznarez_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'aznarez_1_home.png'],
            ['image_path' => 'aznarez_2_form.png'],
            ['image_path' => 'aznarez_3_contacto.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'BFCR - Administrador',
            'portfolio_technology_id' => 4,
            'portfolio_type_id' => 1,
            'description' => 'Aplicación desarrollada en Filament, que permite administrar Proveedores, Exportadores, Productos y Compradores. Cuenta con autenticación, roles y permisos.',
            'details' => 'Se desarrolló con Filament, los CRUDs correspondientes (resources), se implementó páginas de listados (pages), se integró Google Maps, y se conectó la aplicación a un CRM externo para enviar y validar datos.',
            'cover_image' => 'bfcr_2_dashboard.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'bfcr_1_login.png'],
            ['image_path' => 'bfcr_2_dashboard.png'],
            ['image_path' => 'bfcr_3_listado.png'],
            ['image_path' => 'bfcr_4_edit.png'],
            ['image_path' => 'bfcr_5_edit_2.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Buzz - Administrador de Tickets',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Aplicación Test que permite gestionar tickets a través de un CRUD, y externamente, a través de una API.',
            'details' => 'Se maqueto el diseño en Bootstrap, junto con Datatable y Chart.js, y al proyecto de lo implemento en Laravel. Cuenta con una API desarrollada para consumo externo, además esta conectada a la API de Giphy, para asignar automáticamente un gif.',
            'cover_image' => 'buzz_1_listado.png',
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
            'title' => 'Chocolate Amargo - Web Corporativa',
            'portfolio_technology_id' => 2,
            'portfolio_type_id' => 2,
            'description' => 'Web principal de Chocolate Amargo Repostería, implementada con WordPress y con WooCommerce configurado para la venta de tortas.',
            'details' => 'Se instalo y configuro WordPress, junto con WooCommerce. Se agrego contenido, y se optimizó para SEO. Se diseño y maquetó el sitio en base a un diseño preexistente, adaptándolo a las necesidades del cliente. Se configuraron pasarelas de pago y productos para la venta online.',
            'cover_image' => 'chocolate_amargo_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'chocolate_amargo_1_home.png'],
            ['image_path' => 'chocolate_amargo_2_products.png'],
            ['image_path' => 'chocolate_amargo_3_page.png'],
            ['image_path' => 'chocolate_amargo_4_admin.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'Fixup - Web Corporativa',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 2,
            'description' => 'Frotend utilizado para brindar información acerca de la empresa, y para gestionar nuevas reparaciones de equipos automáticamente.',
            'details' => 'Fue implementado con Laravel y maquetado con Bootstrap. También, se utilizo jQuery y Javascript, para la interacción. Se optimizó para SEO y performance. Cuenta con un form de contacto y un form de gestión de reparaciones, que envía los datos a un CRM externo.',
            'cover_image' => 'fixup_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'fixup_home.png'],
            ['image_path' => 'fixup_servicio.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'Fixup - Wizard de Reparación',
            'portfolio_technology_id' => 5,
            'portfolio_type_id' => 2,
            'description' => 'Wizard complementario de la web de Fixup, utilizado para la registración de un equipo a reparar, por parte de un cliente, siguiendo paso a paso, los detalles para registrar el equipo a reparar y el servicio solicitado. Luego, envía los datos a un CRM externo.',
            'details' => 'Se desarrollo la aplicación desde cero con Angular, y consumiendo endpoints desarrollados en Laravel, para la impresión de los datos de cada paso. Se maquetó con Bootstrap, y se optimizó para SEO y performance.',
            'cover_image' => 'fixup_app_pasos_1_equipos.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'fixup_app_pasos_1_equipos.png'],
            ['image_path' => 'fixup_app_pasos_2_marcas.png'],
            ['image_path' => 'fixup_app_pasos_3_modelos.png'],
            ['image_path' => 'fixup_app_pasos_4_fallas.png'],
            ['image_path' => 'fixup_app_pasos_4_form.png'],
        ]);



        $p = Portfolio::create([
            'title' => 'Flaminco - Administrador',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Aplicación que brinda soporte para la administración de empresas. Permite gestionar Clientes, Proveedores, Productos, Servicios y Facturas.',
            'details' => 'Se integro la API de Mercado Pago, para realizar los pagos de las suscripciones automáticamente.',
            'cover_image' => 'flaminco_checkout.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'flaminco_checkout.png'],
            ['image_path' => 'flaminco_mercadopago.png'],
            ['image_path' => 'flaminco_success.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'Khalu - Ecommerce',
            'portfolio_technology_id' => 3,
            'portfolio_type_id' => 2,
            'description' => 'Web principal de Khalu, implementada en PrestaShop y con catálogo de productos.',
            'details' => 'Se realizo upgrade de versión, se instalo y configurado un tema optimizado, se configuro transportistas, y realizaron diferentes tipos de optimizaciones.',
            'cover_image' => 'khalu_1_home.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'khalu_1_home.png'],
            ['image_path' => 'khalu_2_category.png'],
            ['image_path' => 'khalu_3_product.png'],
            ['image_path' => 'khalu_4_page.png'],
            ['image_path' => 'khalu_5_backoffice.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Speedup - Administrador de configuración',
            'portfolio_technology_id' => 6,
            'portfolio_type_id' => 1,
            'description' => 'Solución de Laravel Nova implementada para Speedup, para realizar tareas y configuraciones de super-administrador. Permite gestionar Usuarios, Roles, Permisos, Sucursales, y otros recursos clave.',
            'details' => 'Se realizó la implementación de Laravel Nova, junto con varias estadísticas, filtros, imports, exports y actions. Se integró con un sistema de autenticación SSO externo, y se implementaron roles y permisos personalizados.',
            'cover_image' => 'laravel_nova_1_login.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'laravel_nova_1_login.png'],
            ['image_path' => 'laravel_nova_2_dashboard.png'],
            ['image_path' => 'laravel_nova_3_listado.png'],
            ['image_path' => 'laravel_nova_4_edit.png'],
            ['image_path' => 'laravel_nova_5_show.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Mechongue - Administrador',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Aplicación web de la Cooperativa de Electricidad de Mechongue, para la gestión de facturas y comprobantes de pago. Permite administrar Clientes, Facturas, Pagos y Reportes.',
            'details' => 'Se desarrollo una aplicación web desde cero con Laravel, para que administradores puedan subir facturas de sus clientes, desde un panel de administración, y para que los clientes, desde un panel de cliente, puedan bajarlas y subir el comprobante de pago correspondiente.',
            'cover_image' => 'coop_electrica_mechongue_1_login.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'coop_electrica_mechongue_1_login.png'],
            ['image_path' => 'coop_electrica_mechongue_2_listado.png'],
            ['image_path' => 'coop_electrica_mechongue_3_detalle.png'],
            ['image_path' => 'coop_electrica_mechongue_4_import.png'],
            ['image_path' => 'coop_electrica_mechongue_5_cliente_dashboard.png'],
        ]);


        $p = Portfolio::create([
            'title' => 'PDGSA - Administrador de Proyectos',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Administrador que permite crear secciones CRUD dinámicamente, y que permite también configurar dinámicamente, los menus de usuarios y administradores.',
            'details' => 'Se implemento el inicio de sesión con Google. Se desarrollo un generador de CRUD a medida, integrado a la plantilla Metronic de Laravel, que utiliza Datatable y Livewire, entre otras librerías. Se desarrollo una configuración dinámica de menú, particular para cada usuario y proyecto asociado.',
            'cover_image' => 'pdgsa_4_metronic_crud.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'pdgsa_4_metronic_crud.png'],
            ['image_path' => 'pdgsa_1_metronic_login.png'],
            ['image_path' => 'pdgsa_2_metronic_dashboard.png'],
            ['image_path' => 'pdgsa_3_metronic_listado.png'],
            ['image_path' => 'pdgsa_5_metronic_edit.png'],
        ]);

        $p = Portfolio::create([
            'title' => 'Speedup - Administrador de Reparaciones',
            'portfolio_technology_id' => 1,
            'portfolio_type_id' => 1,
            'description' => 'Speedup es una aplicación web para la gestión de reparación de equipos (smartphone, impresora, computadoras, etc.). Es utilizado por usuarios con diferentes perfiles y roles.',
            'details' => 'Se desarrollo la aplicación desde cero con Laravel, realizando la migración desde una aplicación Desktop. Se instalo una plantilla optimizada, realizando configuraciones en Bootstrap y jQuery. Se integraron varias APIs, como: Mercado Pago, Zenvia (Sirena), Oca, Correo Argentino, entre otras.',
            'cover_image' => 'speedup_1_login.png',
        ]);
        $p->images()->createMany([
            ['image_path' => 'speedup_1_login.png'],
            ['image_path' => 'speedup_2_dashboard.png'],
            ['image_path' => 'speedup_3_listado_reparaciones.png'],
            ['image_path' => 'speedup_4_detalle_reparacion.png'],
            ['image_path' => 'speedup_5_detalle_reparacion_modal.png'],
        ]);



        // Califications
        Calification::create([
            'title' => 'Workana.com - Perfil de Freelance',
            'description' => '<img src="/screencapture-workana-freelancer-2.png"> <br> Calificación: 5.0 | Proyectos completados: 50+ | Comentarios: 20+',
            'image_path' => 'screencapture-workana-freelancer-2.png',
        ]);

        Calification::create([
            'title' => 'Freelancer.com - Perfil de Freelance',
            'description' => '<img src="/screencapture-freelancer-u-nicolasafuentes-1"> <img src="/screencapture-freelancer-u-nicolasafuentes-2"> <br>Calificación: 5.0 | Proyectos completados: 20+ | Comentarios: 10+',
            'image_path' => 'screencapture-freelancer-u-nicolasafuentes-1.png',
        ]);

        Calification::create([
            'title' => 'Facebook - Recomendación de Cliente',
            'description' => '<img src="/facebook-opiniones-aziende-global-1.png"><img src="/facebook-opiniones-aziende-global-2.png">',
            'image_path' => 'facebook-opiniones-aziende-global-1.png',
        ]);
    }
}
