<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html" charset="utf-8"/>
        <meta name="keywords" content="Colegio garcia paredes"/>
        <meta name="description" content="Colegio garcia paredes"/>
        <link type="text/css" rel="stylesheet" href="src/css/normalize.css"/>
        <link type="text/css" rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="src/css/template.css"/>
        <script src="src/bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <script src="src/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <title>Garcia Paredes</title>
    </head>
    <body>
    <header>
<?php include ('modulos/header.php'); ?>
    </header>
        <section>
            <?php  
            if(isset($_GET["ruta"])){
                if($_GET["ruta"] == "inicio" ||
                   $_GET["ruta"] == "productos" ||
                   $_GET["ruta"] == "nosotros" ||
                   $_GET["ruta"] == "contactenos") {
                    include "modulos/".$_GET["ruta"].".php";
                }else{
                    include "modulos/404.php";
                }
            }else{
                include "modulos/404.php";
            }
            ?>
        </section>
    <footer>
<?php include ('modulos/footer.php'); ?>
    </footer>
    </body>
</html>