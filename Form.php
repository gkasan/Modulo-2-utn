<?php include ('menu.php')?>

    <form action="enviar_consulta.php" method="post">
     <fieldset class="contorno">

     
     <h3 class="Titulo">Formulario de Contacto</h3>

        <fieldset>
         <legend>Informacion Basica</legend>
         <div class="forminput">
            <label for="Nombre"> Nombre completo</label>
            <input type="text" name ="nombre" placeholder="Jose Gandalf">
         </div>
         <div class="forminput">
            <label for="Edad"> Edad</label>
            <input type="number" name ="edad" placeholder="33">
         </div>
            <div class="forminput">
               <label for="Email"> Email</label>
               <input type="email" name ="email" placeholder="Gandalf@hobitmail.com">
            </div>
        </fieldset>
        <fieldset>
         <Legend>Contame sobre vos</Legend>
          <div class="forminput" >
            <label> Como llegaste a nosotros?</label>
             <select  name="type">
               <option value="inst" > Instagram </option>
               <option value="face" > Facebook </option>
               <option value="publ" > Publicidad </option>
            
            </select>
          </div>
          <div class="forminput">
            <label > Mensaje 
            <textarea rows= "6" name= "mensaje" placeholder="Deja tu mensaje" ></textarea> 
          </label>
          <div class="boton">
          <input type="submit" value="Enviar">
          </div>
          </fieldset>
        
     </form>
     <?php
     if (isset($_GET['ok'])) {
         echo "<h3> Mensaje enviado!</h3>";
     }
   ?>    
      </div>
         
        </fieldset> 
        
<?php include ("footer.php")?>
</body>
</html> 

