<!-- FORMLARIO CONTACTO -->
<section class="seccion_formulario">
  <!-- FORMLARIO -->
  <form class="formulario" name="formulario" action="server/contacto.php" method="post">
    <!-- DATOS PERSONALES -->
    <fieldset class="datos_personales">
      <legend>Datos personales</legend>
      <label>*Nombre: </label>
      <input type="text" name="nombre" value="" autofocus required>
      <br><br>
      <label>*Correo electrónico: </label>
      <input type="email" name="correo" value="" required>
      <br><br>
      <label>Teléfono: </label>
      <input type="number" name="telefono" value="">
    </fieldset>
    <br>
    <!-- ASUNTO -->
    <fieldset class="asunto">
      <legend>Asunto</legend>
      <label>*Asunto: </label>
      <select class="asunto" name="asunto" onchange="habilitarServicio();">
        <option value="nulo" default>--------</option>
        <option value="asunto1">Asunto 1</option>
        <option value="asunto2">Asunto 2</option>
        <option value="asunto3">Asunto 3</option>
      </select>
      <br><br>
      <label>Servicio: </label>
      <select id="servicio" name="servicio" disabled>
        <option value="nulo" default>--------</option>
        <option value="servicio1">Servicio 1</option>
        <option value="servicio2">Servicio 2</option>
        <option value="servicio3">Servicio 3</option>
      </select>
      <br><br>
      <label>*Comentario: </label>
      <br>
      <textarea style="width: 98%; margin: 0 auto;" name="comentarios" rows="10%" cols="" required></textarea>
    </fieldset>
    <br>
    <!-- LEGAL -->
    <fieldset class="legal">
      <legend>Legal</legend>
      <label>*Términos y condiciones</label>
      <p>Este sitio web usa los datos del usuario (Nombre, correo electrónico y teléfono),  únicamente para poder mantener contacto</p>
      <br>
      <input type="checkbox" name="terminosYcondiciones" value="Términos y condiciones" required> He leído y acepto los términos y condiciones de este sitio web.
    </fieldset>
    <br>
    <!-- OTRO -->
    <fieldset class="obligatorio">
      <legend>Obligatorio</legend>
      <label>*: </label>
      <p>Todos los datos marcados con * son obligatorios</p>
    </fieldset>
    <br>
    <fieldset class="captcha">
      <legend>Captcha</legend>
      <label id="captcha"></label>
    </fieldset>
    <br>
    <input type="submit" name="enviar" value="Enviar" id="enviar">
  </form>
</section>
