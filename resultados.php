<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="./resultados.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Resultados</title>
    <!-- Javascript -->
</head>
<body>
    <section class="encabezado">
            <a href="https://www.iehmp.org.pe/usu_iehmp/">
            <button class="boton-miembros">
                Area de Miembros
                <img src="./images/miembros.png" alt="">
            </button>
            </a>
        </section>
    <header>
    <div class="navbar">
                <ul class="links">
                    <li><a href="https://www.iehmp.org.pe/"> Pagina Principal</a></li>
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=1">Historia Marítima del Perú</a></li>
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=3">Revista Institucional</a></li>
                </ul>
                <div class="toggle_btn"> 
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="dropdown_menu">
                    <li><a href="https://www.iehmp.org.pe/"> Pagina Principal</a></li>
                    <li><a href="biblioteca">Historia Marítima del Perú</a></li>
                    <li><a href="https://www.iehmp.org.pe/detalle_publicaciones.php?id_pubcat=3">Revista Institucional</a></li>
                </ul>
            </div>
    </header>
    <div class="buscador">
            <h1>Repositorio Fotográfico</h1>
            <form action="resultados.php" method="POST" class="form-busqueda">
                 <input type="text" name="buscar" placeholder="Busca fotos">
                 <button type="submit"><img src="./icons/search.svg" alt="Buscar"></button>
            </form>
        </div>
    <main>
        <?php 
            include 'buscador.php';
            while ($row = mysqli_fetch_array($sql_query)){
        ?>
        <section class="container">
            <!-- Info del container -->
            <div class="info">
                <div class="titulo">
                    <strong>Título:</strong> <?= $row['titulo'] ?>
                </div>
                <div class="año">
                    <strong>Año:</strong> <?= $row['año'] ?>
                </div>
                <?php if (!empty($row['fotografo'])) { ?>
                    <div class="fotografo">
                        <strong>Fotógrafo:</strong> <?= $row['fotografo'] ?>
                    </div>
                <?php } ?>
                 <div class="codigo">
                    <strong>Código:</strong> <?= $row['codigo'] ?>
                </div>
                <section class="botones">
                    <a href="resultados-finales.php?id=<?= $row['id'] ?>">
                    <button type="button" class="b_abrir" > 
                        <span>Ver Detalles</span>
                    </button>
                    </a>
                    
                </section>
            </div>
           
            <!--Fin de Info del container -->
            <div class="imagen">
                <img src="uploads<?php echo substr($row['imagen'], 7); ?>" alt="">
            </div>
        </section>
        <?php
            }
        ?>
    </main>
    <footer>
       <?php include 'modulos_iehmp/pie.php'; ?>  
    </footer>
</body>


</html>
<script>
                const toggleBtn= document.querySelector('.toggle_btn')
                const toggleBtnIcon= document.querySelector('.toggle_btn i')
                const dropDownMenu= document.querySelector('.dropdown_menu ')
                
                toggleBtn.onclick = function () {
                     dropDownMenu.classList.toggle('open')
                    const isOpen = dropDownMenu.classList.contains('open')
                    

                    toggleBtnIcon.classList = isOpen
                        ? 'fa-solid fa-xmark'
                        : 'fa-solid fa-bars'

                }
            </script>
