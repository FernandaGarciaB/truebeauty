<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>True Beauty</title>
     <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/tablet.css">
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="header">
        <img src="https://static.vecteezy.com/system/resources/previews/008/514/015/non_2x/beauty-salon-symbol-illustration-png.png" alt="Descripción de la imagen" class="header-image">
        <nav class="nav">
            <ul>
            @if(auth()->user()->isAdmin())
                <a href="{{ route('admin.index') }}" class="head-button">Ver usuarios</a>
            @endif
            <a href="{{ route('appointments.index') }}" class="head-button">Ver citas</a>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button class="head-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
                </li>
            </ul>
        </nav>
    </header>
    

    <section class="main-section">
        <div class="main-content">
            
            <div class="text-container">
                <p class="large-text">True Beauty</p>
                <p class="large-text2">Visitanos y descubre tu auténtica belleza.</p>
            </div>

            <div class="image-container">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/ac3b83171912339.6476a0eed13dc.png" alt="Descripción de la imagen" class="image-left">
            </div>
        </div>
    </section>

<section class="title-section">
    <h2 class="section-title">Servicios True Beauty</h2>
        </section>

<section class="content-section">
    <div class="content">
        <div class="content-container">
            <div class="content-box">
                <img src="https://plugins-media.makeupar.com/smb/blog/post/2023-09-28/d2920e51-3884-4f00-b0b9-c1881d031aea.jpg" alt="corte de cabello">
            </div>
            <div class="text-box">
                <p>Cortes de cabello para damas</p>
            </div>
        </div>
        <div class="content-container">
            <div class="content-box">
                <img src="https://mazatlaninteractivo.com.mx/wp-content/uploads/2023/11/5-tintes-de-pelo-que-favorecen-y-rejuvenecen-a-las-mujeres-de-50-anos-3.jpeg" alt="Descripción de la imagen">
            </div>
            <div class="text-box">
                <p>Aplicación de tintes y decoloración</p>
            </div>
        </div>
        <div class="content-container">
            <div class="content-box">
                <img src="https://tiempo.hn/wp-content/uploads/2021/06/no-2-1068x601.jpg" alt="Descripción de la imagen">
            </div>
            <div class="text-box">
                <p>Maquillajes simples o para eventos importantes</p>
            </div>
        </div>

        <div class="content-container">
            <div class="content-box">
                <img src="https://clicandpost.com/wp-content/uploads/2021/11/front-view-woman-getting-her-manicure-done-at-the-salon-scaled-1.jpg" alt="Descripción de la imagen">
            </div>
            <div class="text-box">
                <p>Servicio de manicura y aplicación de esmalte</p>
            </div>
        </div>
        <div class="content-container">
            <div class="content-box">
                <img src="https://www.hotelmousai.com.mx/blog/wp-content/uploads/elementor/thumbs/Spa-Imagine-Treatments-You-Need-to-Try-prdt90jvrpl8ll8lnbelrzltmgtpckebkh32qzequw.jpg" alt="Descripción de la imagen">
            </div>
            <div class="text-box">
                <p>Spa y masajes relajantes</p>
            </div>
        </div>
        <div class="content-container">
            <div class="content-box">
                <img src="https://www.centroesteticabolboreta.es/images/salones-de-belleza-y-centros-de-estetica-santiago-de-compostela.jpg" alt="Descripción de la imagen">
            </div>
            <div class="text-box">
                <p>Mascarillas para el cuidado de la piel</p>
            </div>
        </div>
    </div>
</section>

