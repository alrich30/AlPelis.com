<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php"; ?>
</head>
<body>
        
    <?php include "./inc/header.php"; ?>

    <main id="main-container"> 

        <?php include "./inc/nav.php";?>
    
        <?php   

        if(!isset($_GET['vista']) || $_GET['vista']=="" || $_GET['vista'] == "main-content"){
            $_GET['vista'] = "main-content";
            include "./vistas/".$_GET['vista'].".php";
       
        } elseif (is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista'] != "main-content"){
            include "./vistas/".$_GET['vista'].".php";
        }
        ?>
      
    </main>
    <script src="./js/fixed.js"></script>
    <script src="./js/formularioAjax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.2/socket.io.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</body>
</html>
