<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Cesar</title>
</head>
<body>

    <div class="grid-cabecera">

        <div class="logo">
            <a href=""><img src="shop.png" alt="" style="height: 70px;width: 150px; margin-left: 20px;"></a>
            
            
    
        </div>
        <div class="enlaces-nave">
            <a href="registro.php"> <i class="fa fa-user"></i> ENTRAR</a>
            <a href=""><i class="fa fa-shopping-cart"></i>CARRITO</a>
            <a href=""><i class="fa fa-shopping-basket"></i>FINALIZAR COMPRA</a>
        </div>
    </div>
    <div class="grid-subcabecera">
        <div class="enlaces-2">
            <a href="">Inicio</a>
            <a href="">Tienda</a>
            <a href="">Blog</a>
            <a href="">Contacto</a>

        </div>
        <div class="buscador">
            <input type="text" placeholder="Busca tu producto" class="search">  <i class="fa fa-search"></i>
        </div>
    </div>

    <?php
    echo "Bienvenido " . $_POST["nombrereg"] . " a la tienda de Cesar";
    ?>

    


    





    
</body>
</html>