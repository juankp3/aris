<?php

//xajax 
require('adapter/xajax_core/xajax.inc.php');

function validar_email($mail)
{	if (ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$mail))	return true;
  	else	return false;
}

function fn_enviamail($formData){
	
	$respuesta = new xajaxResponse();
	
	$nombre = $formData['nombre'];
	$email = $formData['email'];
	$comentarios = $formData['comentarios'];
	
	if (trim($nombre)=="" || trim($nombre)=="Nombre"){
		$mensaje = "Porfavor, ingrese su nombre";
		$respuesta->assign("mensaje","innerHTML","<span class='msg'>".$mensaje."</span>");
		return $respuesta; 
	}else if (validar_email($email)==false){
		$mensaje = "Email no valido, porfavor ingrese su email";
		$respuesta->assign("mensaje","innerHTML","<span class='msg'>".$mensaje."</span>");
		return $respuesta;
	}else{
		
	$envio_get="nombre=$nombre&email=$email&comentarios=$comentarios";
			
	$respuesta->assign("mensaje","innerHTML","<iframe src='http://www.oficinasenmiraflores.com/envio/contacto.php?".$envio_get."' style='display:none'></iframe>");
		
	$mensaje = "La información ha sido enviada, gracias por contactarnos...";
	$respuesta->alert($mensaje);
	return $respuesta; 

	}
}

$xajax = new xajax();
$xajax->configure('javascript URI','adapter/');
$xajax->registerFunction("fn_enviamail");
$xajax->processRequest();

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!—Meta de facebook—>
<meta property="og:image" content=""/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK REL="SHORTCUT ICON" HREF="images/donjose.ico">

<title>Edificio Don Jose</title>
<meta name="description" content="Edificio Don Jose" />
<meta name="keywords" content="" />
<meta name="robots" content="INDEX,FOLLOW" />

<!--recursos-->
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="js/jquery.js"></script>

<!--menu-->
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />

<!--contact-->
<link rel="stylesheet" href="css/contact.css" type="text/css" media="screen" />

<!--mensajes-->
<script type="text/javascript" src="/js/contact/input_hidden.js"></script>

<!--enlaces-->
<script type="text/javascript">
$(function(){
	//boton up
	$(window).scroll(function(){
		
	if ($(this).scrollTop() > 500) {
		$('.scrollUp').fadeIn();
	} else {
		$('.scrollUp').fadeOut();
	}
});

//fin boton up
$('a[href*=#]').click(function() {

if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	var $target = $(this.hash);
	$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
	if ($target.length) {
		var targetOffset = $target.offset().top;
		$('html,body').animate({scrollTop: targetOffset}, 1000);
		return false;
}}});
		
});
</script>

<!--popup for banner-->
<link rel="stylesheet" href="js/popup/magnific-popup.css" type="text/css" media="screen" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/popup/jquery.magnific-popup.js"></script> 

<script>
$(document).ready(function() {
  $('.image-link').magnificPopup({type:'image'});
});
</script> 

<?php $xajax->printJavascript();?>
</head>

<body>
<div id="top"></div>
<a href="#top"><div class="scrollUp"></div></a>


<div id="containerbody">

<!--encabezado-->
	<?php include "includes/encabezado.php"; ?>
<!--encabezado-->

<!-- banner -->
<div class="banner banner01">
	<div class="box">
    
    	<div class="box-title">
            <div class="box-pre-title">
                EN ESTRENO
            </div>
            <div class="box-post-title">
                <H1><b>Oficinas</b><br>cerca de todo</H1>
            </div>
		</div>
        
		<a id="btn" class="btn-back" href="#contacto"><img class="icon-btn" src="images/iconos/mail.png"> CONT&Aacute;CTENOS</a>

	</div>
</div>
<!-- banner -->

<div class="seccion">
    <div class="center no-padding">
    
    <div class="content_item">
        <img src="/images/iconos/i-espacios.png">
        <div class="item">
            <span>Espacios</span>
            <p>Áreas desde<br>67 hasta 300m2</p>
        </div>
    <div class="clear"></div>
    </div><!--
    
    --><div class="content_item">
        <img src="/images/iconos/i-elevador.png">
        <div class="item">
            <span>Elevador</span>
            <p>dos ascensores<br>con capacidad para<br>12 personas</p>
        </div>
    <div class="clear"></div>
    </div><!--
    
    --><div class="content_item last">
        <img src="/images/iconos/i-parking.png">
        <div class="item">
            <span>Parking</span>
            <p>4 sótanos de<br>estacionamientos</p>
        </div>
    <div class="clear"></div>
    </div>
    
    </div><!--center-->
</div><!--seccion-->

