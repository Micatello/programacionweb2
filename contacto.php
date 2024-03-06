<?php 
include ('header.php') ;
?> 



<section class="contacto_contenido">
<h2 class="contacto_mensaje"> Dejanos tu mensaje</h2>
 <form action="enviar_consulta.php" method="post">
    <label for="nombre">Nombre </label>
    <input type="text" name="nombre" class="contacto__input">
    <label for="apellido">Apellido </label>
    <input type="text" name="apellido" class="contacto__input">
    <label for="correo">Correo </label>
    <input type="text" name="correo" class="contacto__input">
    <label for="mensaje"> Mensaje</label>
    <textarea name="mensaje" class="contacto__input" cols="30" rows="10"></textarea>
    <input class="contacto__btn" type="submit" value="Enviar">
 </form>

 <?php 
 if(isset($_GET['ok'])) {
    echo "<h3> Su mensaje ha sido enviado con éxito </h3>";
 }
 ?>
</section>

<?php 
include ('footer.php') ;
?> 