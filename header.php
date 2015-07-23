<!DOCTYPE html PUBLIC>
<?php
include("core/functions.php");
?>
<head>
    <title>Flopy System Computación</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <meta name="expires" content="-1"/>
    <meta name="description" content="Flopy System | Insumos en Hardware, Software y Servicio técnico." />
    <meta name="author" content="FlopySystem - Flor Acosta / DG" />
    <meta name="keywords" content="computacion, computadora, reparacion, reparaciones, cpu, gtc, gtc ribbon, cintas, computer, diseño grafico, diseno grafico, designer, webdesigner, developer, flopysystem, flopy, system, flopy system, galeria, devoto, beiro, francisco beiro, galeria beiro, lope, lope de vega, vega, usuario, mercadolibre, mercadopago, flopysystem1, venta, insumos, hardware, software, servicio tecnico">
    
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/css/menu-mobile.css"/>
    <link rel="stylesheet" type="text/css" href="/css/catalogo.css"/>
    <link rel="stylesheet" type="text/css" href="/css/detalles.css"/>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>


    <header>
    <div class="group">
        <span class="logo"><a href="/index.php"><img src="/img/logo.png"/></a>
        </span>
        <span class="menu-combo">
            <div class="menu-head">            
                <div class="it-li">
                    <ul class="menu-item-despl menu">
                        <li class=""><a href="#">Productos</a>
                            <ul>
                                <?php menuDesplegable(); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

                <div class="menu-head">
                    <div class="it-li">
                        <ul class="menu-item-despl menu repar">
                            <li class=""><a href="/reparaciones.php">Reparaciones</a></li>
                        </ul>
                    </div>
                </div>

                <div class="menu-head">
                    <div class="it-li">
                        <ul class="menu-item-despl buscar">
                            <form class="top" name="busqueda" action="/search.php" method="GET">
                                <input type="search" name="consulta" placeholder="Buscar" />
                                <button type="submit" name="buscar" value="" title="Buscar"></button>
                            </form>
                        </ul>
                    </div>
                </div>
                          
                <div class="menu-head">
                    <div class="it-li">
                        <ul class="menu-item-despl contact">
                            <li><a href="#">Contacto</a>
                                <ul>
                                        <li><a href="https://www.facebook.com/flopysystem" target="_blank"><img src="/img/fb-icon.png"/></a></li>
                                        <li><a href="http://eshops.mercadolibre.com.ar/FLOPYSYSTEM1" target="_blank"><img src="/img/ml-icon.png"/></a></li>
                                        <li><a href="http://www.flopysystem.com.ar/#location"><img src="/img/location-icon.png"/></a></li>
                               </ul>
                            </li>
                        </ul>
                    </div>
                 </div>
    </span>
    </div>


    </header>