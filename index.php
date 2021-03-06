<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>X3Music</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Krub:wght@700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <nav class="menu">
      <div class="menu__logo">
        <a href="index.php"><img src="img/logo.png" alt="" /></a>
        <a href="index.php" class="logo"><h1>X3Music</h1></a>
      </div>
      <ul>
        <li class="menu__home menuSelected">
          <a href="index.php">Home</a>
        </li>
        <li class="menu__musica"><a href="musica.php">Música</a></li>
        <li class="menu__ropa"><a href="ropa.php">Ropa</a></li>
        <li class="menu__accesorios">
          <a href="accesorios.php">Accesorios</a>
        </li>
        <?php  if(!isset($_SESSION["user"])):?>
          <li class="dropdown">
      <button class="dropbtn"><i class="lni lni-user"></i></button>
      <div class="dropdown-content">
      <a href="#"><i class="lni lni-user"></i>  Mi perfil</a>
      <a href="#"><i class="lni lni-shopping-basket"></i>  Carrito</a>
      <a href="#"><i class="lni lni-list"></i>  Mis compras</a>
      <a href="#"><i class="lni lni-exit"></i>  Cerrar Sesión</a>
      </div>
      </li>
      <?php endif; ?>

<?php  if(!isset($_SESSION["user"])):?>
  <li class="menu__login"><a href="#" id="btnLogin">Login</a></li>
        <li class="menu__registro">
          <a href="#" id="btnRegistro">Registro</a>
        </li>
<?php endif; ?>
      </ul>
      <span class="btn_menu"><i class="lni lni-menu"></i></span>
    </nav>
  </head>
  <body>
    <div id="modalLogin" class="modal modalLogin">
      <div class="modalLogin-content">
        <form action="" method="get" class="formLogin">
          <h2>Login</h2>
          <input
            type="text"
            name="logCorreo"
            id="logCorreo"
            placeholder="Correo"
          />
          <input
            type="password"
            name="logPass"
            id="logPass"
            placeholder="Contraseña"
          />
          <button id="btnIniciar">Iniciar</button>
        </form>
      </div>
    </div>
    <div id="modalRegister" class="modal modalRegister">
      <div class="modalLogin-content">
        <form action="" method="get" class="formRegister">
          <h2>Registro</h2>
          <input
            type="text"
            name="regCorreo"
            id="regCorreo"
            placeholder="Correo"
          />
          <input
            type="text"
            name="regCorreo"
            id="regCorreo2"
            placeholder="Correo"
          />
          <input
            type="text"
            name="regCorreo"
            id="regCorreo3"
            placeholder="Correo"
          />
          <input
            type="password"
            name="regPass"
            id="regPass"
            placeholder="Contraseña"
          />
          <button id="btnRegistrar">Registrar</button>
        </form>
      </div>
    </div>
    <main>
      <div class="novedades">
        <h2>NOVEDADES</h2>
        <a href="holi" class="novedad1"
          ><img class="novedades__img1" src="./img/hoodie.png" alt="hoodie"
        /></a>
        <a href="xd" class="novedad2"
          ><img class="novedades__img2" src="./img/travis.png" alt="travis"
        /></a>
      </div>
      <div class="containerProductos">
        <div class="masVendidos">
          <h2>Mas vendidos</h2>
          <div class="cardProducto producto1">
            <img src="img/producto/tazon-standard-con-diseno.jpg" alt="" />
            <p class="cardProducto__Text">Taza Bts</p>
            <p class="cardProducto__Price">$7.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
          <div class="cardProducto producto2">
            <img src="img/producto/travis.jpg" alt="" />
            <p class="cardProducto__Text">Figura accion travis</p>
            <p class="cardProducto__Price">$31.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
          <div class="cardProducto producto3">
            <img src="img/producto/oasis.jpg" alt="" />
            <p class="cardProducto__Text">cd oasis</p>
            <p class="cardProducto__Price">$14.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="precompra">
          <h2>Precompra</h2>
          <div class="cardProducto pre-producto1">
            <img src="img/producto/marhsmello.jpg" alt="" />
            <p class="cardProducto__Text">Hoodie marshmello</p>
            <p class="cardProducto__Price">$54.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
          <div class="cardProducto pre-producto2">
            <img src="img/producto/adele.jpeg" alt="" />
            <p class="cardProducto__Text">cd adele - 30</p>
            <p class="cardProducto__Price">$19.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
          <div class="cardProducto pre-producto3">
            <img src="img/producto/harrys house.jpg" alt="" />
            <p class="cardProducto__Text">cd harry’s house</p>
            <p class="cardProducto__Price">$19.990</p>
            <div class="card__overlay">
              <div class="overlay__text">
                <a href="#" class="ver">Ver mas...</a>
                <a href="#" class="agregar">agregar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer">
        <div class="horarios">
          <pre>
        Horarios 
        Lunes a Viernes: 08:00 hrs - 20:00 hrs 
        sABADOS: 10:00 hrs - 18:00 hrs
          </pre>
        </div>

        <div class="social">
          <div>
            <a href=""><i class="lni lni-instagram-original"></i></a>
            <a href=""><i class="lni lni-twitter"></i></a>
            <a href=""><i class="lni lni-facebook"></i></a>
          </div>
          <p>Copyright X3Music 2022</p>
        </div>
        <div class="contacto">
          <pre>
        Contacto
        Telefono: 72289214
        Direccion: Alameda #043, Rancagua.
          </pre>
        </div>
      </div>
    </footer>
    <script src="js/login.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
