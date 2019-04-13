<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="utf-8"/>
    <meta name="keywords" content="PopaShop"/>
    <meta name="description" content="Tienda Online"/>
    <link type="text/css" rel="stylesheet" href="src/css/normalize.css"/>
    <link type="text/css" rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="src/css/template.css"/>
    <script src="src/bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="src/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <title>PopaShop</title>
</head>
<body>

    <header>
        <?php include ('modulos/header.php'); ?>
    </header>

    <section>
        <?php
        if(isset($_GET["ruta"]) && $_GET["ruta"]){
            echo "<script>console.log( 'Debug Ruta: " . $_GET["ruta"] . "' );</script>";
            if($_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "productos" ||
                $_GET["ruta"] == "nosotros" ||
                $_GET["ruta"] == "contactenos") {
                include "modulos/".$_GET["ruta"].".php";
            }else{
                include "modulos/404.php";
            }
        }else{
            include "modulos/inicio.php";
        }   
        ?>
    </section>

    <footer>
        <?php include ('modulos/footer.php'); ?>
    </footer>
</body>
</html>