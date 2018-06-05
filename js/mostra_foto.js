
function mostra_foto_estilo_orkut(url_base, cd_foto)
{
			
	url = url_base + "mkte_x/galeria_fotos/mostra_foto_estilo_orkut.php?cd_foto=" + cd_foto
	window.location.href = url 

}


function mostra_foto_slideshow(tx_codigo_projeto, cd_categoria, cd_foto)
{
	
	url = 'http://www.wservices.srv.br/public/galeria_fotos/slideshow.php?tx_codigo_projeto=' + tx_codigo_projeto + '&cd_categoria=' + cd_categoria + '&cd_foto=' + cd_foto
	abre_janela(url, 680, 720)

}