<!-- banner -->
<div class="banner banner02">
	<div class="box">
    
    	<div class="box-title-style2">
            <H1><b>Centro empresarial<br>¡de estreno!</b></H1>
            <p>A media cuadra<br>de Hotel Casa Andina<br>Private Collection</p>
            <a id="btn" href="#contacto"><img class="icon-btn" src="images/iconos/mail.png"> CONT&Aacute;CTENOS</a>
	    </div>
        
    </div>
</div>
<!-- banner -->

<!--enlace contacto--><div id="ubicacion"></div>
<div class="center">

    <div class="title">Ubicaci&oacute;n</div>
	<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.841604259694!2d-77.0282041851867!3d-12.122987991416508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c81bbe3685ed%3A0xaf4950e648dfc5ce!2sDON+JOSE%2C+Calle+Grimaldo+del+Solar%2C+Miraflores+15074!5e0!3m2!1ses-419!2spe!4v1454969504091" width="976" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="clear"></div>
    </div>
    
<div class="clear"></div>

</div><!--center-->

<!--enlace contacto--><div id="alrededores"></div>
<div class="seccion">
    <div class="center no-padding">
    
    <div class="title">Alrededores</div>
    <br><br>
    <div class="content_item">
        <img src="/images/iconos/i-hot-rest.png">
        <div class="item">
            <span>Hoteles y<br>Restaurantes</span>
            
            <ul class="lista">
            	<li>Marriott Hotel</li>
                <li>Casa Andina Private Collection Hotel</li>
                <li>Hotel Maria Angola</li>
                <li>Hotel Hilton</li>
                <li>Hotel Estelar Miraflores</li>
                <li>Sonesta Posada del Inca</li>
                <li>Centro Comercial Larcomar</li>
                <li>Tanta</li>
                <li>La Tiendecita Blanca</li>
            </ul>

        </div>
    <div class="clear"></div>
    </div><!--
    
    --><div class="content_item">
        <img src="/images/iconos/i-accesos.png">
        <div class="item">
            <span>Principales<br>Accesos</span>
            <ul class="lista">
                <li>Est. Benavides (Metropolitano)</li>
                <li>Est. Ricardo Palma (Metropolitano)</li>
                <li>Paseo de la República (zanjón)</li>
                <li>Avenida La Paz</li>
                <li>Avenida Ernesto Díez Canseco</li>
                <li>Calle Shell</li>
                <li>Avenida Alfredo Benavides</li>
                <li>Avenida José Larco</li>
                <li>Avenida Ricardo Palma</li>
            </ul>
        </div>
    <div class="clear"></div>
    </div><!--
    
    --><div class="content_item last">
        <img src="/images/iconos/i-ban-serv.png">
        <div class="item">
            <span>Bancos y<br>Servicios</span>
            <ul class="lista">
                <li>BCP / BBVA</li>
                <li>Scotiabank / Interbank</li>
                <li>Parque Keneddy</li>
                <li>Óvalo de Miraflores</li>
                <li>Municipalidad de Miraflores</li>
                <li>Parking Los Portales Alcanfores</li>
                <li>Ripley / Saga Falabella</li>
                <li>Metro / Wong / Vivanda</li>
                <li>Telefónica</li>
            </ul>
        </div>
    <div class="clear"></div>
    </div>
    
    </div><!--center-->
</div><!--seccion-->

<!--enlace contacto--><div id="caracteristicas"></div>
<div class="center">

    <div class="title">Caracter&iacute;sticas</div>
    
    <a href="images/home/distribucion-big.jpg" class="image-link" title="Alquiler en Miraflores">
       <img class="img-style"src="images/home/distribucion.jpg"/>
    </a>

    <ul class="lista2">
        <li>La mejor ubicación de Miraflores.</li>
        <li>Moderno lobby y ascensores de última generación.</li>
        <li><b>Arquitectura:</b><br>Leopoldo Scheelje, Garrido Lecca y Gustavo Ballon.</li>
    </ul>
    
<div class="clear"></div>
</div><!--center-->

<!--enlace contacto--><div id="contacto"></div>
<div class="contacto">
    <div class="center">
    
        <div class="title">Contacto</div>
        <form name="contact" id="contact" class="form-contact">
        	<div class="group">
                <div class="form-row"><input name="nombre" id="nombre" type="text" value="Nombre" /></div>
                <div class="form-row form-row-right"><input name="email" id="email" type="text" value="E-mail" /></div>
			</div>
            <textarea name="comentarios" id="comentarios" rows="5">Comentarios...</textarea>
            
            <table class="c_submit"
                <tr>
                    <td><div id="mensaje" class="error-div"></div></td>
                    <td><a id="btn" href="" onclick="xajax_fn_enviamail(xajax.getFormValues('contact')); return false;">ENVIAR</a></td>
                </tr>

            </table>
        </form>
    
    <div class="clear"></div>
    
    </div><!--center-->
</div><!--contacto-->

<!--pie-->
  
<?php include "includes/pie.php"; ?>

<!--pie-->
    
</div><!--containerbody-->

</body>
</html>