function logar(the_form)
{
	if(!eh_campo_preenchido(the_form, "tx_login", "Email")) return false
	if(!eh_campo_preenchido(the_form, "tx_senha", "Senha")) return false
	
	//ok pode tentar logar	
	return true			
}


function cadastrar_entrar(the_form)
{
	
	if(!eh_campo_preenchido(the_form, "tx_nome", "Nome"))   return false
	if(!eh_campo_preenchido(the_form, "tx_email", "Email")) return false
	if(!eh_campo_preenchido(the_form, "tx_senha", "Senha")) return false

	if(!eh_email_valido(the_form, "tx_email", "Email")) return false
	
	
	//ok pode tentar cadastrar
	return true		
}

function eh_campo_preenchido(the_form, campo, nome_amigavel)
{
	if(the_form[campo].value == "")
	{
		alert("Aten��o: O campo " + nome_amigavel + " � obrigat�rio.")
		the_form[campo].focus()
		return false
	}
	else
	{
		return true		
	}
}

function eh_email_valido(the_form, campo, nome_amigavel)
{
	if(the_form[campo].value.indexOf("@")== -1 )
	{
		alert("O email informado n�o � v�lido.")
		the_form[campo].focus()
		return false
	}
	else
	{
		return true	
	}
}