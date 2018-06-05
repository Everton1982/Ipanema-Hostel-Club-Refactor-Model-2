
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Página Inicial</title>


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


<body bgcolor="transparent" allowtransparency="true">

</body>
</html>
