<?php include ("includes/conexiones.php");?>
<!DOCTYPE">
<html xmlns="http://www.w3.org/1999/xhtml">

<head lang=es>
<title>garikoitz iruretagoiena</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

<link href="Estilos/limpiar.css" rel="stylesheet" type="text/css"/>
<link href="Estilos/general.css" rel="stylesheet" type="text/css"/>

<!--Los datos META-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="title" content="Zinemaldia">
<meta name="keywords" content="Garikoitz Iruretagoiena, service design, user experience">
<meta name="description" content="Experiencia de uso y 'Customer Journey'">
<meta name="geo.placename" content="San Sebastián, Guipúzcoa, España">
<meta name="geo.position" content="43.3183340;-1.9812310">
<meta name="geo.region" content="ES-País Vasco">

<!--FAVICON
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
-->

<script type="application/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="js/typed.js" type="text/javascript"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83677624-1', 'auto');
  ga('send', 'pageview');
</script>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {

  var t=100;

  $(".proyecto_mosaic").mouseover(function () {
    $(this).animate({paddingBottom: "40px"}, t);
    $('.minipic').animate({marginTop: "-40px"}, t);
    setTimeout(function(){
      $('.proyecto_mosaic p').css({opacity: "1"});
      
    }, t);
    });
});
</script>


</head>

<body class="cuerpo_100">

  <header class="titulo titulo_blog">
    <nav class="menua centrado">
      <a href="index.html" class="m_home">home</a>
      <a href="" class="m_proyectos elegido">proyectos</a>
      <a href="" class="m_blog">blog</a>
      <a href="curriculum.html" class="m_cv">cv</a>
      <div class="cierre"></div>
    </nav>
  </header>

  <div class="titulo_sub titulo_proyectos proyectos_main">
    <div class="cuerpo_1100 centrado">
      <h1>Siempre proyectos centrados en las personas, Siempre proyectos centrados en las personas</h1>
    </div>
  </div>

  <div class="cuerpo_blog cuerpo_b50">
    <div class="cuerpo_1100 centrado">

      <div class="w_33_proyectos">
        <div class="proyecto_mosaic sombra_1 cuerpo_txuri">
          <img class="minipic" src="Imagenes/proyectos/3/3_0.jpg" width="100%" />
          <h2>Titulo 01, titulo 01. titulo 01, titulo 01</h2>
          <span>service, interaction, training</span>
          <p>2015 | Danobat</p>
        </div>
      </div>

      <div class="w_33_proyectos">
        <div class="proyecto_mosaic sombra_1 cuerpo_txuri">
          <img data-u="image" src="Imagenes/proyectos/3/3_0.jpg" width="100%" />
        </div>
      </div>

      <div class="w_33_proyectos no_margen">
        <div class="proyecto_mosaic sombra_1 cuerpo_txuri">
          <img data-u="image" src="Imagenes/proyectos/3/3_0.jpg" width="100%" />
        </div>
      </div>

      <div class="cierre"></div>

    </div>
  </div>


  <footer class="construccion con_2">
      <p>Estoy construyendo la página, y lo quiero hacer con mimo.<br>Mientras, puedes ver mi perfil en <a href="https://www.linkedin.com/in/giruretagoiena" target="new">linkedin</a> o escribirme un<br>email a <a href="mailto:gari.iruretagoiena@gmail.com">gari.iruretagoiena@gmail.com</a> para cualquier consulta.</p>
  </footer>

<?php mysql_close(); ?>
</body>