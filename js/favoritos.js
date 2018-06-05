// JavaScript Document

 function favoritos(title, url) 
 {

	if (window.sidebar) 
	{ 
		// Mozilla Firefox Bookmark
		window.sidebar.addPanel(title, url,"");
	} 
	else if	( navigator.appName == "Microsoft Internet Explorer" ) 
	{ 
		// IE Favorite
		window.external.AddFavorite( url, title); 
	}
	else if(window.opera && window.print) 
	{ 
		// Opera Hotlist
		var elem = document.createElement('a');
		elem.setAttribute('href',url);
		elem.setAttribute('title',title);
		elem.setAttribute('rel','sidebar');
		elem.click();
		
	}
	else
	{
		//CHROME ???
		alert("Pressione (Ctrl+D) para adicionar aos Favoritos.")
	}
 }