$( document ).ready(function() {
	
	//APARECER CATEGORIA PRINCIPAL A RELEASES
	if (document.body.className.match('category-catalog') || document.body.className.match('category-comingsoon')) {
		
		var subcat = document.getElementById('main-title');
		
		var heading = document.createElement('h1');
	    heading.innerHTML = 'Releases';
	    heading.className = 'main-cat';

		subcat.parentNode.insertBefore(heading, subcat);

	}

	//APARECER MENU MOBILE

	var burguer = document.getElementById("burguer");
	var navMobile = document.getElementById("nav-secondary");
	
	burguer.onclick=function(){
		$(navMobile).toggleClass("oculto");					
	}
	
});

