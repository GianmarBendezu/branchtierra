<!DOCTYPE html>
<html lang="es">
   <?php
                include('head.php');
                ?>
  <body>

   
      <?php
                include('header.php');
                ?>
    
    
    
   <span class="ir-arriba icon-up-big"></span>
   
    <!-- mi banner -->
    
             <?php
                include('banner.php');
                ?>
    
    
    <main class="main" >
            <div class="contenedor">

               
                  <section class="section__productos__full mapa scrollflow -slide-top -opacity" id="ubicanos">
                    
                     <h2 class="section__titulo expand">Ubícanos</h2>
                     <div class="lateral">
                        <div class="formxd">
               <h2>FORMULARIO DE CONTACTO</h2>
                <form action="" method="post" >
                   <ul>
                       <li>
                          <label for="txtnombre">Nombres:</label>
                          <input type="text" id="txtnombre"  required="required" />   
                       </li>
                       <li>
                           <label for="txtapellido">Apellidos:</label>
                           <input type="text" id="txtapellido" required="required" />      
                       </li>
                       <li>
                           <label for="txttelefono">Teléfono:</label>
                           <input type="text" id="txttelefono" required="required" />
                       </li>
                       <li>
                           <label for="txtemail">Email:</label>
                           <input type="text" id="txtemail" required="required" />
                       </li>
                       <li>
                           <label for="txtmensaje">Mensaje:</label>
                            <textarea name="" id="" cols="30" rows="10" required="required"></textarea>
                       </li>
                       <li>
                           <input type="submit" value="ENVIAR" />
                       </li> 
                   </ul>
                </form>
            </div>
                        
                        
                    </div>
                     <div class="menu__catalogo">      
                      
                        <div class="maps">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1txYmeM_7oHFI7lxSzXV2XAwJsc8&z=10"  height="600"></iframe>
                        </div>
                    </div>
                    
                 </section>
                           
           
            
            <?php
                include('certs.php');
             ?>
            </div>
    </main>

     <?php 
            include('footer.php');
      ?>
      <?php
            include('modal.php');
      ?>
      
    <?php
            include('aftercode.php');
      ?>
 
  </body>
</html>
