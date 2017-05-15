<!doctype>
<html>
<head>
    <meta charset="utf-8">
  <link href="css/reset.css" rel="stylesheet">
   <link href="css/index_nav.css" rel="stylesheet">
   <link href="css/lobibox.css" rel="stylesheet">
   <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
    <script src="jvscript/jquery.js"></script>
    <script src="jvscript/lobibox.js"></script>
<title>Únete con una Suscripción</title>    
</head>
    <body>
        <div id="main_wrapperone"> 
            
            <img id="suscripcion" src="images/suscribete.jpg" />
            
            <div class="ourform">
            <div id="topform">
                 <p>Estamos totalmente a tu disposición,<br> entérate de nuestras ofertas y colecciones</p> 
            
                
                <form>
                
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
                        <label class="check" for="check1">
                            <input type="checkbox" checked="checked" id="check1" name="prenda1">
                                Brasier
                        </label>
                        <label class="check" for="check2">
                            <input type="checkbox"  id="check2" name="prenda2">
                                Panty
                        </label>
                        <label class="check" for="check3">
                            <input type="checkbox" id="check3" name="prenda3">
                                Brasieres y Panties<br>
                        </label>
                        <label class="check" for="check4">
                            <input type="checkbox" id="check4" name="prenda4">
                                Scrunchy<br>
                        </label>
                    </fieldset>
                    
                    <script type="text/javascript">
                            Lobibox.base.DEFAULTS = $.extend({}, Lobibox.base.DEFAULTS, {
            iconSource: 'fontAwesome'
        });
        Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
            iconSource: 'fontAwesome'
        });

                    
                    var input = document.querySelectorAll("label input");
                    if(input !== null) {
                    [].forEach.call(input, function(el) {
                    if(el.checked) {
                    el.parentNode.classList.add('c_on');
                    }
                    el.addEventListener("click", function(event) {
                    
                    //event.preventDefault();
                    el.parentNode.classList.toggle('c_on');
                    }, false);
                    });
                    }




                    function buscar_email(email){
                     $.ajax({ type: "GET",   
                              url: "includes/buscar_email.php",
                              async: false,
                              data: { 
                               'email'  : email, 
                              },
                              success : function(text){
                               response = text;
                              }
                            });

                    return parseInt(response);

                       
                    }
                    

                    function validar(){
                      nombre        = $.trim($('#nombre').val());
					  apellido      = $.trim($('#apellido').val());
 					  email         = $.trim($('#email').val());

                       if (nombre != ''){
                        if (apellido != ''){
                         if (email != ''){
                          if (!(buscar_email(email))) { 
                            ingresar();
                          }
                          else {
                            
                           Lobibox.notify('error', {
                         position: 'bottom left',
                         msg: 'El email que introduciste se encuentra registrado, por favor ingresa uno nuevo.'
                         });
                          }
                         }
                         else {
                          Lobibox.notify('error', {
                         position: 'bottom left',
                         msg: 'Por favor introduce tu email para continuar.'
                         });
                         } 
                        } 
                        else {
                         Lobibox.notify('error', {
                         position: 'bottom left',
                         delay: false,
                         msg: 'Por favor introduce tu apellido para continuar.'
                         });
                        } 
                       }
                       else {
                         Lobibox.notify('error', {
                         position: 'bottom left',
                         msg: 'Por favor introduce tu nombre para continuar.'
                         });
                       } 
                    }

                    function ingresar(){

                     $("#aceptar").attr("disabled","disabled");
                     $.get("includes/nueva_suscripcion.php",{
                      nombre        : $.trim($('#nombre').val()),
					  apellido      : $.trim($('#apellido').val()),
 					  email         : $.trim($('#email').val()),
 					  brasier       : ($('#check1').is(':checked'))?1:0,
 					  panty         :  ($('#check2').is(':checked'))?1:0,
 					  brasier_panty : ($('#check3').is(':checked'))?1:0,
 					  scrunchy      : ($('#check4').is(':checked'))?1:0                         
                      },
                      function(data){
                        $("#aceptar").removeAttr('disabled');
                        Lobibox.alert('success', {
                        msg: data
                        });
                      }
                     );
                     
                       
                    }

                    </script>
                
                <input type="button" id="aceptar" name="aceptar" value="Aceptar y Enviar" onclick="validar()"/>    
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
