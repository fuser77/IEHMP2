<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto de Estudios Histórico-Marítimos del Perú | IEHMP</title>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
</head>
<body>
        <div class="encabezado">
            <a href="https://www.iehmp.org.pe/usu_iehmp/">
            <button class="boton-miembros">
                Area de Miembros
            <img src="./images/miembros.png" alt="">
            </button>
            </a>
        </div>
       <header> 
            <div class="navbar">
                <ul class="links">
                    <li><a href="https://www.iehmp.org.pe/"> Pagina Principal</a></li>
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=1">Historia Marítima del Perú</a></li>
                    <img src="images/logo.png" alt="">
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=3">Revista Institucional</a></li>
                    <li><a href="#">Catalogo de Biblioteca IEHMP</a></li>
                </ul>
                <div class="toggle_btn"> 
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            
            <div class="dropdown_menu">
                <ul>
                    <li><a href="https://www.iehmp.org.pe/"> Pagina Principal</a></li>
                    <li><a href="biblioteca">Historia Marítima del Perú</a></li>
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=3">Revista Institucional</a></li>
                    <li><a href="#">Catalogo de Biblioteca IEHMP</a></li>

                </ul>
            </div>
            <section class="container-slider">
                <div class="slider">
                    <div class="slides">

                        <input type="radio" name="radio-btn" id="radio1" >
                        <input type="radio" name="radio-btn" id="radio2" >
                        <input type="radio" name="radio-btn" id="radio3" >
                        <input type="radio" name="radio-btn" id="radio4" >
                        <div class="slide first">
                            <img src="./uploads/A02-07.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="./uploads/A03-86.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="./uploads/A02-31.jpg" alt="">
                        </div>
                        <div class="slide">
                            <img src="./uploads/A02-07.jpg" alt="">
                        </div>
                        <div class="nav-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>                  
                    </div>
                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>

                </div>
                </div>
            </section>
       </header>
        <main>
            <div class="container">
                <div class="sub-container">
                    <h1>Repositorio Fotográfico</h1>
                </div>
                    <form action="resultados.php" method="POST" class="form-busqueda">
                        <input type="text" name="buscar" placeholder="Buscar fotos ">
                        <button type="submit">
                            <img src="./icons/icon-black.svg" alt="Buscar">
                        </button>
                    </form>
                    <a href="#"><p> Búsqueda Avanzada</p></a>
            </div>
        </main>
    <footer>
       
    </footer>
</body>
</html>
<script src="script.js"></script>