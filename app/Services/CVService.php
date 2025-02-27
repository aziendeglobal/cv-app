<?php

namespace App\Services;

class CVService
{

    public function getData()
    {
        $data = [];

        $data['fullname'] = 'Nicolás Alberto Fuentes';
        $data['intro']['fullname_2'] = 'Nicolás A. Fuentes';
        $data['intro']['headline'] = 'Software Engineer | Full Stack Developer | Backend Developer | Frontend Developer| Laravel Developer | PrestaShop Developer';
        $data['intro']['photo'] = 'nicolas_fuentes1.png';
        //---
        $data['personal']['email'] = 'nicolas.a.fuentes@gmail.com';
        $data['personal']['whatsapp'] = '5493516609376';
        $data['personal']['location'] = 'Argentina, Córdoba, CP 5000';
        $data['personal']['location_link'] = 'https://maps.app.goo.gl/9XMVXQtDCkJyEhnt5';
        $data['personal']['birthday'] = '25 de febrero de 1983';
        $data['personal']['civil_status'] = 'Casado';
        $data['personal']['linkedin'] = 'linkedin.com/in/nicolasalbertofuentes';
        //
        $data['skills'][] = 'Laravel';
        $data['skills'][] = 'PrestaShop';
        $data['skills'][] = 'Desarrollo de aplicaciones web';
        $data['skills'][] = 'WordPress';
        $data['skills'][] = 'Angular';
        $data['skills'][] = 'PHP';
        $data['skills'][] = 'Bitbucket';
        $data['skills'][] = 'GitHub';
        $data['skills'][] = 'API Rest';
        $data['skills'][] = 'Ajax';
        $data['skills'][] = 'PuTTY';
        $data['skills'][] = 'Unix';
        $data['skills'][] = 'Git';
        $data['skills'][] = 'Jira';
        $data['skills'][] = 'Cpanel';
        $data['skills'][] = 'WHM';
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
        <p>Ingeniero en Sistemas de Información con experiencia desde el 2006 en el desarrollo de software (18 años). </p>

        <p>Tengo experiencia en diferentes tecnologías, que fui aprendiendo a lo largo de estos años. Por un lado he trabajado con lenguajes de programación orientados a base de datos, como Oracle PL/SQL, con conexiones a APIs externas desarrolladas en Java. Y en mis inicios y en la actualidad, he trabajado con lenguajes de programación orientados a web, como PHP, Laravel, Javascript, Angular, entre otros. </p>

        <p>Por otra parte, tengo amplia experiencia y conocimientos en la creación y soporte a tiendas virtuales, a través de PrestaShop. Y también en la creación de website y landing page con WordPress.</p>

        <p>Tengo experiencia de trabajar en el sector público por más de 4 años, en el sector privado por más de 5 años, y con un emprendimiento personal de sistemas por más de 7 años.</p>

        <p>Realicé desarrollo, gestión y seguimiento de proyectos y equipos de trabajo dentro del rubro de la informática.</p>

        <p>🎯Mi objetivo es brindar un trabajo personalizado, a medida y a conciencia, de acuerdo a los requerimientos solicitados, intentando añadir un valor agregado con cada una de las entregas realizada.</p>

        <p>Me especializo en:
            🔹Análisis de Requerimientos
            🔹Diseño de Soluciones
            🔹Desarrollo de Software
            🔹Gestión de Equipos de Software
            🔹Despliegues de software
            🔹Capacitaciones</p>
        <br>

        <p>🤵🏼‍♂️Skills: Eficiencia, compromiso, proactividad, trabajo en equipo, generosidad.</p>

        <p>👨🏼‍💻Skills Programación: PHP, Laravel, Angular, Jquery, Javascript, MySQL, Bootstrap, CSS, HTML.</p>

        <p>💻Tools: PuTTY, Visual Studio Code, Xampp, Wamp, FileZilla, Postman, </p>

        <p>🖥Web Tools: WHM, Cpanel, Mailtrap, Jira, Bitbucket, Github, Trello</p>        
        ';

        //
        $data['education'][1]['title'] = 'Ingeniería en Sistemas de Información, Informática';
        $data['education'][1]['date'] = 'mar 2001 - jun 2011';
        $data['education'][1]['place'] = 'Universidad Tecnológica Nacional, Argentina';
        $data['education'][1]['name'] = 'Título: Ingeniero Informático | System Engineer | Software Engineer';
        $data['education'][1]['description'] = 'Duración de la carrera: 5 años + 1 año de tesis';

        //

        
        $data['employ'][0]['title'] = 'Programador Full Stack Senior - PHP';
        $data['employ'][0]['date'] = 'jun 2024 - presente';
        $data['employ'][0]['place'] = 'Buzz, Costa Rica';
        $data['employ'][0]['description'] = '
        <p>Realicé desarrollo de Aplicaciones Web con Laravel y Filament.</p>

        <p>También, hice mantenimiento y desarrollo de Sitios Web con WordPress: ajustes y desarrollo de temas y plugins, integración de Apis, configuración de traducciones, manejo de ACF, Post Types y Taxonomías.</p>
        
        <p>Por otroa lado, realicé la gestión y configuración de servidores.</p>
        <p>Además, realicé la planificación técnica de proyectos.</p>       
        ';

        $data['employ'][1]['title'] = 'Software Engineer | Full Stack Developer | Team Lider';
        $data['employ'][1]['date'] = 'may 2016 - presente';
        $data['employ'][1]['place'] = 'Aziende Global';
        $data['employ'][1]['description'] = '
        <p>Aziende Global es un emprendimiento de consultora de sistemas, creado y gestionado por mi.</p>
        <p>Trabajé con clientes de España, México, Chile y Argentina. Desarrolle y mantuve principalmente, aplicaciones web con Laravel (PHP), y tiendas virtuales con PrestaShop. Contrate programadores y gestione equipos de desarrollo de software.</p>

        <p>Las actividades principales que realicé, fueron:
            🔹Para Speedup / Fixup (Argentina): desarrollo de sistemas y aplicaciones web con Laravel y Angular, desarrollo e integración de APIs y endpoints,
            🔹Para Wwwacerlona (España): mantenimiento de frontend y backend en Laravel,
            🔹Para Khalu (Chile): instalación y mantenimiento de tiendas virtuales con PrestaShop,
            🔹En general: gestión de equipos de trabajo, análisis de requerimientos, diseño de soluciones, testing de desarrollos, implementación de desarrollos, implementación de seguridad web, configuración de servidores web, migración de aplicaciones web.
        </p>

        <p>Las tecnologías con las que más trabajé, fueron:
            🔹Laravel, 🔹Angular, 🔹Bootstrap, 🔹Jquery, 🔹MySql, 🔹Html, 🔹Javascript, 🔹Css, 🔹PrestaShop, 🔹WordPress
        </p>
        <p>Las herramientas con las que más trabajé, fueron:
            🔹Visual Studio Code, 🔹Filezilla, 🔹PuTTY, 🔹XAMPP, 🔹Wamp, 🔹Postman, 🔹WHM, 🔹Cpanel, 🔹PhpMyAdmin, 🔹Jira, 🔹Bitbucket, 🔹GitHub
        </p>        
        ';


        $data['employ'][2]['title'] = 'Analista Programador Oracle PL/SQL';
        $data['employ'][2]['date'] = 'may 2011 - may 2016';
        $data['employ'][2]['place'] = 'Dicsys, Argentina';
        $data['employ'][2]['description'] = '
        <p>Me desempeñe como analista programador para Claro Argentina, realizando análisis sobre requerimientos, definiendo soluciones, y luego haciendo el desarrollo correspondiente.</p>

        <p>Los alcances de mis tareas fueron:
            🔹configuración y mantenimiento de Promociones masivas (Promo Plus, Promo Duplica/Triplica, Promo Carga Diferida), 🔹configuración y mantenimiento de procesos de registración de recargas, físicas y virtuales (provenientes de diferentes canales), 🔹seguimiento y gestión de proyectos en todas sus etapas, 🔹análisis preliminar de requisitos y confección de propuestas, 🔹diseño y documentación de soluciones, 🔹confección de manuales y capacitador.
        </p>
        <p>Las tecnologías que utilicé fueron las siguientes:
            🔹Pl/Sql: para la creación y mantenimiento de paquetes, procedimientos, funciones, types, tablas, vistas, 🔹Oracle Forms: para el mantenimiento de forms, 🔹Java: para mantenimiento de APIs de proveedor externo (Tecnotree) y desarrollo de aplicación MDB.
        </p>
        <p>Las herramientas que utilicé fueron:
            🔹Clearquest, 🔹RequisitePro, 🔹Oracle Designer, 🔹PL/SQL Developer, 🔹Toad, 🔹PuTTY, 🔹Winscp, 🔹JDeveloper.
        </p>       
        ';


        $data['employ'][3]['title'] = 'Analista Programador Meta4 Peoplenet | Meta4 Emind | Oracle PL/SQL';
        $data['employ'][3]['date'] = 'abr 2007 - may 2011';
        $data['employ'][3]['place'] = 'Gobierno de la Provincia de Córdoba, Argentina';
        $data['employ'][3]['description'] = '
        <p>Analista Programador para el sector de liquidación de sueldos de la Provincia de Córdoba.</p>

        <p>El alcance de mis tareas fue: 🔹relevamiento de requerimientos, 🔹diseño de soluciones, 🔹capacitador de herramientas, 🔹confección de manuales. </p>
        <p>Las tecnologías que utilicé fueron: 🔹Peoplenet: para el mantenimiento y modificación de Modelo de Datos, Meta4Objects y Presentaciones, incluyendo nueva funcionalidad, 🔹Pl/Sql: para el mantenimiento de procedimientos y funciones. Confección de vistas, 🔹Sql: para la confección de consultas avanzadas para redacción de informes y reportes.</p>
        <p>Las herramientas que utilicé fueron: 🔹Pl/Sql Developer, 🔹Crystal Reports</p>   
        ';


        $data['employ'][4]['title'] = 'Programador Web en PHP';
        $data['employ'][4]['date'] = 'mar 2006 - mar 2007';
        $data['employ'][4]['place'] = 'Santex, Argentina';
        $data['employ'][4]['description'] = '
        <p>Programador Web en PHP para un equipo de trabajo en Estados Unidos.</p>

        <p>El alcance de mis tareas fue: 🔹análisis de requisitos, 🔹diseño de soluciones, 🔹mantenimiento de sitios web, desarrollo de nuevas funcionalidades, ajustes en el diseño de páginas, mantenimiento de crawlers, 🔹E-commerce: instalación y mantenimiento de tiendas virtuales. </p>
        <p>Las tecnologías que utilicé fueron: 🔹Php, 🔹Css, 🔹Javascript, 🔹Html, 🔹Ajax. </p>
        <p>Las herramientas que utilicé fueron: 🔹Zend, 🔹PhpMyAdmin </p>  
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
        <p> Detalle de actividades: 🔹gestión y mantenimiento de la página web, 🔹desarrollo de scripts en PHP, 🔹manipulación de base de datos Mysql, 🔹implementación de pantallas, reportes, 🔹coordinación de actvidades, Colecta, Construcción</p>        
        ';

        return $data;
    }
}
