<?php

namespace Database\Seeders;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\PersonalDetail;
use App\Models\Portfolio;
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

        // Portfolios
        $portfolio = Portfolio::create([
            'title' => 'API / ENDPOINTS - BACKEND - LARAVEL',
            'description' => 'Desarrollo de una aplicación de endpoints y APIs Rest para el proyecto de Speedup...',
            'details' => 'Se realizó la implementación de Laravel...',
            'cover_image' => 'laravel_resources_docs.png',
        ]);
        $portfolio->images()->create(['image_path' => 'laravel_resources_docs.png']);
        // ... (agregar el resto de los proyectos del portafolio)
    }
}
