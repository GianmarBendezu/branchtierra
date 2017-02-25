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

               <section id="protecsunfruit" class="section__productos__full">
                   <h2 class="section__titulo expand">PRODUCTOS</h2>
                  <div class="lateral">
                      <div class="block__productos">
              <ul class="aside__ul"><p>CATEGORÍA DE PRODUCTOS</p>
                  <li class="aside__li">ENMIENDAS BIOLÓGICAS<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                            <li onclick="modal__open(1,0)"><a>HUMIC TIERRA</a></li>
                            <li onclick="modal__open(2,0)" ><a>FULVIC TIERRA</a></li>
                            <li onclick="modal__open(3,0)"><a>HUMIC TIERRA EXTRACTO</a></li>
                            <li onclick="modal__open(16,0)"><a href="">FULVIC TIERRA GOLD</a></li>
                            <li onclick="modal__open(17,0)"><a href="">FULVIC TIERRA 16%</a></li>
                      </ul>
                  </li>
                  <li class="aside__li">NUTRICIONALES<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(4,1)"><a href="">TERRA MAGNESIO</a></li>
                          <li onclick="modal__open(5,1)"><a href="">TERRA ZINC</a></li>
                          <li onclick="modal__open(6,1)"><a href="">TERRA CALCIO</a></li>
                          <li onclick="modal__open(7,1)"><a href="">TERRA POTASIO</a></li>
                          <li onclick="modal__open(8,1)"><a href="">TERRA CALCIBORO</a></li>
                          <li onclick="modal__open(25,1)"><a href="">TERRA MANGANESO</a></li>
                          <li onclick="modal__open(26,1)"><a href="">TERRA AMIN</a></li>
                          <li onclick="modal__open(22,1)"><a href="">NM ENZYM</a></li>
                          <li onclick="modal__open(23,1)" ><a href="">FOSFITO TERRA POTASIO</a></li>
                      </ul>
                  </li>
                  <li class="aside__li">INDUCTORES DE DEFENSA<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(9,2)"><a href="">TERRA CUP</a></li>
                          <li onclick="modal__open(10,2)"><a href="">BOTRAID CU</a></li>
                          <li onclick="modal__open(11,2)"><a href="">BOTRAID S</a></li>
                      </ul>
                  </li>
                  <li class="aside__li">FUNGICIDAS BACTERICIDAS<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(12,3)"><a href="">ALEXIN PA-100 BT ENZYM</a></li>
                          <li onclick="modal__open(18,3)"><a href="">BT ENZYM DESINFECTANTE</a></li>
                          <li onclick="modal__open(19,3)"><a href="">ALEXIN PA-100 BT ENZYM POLVO</a></li>  
                          <li onclick="modal__open(20,3)"><a href="">BT ENZYM</a></li>
                          <li onclick="modal__open(24,3)"><a href="">KAOLINA TERRA</a></li>
                      </ul>
                  </li>
                  <li class="aside__li">PROTECTORES SOLARES<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(13,4)"><a href="">PROTECSUN FRUITS</a></li>
                      </ul>
                  </li>
                  <li class="aside__li">DINASTÍA ALEXÍN<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(12,5)"><a href="">ALEXÍN PA-100 BT ENZYM</a></li>
                           <li onclick="modal__open(19,5)"><a href="">ALEXIN PA-100 BT ENZYM POLVO</a></li> 
                      </ul>
                  </li>
                  <li class="aside__li">INSECTICIDAS NATURALES<i class="icon-down-open-mini"></i>
                      <ul class="aside__block__productos">
                          <li onclick="modal__open(14,6)"><a href="">TERRA INSECT</a></li>
                          <li onclick="modal__open(15,6)"><a href="">TERRA INSECT GRANULADO</a></li>
                          <li onclick="modal__open(21,6)"><a href="">IT ENZYM</a></li>
                          
                      </ul>
                  </li>
              </ul>
            </div>
                      
        </div>
               <div class="menu__catalogo">
                    
                <div class="header__section__menu">
                    <p>CATÁLOGO DE PRODUCTOS</p>
                </div>
                  <table>
                     <tr>
                         <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/categoria/enmiendas_biologicas/enmiendas_biologicas.png" alt="">
                                    <div class="overlay">
                                        <h2>ENMIENDAS BIOLÓGICAS</h2>
                                        <p class="p__vermas"><a href="categorias/enmiendasbiologicas.php" >VER MÁS</a></p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>ENMIENDAS BIOLÓGICAS</p>
                            </div>
                         </td>
                         
                         
                         <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/categoria/nutricionales/nutricionales.jpg" alt="">
                                    <div class="overlay">
                                        <h2>NUTRICIONALES</h2>
                                        <p class="p__vermas"> 
                                        <a href="categorias/nutricionales.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>NUTRICIONALES</p>
                            </div>
                         <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/categoria/inductores_de_defensa/inductores_defensa.png" alt="">
                                    <div class="overlay">
                                        <h2>INDUCTORES DE DEFENSA</h2>
                                        <p class="p__vermas"> 
                                            <a href="categorias/inductoresdefensa.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>INDUCTORES DE DEFENSA</p>
                            </div>
                         </td>
 
                     </tr>
                      <tr>
                         <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/categoria/fungicidas_bactericidas/fungicidas_bactericidas.png" alt="">
                                    <div class="overlay">
                                        <h2>FUNGICIDAS BACTERICIDAS</h2>
                                        <p class="p__vermas"> 
                                            <a href="categorias/fungicidasbactericidas.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>FUNGICIDAS BACTERICIDAS</p>
                            </div>
                         </td>
                          
                          <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/categoria/protectores_solares/protectores_solares.png" alt="">
                                    <div class="overlay">
                                        <h2>PROTECTORES SOLARES</h2>
                                        <p class="p__vermas"> 
                                            <a href="categorias/protectoressolares.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>PROTECTORES SOLARES</p>
                            </div>
                         </td>
                         
                         
                         <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/terra-calcio-06.jpg" alt="">
                                    <div class="overlay">
                                        <h2>DINASTÍA ALEXÍN</h2>
                                        <p class="p__vermas"> 
                                            <a href="categorias/dinastiaalexin.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>DINASTÍA ALEXÍN</p>
                            </div>
                         </td> 
                          
                      </tr>
                      
                      <tr>
                           <td>  
                            <div class="hovereffect">
                                <img class="img-responsive product__img" src="images/terra-calcio-06.jpg" alt="">
                                    <div class="overlay">
                                        <h2>INSECTICIDAS NATURALES</h2>
                                        <p class="p__vermas"> 
                                              <a href="categorias/insecticidasnaturales.php">VER MÁS</a>
                                        </p> 
                                    </div>
                            </div>
                            <div class="catalog__footer">
                                    <p>INSECTICIDAS NATURALES</p>
                            </div>
                         </td>
                            
                      </tr>
                      
                  </table>
                  
               
                  
                   
                   
                   
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
