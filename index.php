<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeadHunter</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/formValidation.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link  rel="icon" href="img/favicon.ico" type="image/ico" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300;1,900&display=swap" rel="stylesheet">
</head>
<body >
    <style type="text/css">
        body {
            font-family: 'Lato', sans-serif;
        }
        #eslogan {
	        color: #e91e63;
        }
    </style>
    <header class="container-fluid" id="head">
        <div class="row" >
            <div class="col-lg-6 ">
                <img src="img/banner2.jpg" alt="banner" class="d-none d-lg-block d-xl-none d-xl-block" >
                <img src="img/banner3.jpg" alt="banner" class="img-fluid d-block d-sm-none">
                <img src="img/banner4.jpg" alt="banner" class="img-fluid d-none d-sm-block d-md-none">
                <img src="img/banner5.jpg" alt="banner" class="img-fluid d-none d-md-block d-lg-none">
            </div>
           
            <div class="col-lg-6 p-5" style="background-color: #fde7eb;"> 
                <br>
                <h1 class="mb-3 font-weight-bold"> 
                    <center> <strong>Desafía el futuro del trabajo <br> y el talento</strong> 
                </center>  
                </h1>
                <br>
                <h4 class="mb-3 font-weight-light">  
                    <center>
                        Déjanos tus datos y nos pondremos en contacto contigo
                    </center>
                </h4>
                <br>
                <form class="text-center row" action="" method="POST" id="headhunter">
                    
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <input type="text" name="nombre" id="nombre"  class="form-control " placeholder="Nombre completo" required>
                        </div> 
                        <div class="form-group mb-4">
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="number" name="telefono" id="telfono" class="form-control" placeholder="Teléfono" required>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <input type="text" name="compañia" id="compañia"  class="form-control " placeholder="Empresa" required>
                        </div> 
                        <div class="form-group mb-4">
                            <input type="text" name="posicion" id="posicion" class="form-control" placeholder="Puesto que desea cubrir" required>
                        </div> 
                        <div class="form-group mb-4"> 
                            <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado" required>
                        </div> 
                        
                        <?php $fcha = date("d-m-Y");?>

                        <input type="hidden" class="form-control" name="fecha" value="<?php echo $fcha;?>" >
                        
                    </div>

                    <div class="col-lg-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultCheckedDisabled" checked disabled>
                        <label class="custom-control-label" for="defaultCheckedDisabled"></label> 
                        <a href="https://app.bolsarosa.com/aviso-privacidad" class="text-dark"><u>Acepto el aviso de privacidad</u></a>
                    </div>
                    <br>
                    </div>
                    <br>        
                    <!-- Sign in button -->
                    <div class="col-lg-12">
                        
                        <button type="submit" class=" white-text btn btn-rounded btn-lg col-lg-6" style="background-color: #ef446d;">Enviar</button>
                    </div>
            
                </form>
                <!-- Default form subscription -->
                
            </div>
        </div>
    </header>

    <main >
        <div class="container-fluid">
            <br><br><br><br>
            <h2 class="mb-3 font-weight-bold"> 
                <center> 
                    <strong>HeadHunter Virtual</strong> 
                </center>  
            </h2>
            <h4 class="mb-3 font-weight-bolder" > 
                <center id="eslogan">Para cada vacante hay una candidata ideal.</center> 
            </h4>
            <br>
        
            <p class="col-lg-8 offset-lg-2 text-center mb-5 font-weight-lighter">   
               
                Permítenos ayudarte a encontrar a la persona perfecta para tu empresa y olvídate del proceso 
                de reclutamiento como lo conoces. Realizamos el servicio de reclutamiento y selección de acuerdo
                a la vacante y necesidades del cliente. Recibe nuestra asesoría de los diversos esquemas flexibles
                de trabajo par ver cuál es el más compatible con tus necesidades.
               
            </p>
            <br><br><br><br> 
            <br>
            <br>
            <br>
        </div>
        <div class="#e0e0e0 grey lighten-2" id="video-div">
            
            <iframe id="over" width="560" height="450" src="https://www.youtube.com/embed/vFbcHZEs_JY" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen class="col-lg-8 offset-lg-2 text-center">
            </iframe>
            
            
        </div>

        <div class="container-fluid d-none d-xl-block d-none d-lg-block d-xl-none">
            <br>
            <br>
            <br>
            <br>
            <h2 class="mb-3 font-weight-bold"> 
                <center> 
                    <strong>¿Que nos Diferencia?

                    </strong> 
                </center>  
            </h2>
            <br>
            <div class="row">
            <div class="col-lg-4">
                <br><br><br>
                <div class="col-lg-12 mb-5">
                    <img src="img/precios-competitivos.png" alt="" class="mb-3 float-right">
                    <div class="clearfix"></div>  
                    <h3 class="text-right">Precios Competitivos</h3>
                    <h5 class="text-right">Cobramos el 100% del sueldo mensual <br> de la vacantepor <strong>solo una vez.</strong></h5>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <img src="img/diferentes-perfiles.png" alt="" class="mb-3 float-right">
                    <div class="clearfix"></div>  
                    <h3 class="text-right">Diferentes perfiles</h3>
                    <h5 class="text-right"> 
                        <strong>Más de 100,000 candidatas registradas </strong> <br> y más de 250 CVs NUEVOS diarios.
                    </h5>
                </div>
            </div>
            <div class="col-lg-4"> 
                <center>
                    <img src="img/123.png" alt="">
                </center> 
            </div>
            <div class="col-lg-4">
                <br><br><br>
                <div class="col-lg-12 mb-5">
                    <img src="img/mejor-talento.png" alt="" class="mb-3 float-left">
                    <div class="clearfix"></div>  
                    <h3 class="text-left">El mejor talento</h3>
                    <h5 class="text-left">Perfiles de las candidatas profesionistas, <strong>altamente calificadas</strong> y con experiencia.</h5>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <img src="img/tiempo-respuesta.png" alt="" class="mb-3 float-left">
                    <div class="clearfix"></div>  
                    <h3 class="text-left">Tiempo de respuesta</h3>
                    <h5 class="text-left"> Manejamos un tiempo de <strong>7 días hábiles </strong> <br> para la entrega de la terna de candidatas.</h5>
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid d-none d-md-block d-lg-none d-none d-sm-block d-md-none d-block d-sm-none">
            <br>
            <br>
            <br>
            <br>
            <h2 class="mb-3 font-weight-bold"> 
                <center> 
                    <strong>¿Que nos Diferencia?</strong> 
                </center>  
            </h2>
            <br>
            <div class="row">
            <div class="col-lg-4">
                <br><br><br>
                <div class="col-lg-4 mb-3"> 
                    <center>
                        <img src="img/123-mobile.png" class="img-fluid" alt="">
                    </center> 
                </div>
                <br><br><br>
                <div class="col-lg-12 mb-5">
                    <center>
                        <img src="img/precios-competitivos.png" alt="" class="mb-3">
                    </center>
                    <div class="clearfix"></div>  
                    <h3 class="text-center">Precios Competitivos</h3>
                    <h5 class="text-center font-weight-lighter">Cobramos el 100% del sueldo mensual <br> de la vacantepor <strong>solo una vez.</strong></h4>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <center>
                        <img src="img/diferentes-perfiles.png" alt="" class="mb-3">
                    </center>
                    <div class="clearfix"></div>  
                    <h3 class="text-center">Diferentes perfiles</h3>
                    <h5 class="text-center font-weight-lighter"> <strong>Más de 100,000 candiddatas registradas </strong> <br> y más de 250 CVs NUEVOS diarios.</h4>
                </div>
            </div>
            
            <div class="col-lg-4">
                <br><br><br>
                <div class="col-lg-12 mb-5">
                    <center>
                        <img src="img/mejor-talento.png" alt="" class="mb-3">
                    </center>
                    <div class="clearfix"></div>  
                    <h3 class="text-center">El mejor talento</h3>
                    <h5 class="text-center font-weight-lighter">Perfiles de las candidatas profesionistas, <strong>altamente calificadas</strong> y con experiencia.</h4>
                </div>
                <br><br>
                <div class="col-lg-12">
                    <center>
                        <img src="img/tiempo-respuesta.png" alt="" class="mb-3">
                    </center>
                    <div class="clearfix"></div>  
                    <h3 class="text-center">Tiempo de respuesta</h3>
                    <h5 class="text-center font-weight-lighter"> Manejamos un tiempo de <strong>7 días hábiles </strong> <br> para la entrega de la terna de candidatas.</h4>
                </div>
            </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 #e0e0e0 grey lighten-2">
                    <br><br>
                    <h2 class="mb-3 font-weight-bold"> 
                        <center> 
                            Bolsa Rosa te ayuda a <br> cambiar las reglas 
                        </center>  
                    </h2>
                    <br><br>
                    <center>
                        <iframe class="col-12" width="460" height="315" src="https://www.youtube.com/embed/AoCXeoUtujM" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                        </iframe class="mb-5">
                    </center>
                    <br><br><br>
                </div>
                <div class="col-lg-6 text-white" style="background-color: #ef446d;">
                    <br><br>
                    <h2 class="mb-3 font-weight-bold"> 
                        <center> 
                            Algunos de nuestros clientes <br> satisfechos 
                        </center>  
                    </h2>
                    
                    <h5 class="p-5 text-center font-weight-bolder" style="background-image: url(img/quote.png); background-repeat: no-repeat; background-position: center;">
                        Bolsa Rosa fue fundamental para no sólo redefinir la búsqueda que tenía en mente,
                        sino paraa pulir a detalle las competencias técnicas y de fit cultural con la organización.
                        No trajeron candidatos por traer, sino me ayudaron a llegar las tres mejores opciones
                        que pudiesen ser "esa persona" que nos ayudaría a alcanzar nuestros objetivos como
                        organización.
                    </h5>

                    
                    <center>
                        <img src="img/GOintegro-blanco.png" alt="">
                        <h4 class="font-weight-bolder">Beatriz Rivas</h4>
                        <h4 class="font-weight-bold">Empresa</h4>
                    </center> 
                    <br><br>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="container d-none d-sm-block">

            <hr>
            <br><br>

            <div class="row">
                
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/inadem_190-1-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4  ">
                        <img src="img/cartier_240-1-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4  ">
                        <img src="img/womenowned_240-1-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 ">
                        <img src="img/victoria147_240-1-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 ">
                        <img src="img/enlace_240-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/1j_93Z9kl5oK_FT8y1dFwow-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/forbes-logo-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/banregio-120x120.png" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/famsa-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/pepsico-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/femsa-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 ">
                        <img src="img/autozone-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/oxxo-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/femsa-comercio-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/caintra-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4">
                        <img src="img/whirlpool-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 ">
                        <img src="img/cemex-120x120.jpg" alt="">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 ">
                        <img src="img/HEB-120x120.png" alt="">
                    </div>
                
            </div>
            <br>
            <br>
            <hr>
            <br>
            <br>
        </div>

        <div class="container d-block d-sm-none">

            <hr>
            <br><br>

            <div class="row">
                
                    <div class="offset-1 col-5">
                        <img src="img/inadem_190-1-120x120.png" alt="">
                    </div>
                    <div class="col-6 ">
                        <img src="img/cartier_240-1-120x120.png" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/womenowned_240-1-120x120.png" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/victoria147_240-1-120x120.png" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/enlace_240-120x120.png" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/1j_93Z9kl5oK_FT8y1dFwow-120x120.png" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/forbes-logo-120x120.png" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/banregio-120x120.png" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/famsa-120x120.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/pepsico-120x120.jpg" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/femsa-120x120.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/autozone-120x120.jpg" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/oxxo-120x120.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/femsa-comercio-120x120.jpg" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/caintra-120x120.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/whirlpool-120x120.jpg" alt="">
                    </div>
                    <div class="offset-1 col-5">
                        <img src="img/cemex-120x120.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="img/HEB-120x120.png" alt="">
                    </div>
                
            </div>
            <br>
            <br>
            <hr>
            <br>
            <br>
        </div>
    </main>

    <!-- Footer -->
<footer class="page-footer font-small special-color-dark ">
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© Copyright:
      <a href="https://app.bolsarosa.com/aviso-privacidad"> Bolsa Rosa. Todos los derechos reservados. Aviso de privacidad</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  
    <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzWL3d7ysCSP0IldC2KwnkhSV5S9CF39jOodlPe133Wehb7PEO6/exec'
    const form = document.forms['headhunter']

    form.addEventListener('submit', e => { e.preventDefault()
        fetch('correos.php', { method: 'POST', body: new FormData(form)})
            .then(fetch(scriptURL, { method: 'POST', body: new FormData(form)}) )
            .then(response => window.location.reload(false))
            .then(response => window.alert("Solicitud de contacto enviada exitosamente, nos pondremos en contacto contigo muy pronto ya puedes cerrar esta página."))
            .catch(error => console.error('Error!', error.message))
    })
    </script>

    <!-- Event snippet for HH_Octubre 2020 conversion page
||  In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
            if (typeof(url) != 'undefined') {
            window.location = url;
            }
        };
        gtag('event', 'conversion', {
        'send_to': 'AW-859056802/-8RdCOXMieMBEKLV0JkD',
        'event_callback': callback
        });

        return false;
        }
    </script>
    
</body>
</html>