moz=document.getElementById&&!document.all

function resize_iframe()
{
	
	document.getElementById("ifrm_principal").height=100 // required for Moz bug, value can be "", null, or integer
	document.getElementById('ifrm_principal').height=window.frames["ifrm_principal"].document.body.scrollHeight
	
	//faz o scroll suave
	goto_ifrm_principal_anchor()
	
}


function resize_iframe_no_scroll()
{
	//faz uma cópia do scroll atual
	nr_scroll = scroll_position()
	
	document.getElementById("ifrm_principal").height=100 // required for Moz bug, value can be "", null, or integer
	document.getElementById('ifrm_principal').height=window.frames["ifrm_principal"].document.body.scrollHeight
	
	
	//restaura a posição correta do scroll
	window.scrollTo(0, nr_scroll) 
	
}

function goto_ifrm_principal_anchor()
{
	
	default_home_page = "home.php"
	current_home_page = document.getElementById("ifrm_principal").contentWindow.location.href
	
	if(current_home_page.indexOf(default_home_page) != -1)
	{
		//alert("HOME PADRÃO")
		window.scrollTo(0, 0)
		return true
	}
	
	if(current_home_page.indexOf(custom_home_page) != -1 && custom_home_page != "")
	{
		//alert("HOME PERSONALIZADOO")
		document.documentElement.scrollTop = 0
		return true
	}

	
	if(moz) link_click();
	else    document.getElementById("goto_ifrm_principal_anchor").click();
}

function link_click() 
{
  var evt = document.createEvent("MouseEvents");
  evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
  var obj_goto_ifrm_principal_anchor = document.getElementById("goto_ifrm_principal_anchor"); 
  obj_goto_ifrm_principal_anchor.dispatchEvent(evt);
}


// returns the current scroll position
function scroll_position()
{
	body=document.body
	d=document.documentElement
	if (body && body.scrollTop) return body.scrollTop
	if (d && d.scrollTop) return d.scrollTop
	if (window.pageYOffset) return window.pageYOffset
	return 0
}