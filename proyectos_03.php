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
<script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
              [{b:0,d:600,x:410,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1050);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
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

    <?
    $sql="SELECT * FROM General_Proyectos WHERE id = '3'";
    $resultado=mysql_query($sql);
    $fila=mysql_fetch_array($resultado);
    ?> 

    <div class="titulo_sub titulo_proyectos">
        <div class="cuerpo_1100 centrado">
            <a href="" class="volver anterior"><span>anterior</span></a>
            <h2><? echo $fila['titulo'];?></h2>
            <a href="" class="volver siguiente"><span>siguiente</span></a>
            <div class="cierre"></div>
        </div>
    </div>

    <div class="cuerpo_blog cuerpo_b50">
        <div class="cuerpo_1100 centrado">

            <span class="ano ano2">Cliente</span>
            <span class="ano"><? echo $fila['cliente'];?></span>
            <span class="ano ano3">|</span>
            <span class="ano ano2">Año</span>
            <span class="ano"><? echo $fila['ano'];?></span>

            <div class="separador_15b"></div>

            <div class="w25 w25_des">
                    <h3>Problemática - Reto</h3>
                    <p><? echo $fila['reto'];?></p>
            </div>
            <div class="w25 w25_des">
                    <h3>Enfoque</h3>
                    <p><? echo $fila['enfoque'];?></p>
            </div>
            <div class="w25 w25_des">
                    <h3>Mi trabajo</h3>
                    <p><? echo $fila['gari'];?></p>
            </div>
            <div class="w25 w25_des no_margen">
                    <h3>Equipo</h3>
                    <p><? echo $fila['equipo'];?></p>
            </div>
            <div class="cierre"></div>

            <!--COPY-PASTE-->
            <div id="jssor_1" class="" style="position: relative; visibility: hidden;">

                <div class="proyecto_img sombra_1 pad_25 cuerpo_txuri">
                <div data-u="slides" class="proyecto_img_2" style="">

                  <?
                  $sql="SELECT * FROM Detalles_Proyectos WHERE proyecto = '3'";
                  $resultado=mysql_query($sql);
                  ?> 

                  <? while ($fila=mysql_fetch_array($resultado)) { ?>
                  <div data-p="112.50" style="display: none;">
                      <img data-u="image" src="Imagenes/proyectos/<? echo ($fila['proyecto']);?>/<? echo ($fila['fotos']);?>.jpg" />
                      <div data-u="caption" data-t="4" class="pie_foto"><? echo ($fila['pie_foto']);?></div> 
                  </div>
                  <? } ?>

                  <!--
                    <div data-p="112.50" style="display: none;">
                      
                        <img data-u="image" src="Imagenes/proyectos/03/03_02.jpg" />
                        <div data-u="caption" data-t="4" class="pie_foto">Foto 2</div>
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="Imagenes/proyectos/03/03_03.jpg" />
                        <div data-u="caption" data-t="4" class="pie_foto">Foto 3</div>
                    </div>-->
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora02l flecha" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora02r" data-autocenter="2"></span>
                 <div class="cierre"></div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb01" style="">
                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                </div>
                <div class="separador_15b"></div>
            </div>

        </div>
    </div>


	<footer class="construccion con_2">
			<p>Estoy construyendo la página, y lo quiero hacer con mimo.<br>Mientras, puedes ver mi perfil en <a href="https://www.linkedin.com/in/giruretagoiena" target="new">linkedin</a> o escribirme un<br>email a <a href="mailto:gari.iruretagoiena@gmail.com">gari.iruretagoiena@gmail.com</a> para cualquier consulta.</p>
	</footer>

<?php mysql_close(); ?>
</body>