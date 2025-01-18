<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | stuffsergio</title>
    <link rel="shortcut icon" href="../features/nebulaAzul.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/signup.css" />
  </head>
  <body>
    <article>
      <h4 id="participar">Trabaja con <i>Nosotros</i></h4>
      <form method="post" id="disposicionPropuesta">
        <div class="elemento">
          <label for="nombre">Nombre</label>
          <input
            type="text"
            spellcheck="false"
            autocorrect="off"
            autocomplete="off"
            name="name"
            id="input-nombre"
          />
        </div>
        <div class="elemento">
          <label for="email">Correo electrónico</label>
          <input
            type="email"
            spellcheck="false"
            autocomplete="off"
            name="email"
            id="input-email"
          />
        </div>
        <div class="elemento elemento-mensaje">
          <label class="label-mensaje" for="mensaje">Mensaje</label>
          <textarea
            rows="7"
            cols="33"
            maxlength="none"
            name="mensaje"
            id="textarea-mensaje"
          ></textarea>
        </div>
        <input id="input-enviar" type="submit" name="register" value="Enviar" />
        <div id="mensajeExito"></div>
        <?php
        include("registrar.php");
        ?>
      </form>
    </article>
    <section>
      <button class="button1"><a href="../index.html">Volver</a></button>
      <button class="button2"><a href="../pages/contacto.html">Contacto</a></button>
    </section>
    <script src="../js/signup.js"></script>
  </body>
</html>
