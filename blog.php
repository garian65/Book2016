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

</head>

<body class="cuerpo_100">

		<header class="titulo titulo_blog">
			<nav class="menua centrado">
				<a href="index.html" class="m_home">home</a>
				<a href="" class="m_blog elegido">blog</a>
                <a href="curriculum.html" class="m_cv">cv</a>
				<div class="cierre"></div>
			</nav>
    </header>

    <div class="titulo_sub">
      <h2>Reflexiones sobre diseño de servicios y experiencia de usuarios</h2>
    </div>

    <div class="cuerpo_blog">
        <div class="cuerpo_1100 centrado">
            <div class="menu_blog">

                <?
                $sql="SELECT * FROM lista_post ORDER BY fecha DESC";
                $resultado=mysql_query($sql);
                if (!empty ($_GET)) {
                    $post = $_GET["id_post"];
                } else {
                    $post=mysql_num_rows($resultado);
                }
                $cont = mysql_num_rows($resultado) +1;
                ?>



                <? while ($fila=mysql_fetch_array($resultado)) {
                $cont --;
                ?>
                    <a href="blog.php?id_post=<? echo ($fila['id']);?>" class="<? if (($post == $cont)) {echo "blog_on";}?>">
                        <span><? echo ($fila['fecha']);?></span><br>
                        <span class="menu_titulo"><? echo ($fila['titulo']);?></span>
                    </a>
                <? } ?>

            </div>
            <div class="noticia_blog">
                <?
                if (!empty ($_GET)) {
                    $post = $_GET["id_post"];
                    $sql="SELECT * FROM lista_post WHERE id='$post'";
                } else {
                    $sql="SELECT * FROM lista_post ORDER BY fecha DESC LIMIT 1";
                }
                $resultado=mysql_query($sql);
                $fila=mysql_fetch_array($resultado);
                ?>
                <h1><? echo ($fila['titulo']);?><br><? echo ($fila['subtitulo']);?></h1>
                <div class="separador_15"></div>
                <? echo ($fila['cuerpo']);?>
                <!--
                <div class="separador_15"></div>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.garikoitziruretagoiena.com/blog-metadiseno.html" target="new" class="sharef"></a>
                <a href="https://twitter.com/home?status=http%3A//www.garikoitziruretagoiena.com/blog-metadiseno.html" target="new" class="sharet"></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.garikoitziruretagoiena.com/blog-metadiseno.html" target="new" class="sharel"></a>
                -->
                <div class="cierre"></div>

                
                <!--
                <a href="http://www.facebook.com/sharer.php?u=http://www.garikoitziruretagoiena.com/blog-zinemaldia-service-design.html=<? echo 'Zinemaldi Service Design';?>" target="new" class="sharef"></a>
                <a href="https://twitter.com/home?status=<? echo nl2br($fila['titulo']);?> www.tipptoppaleman.com/noticias?id_noticia=<? echo $noticia;?>" target="new" class="sharet"></a>
                -->
            </div>
            <div class="cierre"></div>
        </div>
    </div>


	<footer class="construccion con_2">
			<p>Estoy construyendo la página, y lo quiero hacer con mimo.<br>Mientras, puedes ver mi perfil en <a href="https://www.linkedin.com/in/giruretagoiena" target="new">linkedin</a> o escribirme un<br>email a <a href="mailto:gari.iruretagoiena@gmail.com">gari.iruretagoiena@gmail.com</a> para cualquier consulta.</p>
	</footer>

<?php mysql_close(); ?>
</body>