<section class="section2">
    <div class="content2">
        <h2 class="info-title">¿Quienes somos?</h2>
        <h3 class="info-title3">Bienvenidos a True Beauty, donde creemos que la verdadera belleza comienza con el cuidado personal y la confianza en uno mismo. Desde nuestra apertura, nos hemos comprometido a proporcionar un espacio donde la elegancia, el estilo y la innovación se unen para crear experiencias únicas de belleza. Nuestro equipo de estilistas y especialistas altamente calificados está dedicado a ofrecerte servicios personalizados que resaltan tu belleza natural y reflejan tu individualidad. En True Beauty, cada visita es una oportunidad para relajarte, renovarte y sentirte verdaderamente hermosa.</h3>
        <img src="https://static.vecteezy.com/system/resources/previews/008/513/448/original/beauty-salon-symbol-haircut-or-hair-salon-design-png.png" alt="¿Quienes somos?">
    </div>
    <div class="content3">
        <div class="content7">
            <img src="https://cdn-icons-png.freepik.com/512/3447/3447661.png" alt="atención al cliente">
            <h3 class="info-title3">Ofrecemos una atención personalizada que se adapte a las necesidades únicas de cada cliente. Valoramos la individualidad y nos esforzamos por crear experiencias a medida que reflejen tu estilo, personalidad y objetivos de belleza. </h3>
        </div>
        <div class="content7">
            <img src="https://cdn-icons-png.flaticon.com/512/27/27254.png" alt="atención al cliente">
            <h3 class="info-title3"> En True Beauty nos enorgullecemos de trabajar exclusivamente con marcas reconocidas y productos de alta gama que garantizan la mejor atención para tu cabello, piel y uñas. Porque en True Beauty, tu belleza merece solo lo mejor.</h3>
        </div>
        <div class="content7">
            <img src="https://cdn-icons-png.flaticon.com/512/4529/4529398.png" alt="atención al cliente">
            <h3 class="info-title3">Certificados por autoridades en la industria de la belleza garantiza que cumplimos con los más altos estándares de calidad. Nuestro equipo está calificado y se mantiene al día con las últimas tendencias y técnicas. </h3>
        </div>
    </div>
</section>

<section class="section3">
    <div class="content4">
        <img src="https://cdn-icons-png.flaticon.com/512/1628/1628441.png" alt="objetivo">
        <h2 class="info-title">Objetivo</h2>
        <h3 class="info-title2">El objetivo de True Beauty es convertirnos en el destino preferido para el cuidado y la mejora de la belleza en nuestra comunidad. Buscamos establecer una relación de confianza y lealtad con nuestros clientes a través de servicios excepcionales y un trato personalizado. Queremos ser reconocidos por nuestra excelencia en el servicio al cliente, nuestra innovación constante y nuestro compromiso con la belleza sostenible y responsable. En True Beauty, aspiramos a ser más que un salón de belleza: queremos ser tu aliado en el camino hacia una belleza auténtica y duradera.</h3>
    </div>
    <div class="content5">
        <img src="https://cdn.pixabay.com/photo/2017/10/10/07/01/focus-2836211_1280.png" alt="mision">
        <h2 class="info-title">Misión</h2>
        <h3 class="info-title2">Nuestra misión en True Beauty es transformar la belleza en una experiencia accesible y personalizada para todos nuestros clientes. Nos esforzamos por ofrecer servicios de alta calidad, utilizando productos innovadores y técnicas avanzadas que aseguren resultados excepcionales. Nos dedicamos a crear un ambiente acogedor y profesional donde cada cliente se sienta valorado y cuidado. En True Beauty, nuestra pasión es ayudarte a descubrir y realzar la mejor versión de ti mismo.</h3>
    </div>
    <div class="content6">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/009/356/887/small/eye-icon-sign-symbol-design-free-png.png" alt="vision">
        <h2 class="info-title">Visión</h2>
        <h3 class="info-title2">En True Beauty, nuestra visión es redefinir el concepto de belleza al crear un espacio donde cada persona pueda descubrir su verdadero potencial y sentirse segura en su propia piel. Aspiramos a ser líderes en la industria de la belleza, reconocidos por nuestra innovación, calidad y compromiso con el bienestar integral de nuestros clientes. Queremos inspirar y empoderar a nuestros clientes, empleados y la comunidad a través de prácticas sostenibles, educación continua y un enfoque holístico de la belleza. En True Beauty, soñamos con un mundo donde la belleza no solo se vea, sino que se sienta desde adentro, promoviendo la confianza y la autenticidad en cada individuo.</h3>
    </div>
</section>

    <footer class="footer">
        <div class="footer-column-text1">
            <h3 class="footer-title">Contacta con nosotros por alguno de estos medios</h3>
        </div>
        <div class="footer-content">
            <div class="footer-column-text">
                <h3 class="info-title5">+52 231 143 1243</h3>
            </div>
            <div class="footer-column">
                <img src="https://freepnglogo.com/images/all_img/1691832278twitter-x-logo-png.png" alt="x">
            </div>
            <div class="footer-column">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/facebook-logo-2019.png" alt="facebook">
            </div>
            <div class="footer-column">
                <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/62-instagram-512.png" alt="instagram">
            </div>
            <div class="footer-column-text">
                <h3 class="info-title5">truebeauty@gmail.com</h3>
            </div>
           
        </div>
    </footer>
</body>
</html>
