
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
	<title>Contato</title>
<style>
.link_reserva a{
	display:block;
	height:55px;
	line-height:55px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #000;
	text-decoration: none;
	padding-left: 10px;
}

p {
	font-size: 1.6em;
	padding:1rem;
	color: #fff !important;
}

h1, h2, h3 {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
    color: #fff !important; 
    clear: both !important;
    border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
		border-bottom-color: #fff !important;
		padding: 1rem;
}
</style>


<script type="text/javascript">
function esvaziar()
{
	
}

function incluir_produto(cd_produto)
{
	cd_evento = "incluir_produto";
	tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
	abre_janela(tx_url, 200, 200)
}

function excluir_produto(cd_produto)
{
	cd_evento = "excluir_produto";
	tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
	abre_janela(tx_url, 200, 200)
}

function alterar_quantidade(cd_produto)
{
	cd_evento = "alterar_quantidade_01";
	tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento + "&cd_produto=" + cd_produto;
	abre_janela(tx_url, 200, 200)
}


function finalizar_pedido()
{
	cd_evento = "finalizar_pedido";
	tx_url = "/mkte_x/produtos/pedido_postback.php?cd_evento=" + cd_evento;
	abre_janela(tx_url, 200, 200)
}
</script><script type="text/javascript" src="../js/mostra_foto.js"></script>
<script type="text/javascript" src="../js/abre_janela.js"></script>


		<link href="../css/base_page.css" rel="stylesheet" type="text/css" />


<body bgcolor="transparent" allowtransparency="true" style="background:transparent !important;">
<h1 class="display-4 text-center" style="margin-top:4rem; margin-bottom:2rem;">Fale Conosco</h1>
<!-- <p align="center"><img src="../assets/fale_conosco2.jpg" width="852" height="177" border="0" usemap="#Map" /> -->



<div class="row justify-content-center text-center" style="height: 450px; color: #fff; margin-top:2rem;">
	<div class="col-sm-6 text-left">
	<i class="fas fa-phone fa-5x"></i>
	<p>(21) 2227-6130 / (21) 2267-7353</p>
	</div>
	<div class="col-sm-6 text-left">
	<i class="far fa-envelope fa-5x"></i>
	<p>contato@ipanemahostelclub.com</p>
</div>
	<div class="col-sm-6 text-left">
	<i class="fab fa-facebook fa-5x"></i>
	<p>www.facebook.com/ipanemahostelclub</p>
	</div>
	<div class="col-sm-6 text-left">
	<i class="fas fa-map-signs fa-5x"></i>
<p>Rua Prudente de Moraes, 903, Ipanema, Rio de Janeiro - RJ 2240-041 - Brasil</p>
	</div>

</div>
<!-- <center>
  <p>&nbsp;</p>
  <table width="374" border="0" cellspacing="0" cellpadding="0" style="margin-left:20px">
  <tr>
    <td height="55" background="../assets/precos_seta.png" class="link_reserva"><a href="../php/reserva.php">Clique aqui para fazer sua reserva</a></td>
  </tr>
</table>
</center> -->
  <!-- <map name="Map" id="Map">
    <area shape="rect" coords="4,102,365,176" href="mailto:contato@ipanemahostelclub.com" />
    <area shape="rect" coords="461,8,827,67" href="https://www.facebook.com/pages/Ipanema-Hostel-Club/368315006686628" target="_blank" />
  </map>
</p> -->
</body>
</html>