<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="features/43.-Harvest-Gold.jpg" type="image/x-icon" />
  <!--<script
    src="https://kit.fontawesome.com/887a835504.js"
    crossorigin="anonymous"></script>-->
  <title>Formulario | W3C</title>
</head>

<body>
  <header>
    <nav>
      <ul class="navBar">
        <li class="menuMiTienda" onclick=showMyMenu()><a href="#">
            <p>NTP</p>
          </a></li>
        <li>
          <img src="features/Abstract Ethereal Shape in Deep Sky Blue Hues.png" alt="">
        </li>
        <li class="menuContacto">
          <svg xmlns="http://www.w3.org/2000/svg" height="28px" width="28px" viewBox="0 0 24 24" fill="#360000">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
          </svg>
        </li>
      </ul>
      <ul class="menu-desplegable">
        <li onclick=hideMyMenu()><a class="a-icono-cerrar" href="#"><svg class="iconoCerrar" xmlns="http://www.w3.org/2000/svg" height="22px" width="22px" viewBox="0 -960 960 960" fill="#360000">
              <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg></a></li>
        <li><a href="#">
            <p class="p-menuDesplegable">Colección</p>
          </a></li>
        <li><a href="pages/spotify-section">
            <p class="p-menuDesplegable">Playlist</p>
          </a></li>
        <li><a href="pages/newsletter.html">
            <p class="p-menuDesplegable">Newsletter</p>
          </a></li>
      </ul>

    </nav>
  </header>

  <img class="imagenPpal" src="features/presents...Lookbook.png" alt="lookbook"></img>

  <article>
    <h3 id="coleccion">NEW TIMELESS PROJECT</h3>
    <div class="disposicionArticulos">
      <div class="articulos">
        <img src="features/pantonChair_periodico.png" alt="" />
        <strong>"PANTONE"</strong>
        <p>FREE</p>
      </div>
      <div class="articulos">
        <img src="features/habítulo_dividido.jpg" alt="">
        <strong>DIVIDED SONIC ROOM</strong>
        <p>€589</p>
      </div>
      <div class="articulos">
        <img src="features/-cosmos-onplay-sillaPlegable.png" alt="">
        <strong>SOLID TABLE</strong>
        <p>€249</p>
      </div>
      <div class="articulos">
        <img src="features/smoking_man.png" alt="">
        <strong>SMOKING MAN</strong>
        <p>€129</p>
      </div>
    </div>

    <h4 id="participar">Trabaja con <i>Nosotros</i></h4>
    <form method="post" id="disposicionPropuesta">
      <div class="elemento">
        <label for="nombre">Nombre</label>
        <input type="text" spellcheck="false" autocorrect="off" autocomplete="off" name="name" id="input-nombre">
      </div>
      <div class="elemento">
        <label for="email">Correo electrónico</label>
        <input type="email" spellcheck="false" autocomplete="off" name="email" id="input-email">
      </div>
      <div class="elemento elemento-mensaje">
        <label class="label-mensaje" for="mensaje">Mensaje</label>
        <textarea rows="7" cols="33" maxlength="none" name="mensaje" id="textarea-mensaje"></textarea>
      </div>
      <input id="input-enviar" type="submit" name="register" value="Enviar">
      <div id="mensajeExito"></div>
      <?php
      include("registrar.php");
      ?>
    </form>
  </article>


  <footer>
    <p>Una iniciativa de <a href="https://www.instagram.com/stuffsergio/"><strong class="enlace-instagram-personal">@stuffsergio</strong></a></p>
  </footer>
  <script src="js/index.js"></script>
</body>

</html>
