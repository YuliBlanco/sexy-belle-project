<!doctype>
<html>
<head>
    <meta charset="utf-8">
 <link href="css/reset.css" rel="stylesheet">
   <link href="css/index_nav.css" rel="stylesheet">
<script src="jvscript/jquery.js"></script>
<title>Únete con una Suscripción</title>    
</head>
    <body>
        <div id="main_wrapperone"> 
            
            <img id="suscripcion" src="images/suscribete.jpg" />
            
            <div class="ourform">
            <div id="topform">
                 <p>Estamos totalmente a tu disposición,<br> entérate de nuestras ofertas y colecciones</p> 
            
                
                <form method= "POST" action="">
                
                    <fieldset>
                        <label for="nombre">Primer Nombre</label><br><input name="nombre" id="nombre" type="text" placeholder="Nombre" required>    
                    </fieldset> 
                <fieldset>
                        <label for="apellido">Primer Apellido</label><br><input name="apellido" id="apellido" type="text" placeholder="Apellido" required>    
                    </fieldset> 
            <fieldset>
                  <label for="email">Tú Email</label><br>     
                <input name="email" id="email" type="email" placeholder="Email" required>
                </fieldset>
            
                <p>¿Deséas recibir todo lo relacionado a nuestras colecciones?<br> Selecciona lo que más te gusta.<br>¡ Sí, puedes escoger todas !</p>
                 <fieldset>
                        <label class="checkX" for="check1">
                            <input type="checkbox" checked="checked" id="check1" name="prenda1">
                                Brasier
                        </label>
                        <label class="checkX" for="check2">
                            <input type="checkbox" checked="checked" id="check2" name="prenda2">
                                Panty
                        </label>
                        <label class="checkX" for="check3">
                            <input type="checkbox" checked="checked" id="check3" name="prenda3">
                                Brasieres y Panties<br>
                        </label>
                    </fieldset>
                    
                    <script type="text/javascript">

                   /* var input = document.querySelectorAll("label.check input");                    
                    [].forEach.call(input, function(el) {
                     alert($('#'+el.id).is(':checked'));
					}
                    );*/
                    
                    /*var input = document.querySelectorAll("label.check input");
                    if(input !== null) {
                    [].forEach.call(input, function(el) {
                    if(el.checked) {
                    //el.parentNode.classList.add('c_on');
                    }
                    el.addEventListener("click", function(event) {
                    
                    event.preventDefault();
                    //el.parentNode.classList.toggle('c_on');
                    alert(this.checked);
                    this.checked = (this.checked)?false:true;
                    alert(this.checked);
                    }, false);
                    });
                    }
                    
                    </script>
                
                <input type="submit" name="submit" value="Aceptar y Enviar" onclick="java:alert($('#check1').is(':checked'))"/>    
            </form>

            
            </div>
            
            </div>
       </div>
       <footer>
            
            <div id="block_nav">
            <nav id="nav_footer">
                
                <ul>
                   <li><a href="index.php" >HOME |</a></li>
                        <li><a href="nuestrahistoria.html">NUESTRA HISTORIA |</a></li>
                            <li><a href="destacados.html">DESTACADOS |</a></li>
                                    <li><a href="colecciones.html">COLECCIONES|</a></li>
                                    <li><a href="videos.html">VIDEOS |</a></li>
                                <li><a href="nuestrastiendas.html">NUESTRAS TIENDAS |</a></li>
                            <li><a href="contactos.html">CONTACTOS |</a></li>
                        <li><a href="unete.php"  >ÚNETE CON UNA SUSCRIPCIÓN </a></li>
                </ul>
                    
            </nav>
            </div>  
                    <div id="name">
                        <i><img src="images/PANTY%202_FOTOLLISTAT_pink.png"><br>Sexy & belle</i>
        
                    </div>
                    <div id="author"><h5>Sexy & belle,© Todos los derechos reservados, 2016.
                    </h5></div>
        </footer>
    
    </body>
</html>
