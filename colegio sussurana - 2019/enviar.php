<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Col&eacute;gio Ariano</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75847165-1', 'auto');
  ga('send', 'pageview');

</script></head>

<body>
<div class="wrap-body">
	<div class="header">
		<div id='cssmenu' >
			<ul>
			   <li class="active"><a href='index.html'><span>Home</span></a></li>
			   <li><a href='#'><span>O Col&eacute;gio</span></a>
				  <ul>
	<li><a href='historia.html'><span>Nossa Hist&oacute;ria</span></a></li>
	<li><a href='proposta_pedagogica.html'><span>Proposta Pedag&oacute;gica</span></a></li>
    <li><a href='estrutura_atividades.html'><span>Estrutura e Atividade</span></a></li>
    <li><a href='equipe.html'><span>Nossa Equipe</span></a></li>
    <li><a href='horario.html'><span>Nosso Hor&aacute;rio</span></a></li>
				  </ul>
			   </li>
			   <li><a href='depoimentos.html'><span>Depoimentos dos Pais</span></a></li>
			   <li><a href='galeria_fotos.html'><span>Galeria de Fotos</span></a></li>
			   <li class='last'><a href='#'><span>Contato</span></a>
               	  <ul>
	<li><a href='fale_conosco.html'><span>Fale Conosco</span></a></li>
	<li><a href='trabalhe_conosco.html'><span>Trabalhe Conosco</span></a></li>
				  </ul>
                  </li>
			<br>
            <form action="login.php" method="post" target="_blank">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #fff; font-size: 16px;"><strong>Matr&iacute;cula:</strong>&nbsp;</span><input type=text name="matricula" placeholder="Matr&iacute;cula" maxlength="10" style="width: 100px; height: 15px; margin-right: 10px;"/>
       
        <span style="color: #fff; font-size: 16px;"><strong>Senha:</strong>&nbsp;</span> <input type=password name="senha" placeholder="Senha" maxlength="10" style="width: 100px; height: 15px; margin-right: 10px;"/>
       
        
        
        <input class="button" type="submit" name="Entrar" value="Entrar">
   </p>
   
</form>
</ul>
		</div>
	</div>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<h1 class="entry-title">P&aacute;gina do Aluno</h1>
							</div>
							<div class="art-content">
<p> </p>
<?php
require_once('class.phpmailer.php');

$nome_para = $_POST["nome_para"];
$fone = $_POST["fone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"]; 
 
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
 
$mailer->Host = 'smtp.rabbitmkt.com.br'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:

 
$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
$mailer->Username = 'webdesign@rabbitmkt.com.br'; //Informe o e-mai o completo
$mailer->Password = 'digital2015'; //Senha da caixa postal
$mailer->FromName = 'Contato Site - Colégio Ariano'; //Nome que será exibido para o destinatário
$mailer->From = 'webdesign@rabbitmkt.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
$mailer->AddAddress('webdesign@rabbitmkt.com.br'); //Destinatários

$mailer->Subject = 'Contato Site - Colégio Ariano - '.date("H:i").' - '.date("d/m/Y");
$mailer->Body = 'Contato Site - Colégio Ariano

Nome: ' . $nome_para . '
E-mail: ' . $email . '
Telefone: ' . $fone . '
Mensagem: 
' . $mensagem;
if(!$mailer->Send())
{
echo "Mensagem nao enviada";
echo "Erro: " . $mailer->ErrorInfo; exit; }
print "$nome_para -  Seu e-mail foi enviado com sucesso!";
 
?>								
        						
							  <p>&nbsp;</p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>
		<hr class="line">
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="wrap-footer">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="images/logo_ariano.png" width="100">
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
                            <p>Av. dos Banc&aacute;rios, 50/54
                              <br>
                              Ponta da Praia, Santos - SP<br>
Tel.: (13) 3236-4816<br>
                                    <a href="http://rabbitdigital.com.br/" target="_blank">Desenvolvido por Rabbit Digital</a>						    </p>
						  </div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col"></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
<script src="js/lightbox-plus-jquery.min.js"></script>
</div>
</body>
</html>