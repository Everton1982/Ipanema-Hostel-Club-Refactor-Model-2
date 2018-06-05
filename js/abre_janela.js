//Abre uma janela
function abre_janela(pagina, largura, altura)
{
	try
	{
		var sTop, sLeft;
		sLeft = (window.screen.width - largura)/2;
		sTop = (window.screen.height - altura)/2;
					
		features = "left=0,top=0,scrollbars=yes,resizable=yes,width=" + largura.toString() + ",height=" + altura.toString() + ",Left= " + sLeft + ", Top=" + sTop;
		nome = "tmp" + Math.floor(Math.random() * 100);
		window.open(pagina, nome, features)
	}
	catch(err)
	{
		alert("Ocorreu um erro ao abrir a janela: " + err.description)
	}
}

//TODO: rotina para post em janelas mais limpas

