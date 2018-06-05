
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Serviços</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Easy-Cross-browser-jQuery-Slideshow-Plugin-VMCSlider/src/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
<style>
html {
margin:0 !important;
padding:0 !important;
}
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
.img-thumbnail {
    height:180px !important;
    width:300px auto !important;
}
#mostra_fotos {
    height: auto!important;
}
.fa-handshake, .fa-facebook{
    color: black!important;
}
#text-block-1 > p, #text-block-2, #text-block-3 > p {
    font-size: 1.6em;
    font-weight: lighter;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top:none !important;
    /* text-transform:uppercase; */
    min-height: 10em;
    display: table-cell;
    vertical-align: middle 
}
h1, h2, h3 {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif;
    color: #000;
    clear: both;
    border-bottom-width: 1px!important;
    border-bottom-style: solid !important;
    border-bottom-color: #fff!important;
}
body {
    color: #000000;
    font-size: 1em !important;
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif;
    margin: 0;
}
@media screen and (max-width: 320px) {
    #mostra_fotos {
    height: auto!important;
}
.img-thumbnail {
    height:160px;
    width:300px;
    margin-left:-4rem;
}
#servico {
    font-size: 3.4em;
}
#text-block-1 > p, #text-block-2, #text-block-3 > p {
    font-size: 24px;
    font-weight: lighter;
}
#facebook {
   margin-top:-6rem;
   height: 40px;
   width: 270px;
  }
  .link_reserva, a{
    font-size:24px !important;
    padding-left:1rem;
}
#mostra_fotos  {
    margin-left:3.5rem;
}
#facebook, #reserva, i {
 display: none !important;
  }
  .link_reserva, a{
    font-size:24px !important;
    padding-left:1rem;
}
}
p {
	font-size: 24px;
	padding:1rem;
	color: #fff !important;
}

h1, h2, h3, td {
    font-family: 'Trebuchet MS', Trebuchet, Arial, Verdana, Sans-serif !important;
    color: #fff !important; 
    clear: both !important;
    /* border-bottom-width: 1px !important;
    border-bottom-style: solid !important;
		border-bottom-color: #fff !important; */
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
</script><script type="text/javascript" src="mkte_x/_scripts/mostra_foto.js"></script>
<script type="text/javascript" src="mkte_x/_scripts/abre_janela.js"></script>


<link href="../css/base_page.css" rel="stylesheet" type="text/css" />


<body style="background-color:transparent;">
<h1 class="display-4 text-center" style="padding-top:3rem;" id="servico">Servi&ccedil;os</h1>
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
    <!-- <img class="img-fluid" src="../assets/logo_2._jpg.jpg" width="180" height="250" /><br /> -->
    <table class="table table-striped table-responsive"> 
        <tr>
            <td>WiFi de gra&ccedil;a (liberado fora do quarto-T&eacute;rreo)</td>
            <td>Lounge</td>
            <td>Tv Led</td>
        </tr>
        <tr>
            <td>Caf&eacute; da manh&atilde; (Opcional) (De Segunda a S&aacute;bado)</td>
            <td>Musica ambiente</td>
            <td>Ventiladores</td>
        </tr>
        <tr>
            <td>Roupa de cama</td>
            <td>Recep&ccedil;&atilde;o 24 hs</td>
            <td>Ar condicionado noturno (de 22h as 8h da manhã)</td>
        </tr>
        <tr>
            <td>Am&aacute;rio com chaves</td>
            <td>Quartos coletivos com banheiros</td>
            <td>Organiza&ccedil;&atilde;o de passeios</td>
            
        </tr>
        <tr>
            <td>Cozinha comunitaria</td>
            <td>Quartos privativos com banheiro privativo</td>
            <td>Troca de livros</td>
            
        </tr>
        <tr>
            <td>Internet</td>
            <td>Tv a cabo</td>
            <td>Área de churrasco</td>
            
        </tr>
</table>

<!-- <div class="row justify-content-center" style="margin-top:0; margin-bottom:2rem;">
<div class="col-sm-6 text-center">
<i class="fab fa-facebook fa-5x" style="color:#3B5998 !important;"></i>
<a href="http://www.facebook.com/ipanemahostelclub" target="_blank" style="font-size: 1.2em;"><br><p id="facebook" style="color:black; text-decoration:inherit!important;">Estamos no Facebook</p></a>
</div>
<div class="col-sm-6 text-center">
<i class="far fa-handshake fa-5x" style="color: #263238 !important;"></i>
<a href="../php/reserva.php" style="font-size: 1.2em;"><br><p id="reserva" style="color:#263238, text-decoration: inherit !important;">Fazer reserva</p></a>
</div>
</div>

<div class="fotos_home" id="mostra_fotos" style="background-color:#FF0">
<div class="item_geral">
<a href="../assets/165442.jpg">
<img class="img-thumbnail" src="../assets/165442.jpg" name="165442" border="0" class="tbl_borda" id="165442" /></a>
</div>
<div class="item_geral">
<a href="../assets/165444.jpg">
<img class="img-thumbnail" src="../assets/165444.jpg" name="165444" border="0" class="tbl_borda" id="165444" /></a>
</div>
<div class="item_geral">
<a href="../assets/166396.jpg">
<img class="img-thumbnail" src="../assets/166396.jpg" name="166396" border="0" class="tbl_borda" id="166396" /></a>
</div>
<div class="item_geral">
<a href="../assets/8694/166400.jpg">
<img class="img-thumbnail" src="../assets/166400.jpg" name="166400" border="0" class="tbl_borda" id="166400" /></a>
</div>
<div class="item_geral">
<a href="../assets/206160.jpg">
<img class="img-thumbnail" src="../assets/206160.jpg" name="206160" border="0" class="tbl_borda" id="206160" /></a>
</div>
<div class="item_geral">
<a href="../assets/206161.jpg">
<img class="img-thumbnail" src="../assets/206161.jpg" name="206161" border="0" class="tbl_borda" id="206161" /></a>
</div>
<div class="item_geral">
<a href="../assets/207016.jpg">
<img class="img-thumbnail" src="../assets/207016.jpg" name="207016" border="0" class="tbl_borda" id="207016" /></a>
</div>
<div class="item_geral">
<a href="../assets/166403.jpg">
<img class="img-thumbnail" src="../assets/166403.jpg" name="166403" border="0" class="tbl_borda" id="166403" /></a>
</div>
<div class="item_geral">
<a href="../assets/169517.jpg">
<img class="img-thumbnail" src="../assets/169517.jpg" name="169517" border="0" class="tbl_borda" id="169517" /></a>
</div>
<div class="item_geral">
<a href="../assets/207017.jpg">
<img class="img-thumbnail" src="../assets/207017.jpg" name="207017" border="0" class="tbl_borda" id="207017" /></a>
</div>
<div class="item_geral">
<a href="../assets/169518.jpg">
<img class="img-thumbnail" src="../assets/169518.jpg" name="169518" border="0" class="tbl_borda" id="169518" /></a>
</div>
</div> -->

<p style="clear:both"></p>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
 crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
 crossorigin="anonymous"></script>

</body>
</html>