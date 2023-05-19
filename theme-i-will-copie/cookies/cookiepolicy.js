jQuery(document).ready(function() {
	cookiePolicy.init();
});

cookiePolicy = {
	init: function(){
		if(cookiePolicy.checkCookiePolicy() == false){
			cookiePolicy.showCookiePolicy();
			jQuery(document).on('click', 'button#euCookie', function(e) {
				e.preventDefault();
				cookiePolicy.setCookiePolicy();
				jQuery('#cookie-policy').remove();
			});
			jQuery(document).on('click', 'a#euCookieMore', function(e) {
				e.preventDefault();
				cookiePolicy.showReadMoreCookiePolicy();
			});

			jQuery(document).on('click', '#euCookieMoreClose', function(e) {
				e.preventDefault();
				cookiePolicy.hideReadMoreCookiePolicy();
			});
		}
		else{
			jQuery('#cookie-policy').remove();
		}
	},

	getTemplate: function(){

		if(jQuery('#cookie-policy').length > 0){
			jQuery('#cookie-policy').css('display', 'block');
			var template = jQuery('#cookie-policy').clone();
			jQuery('#cookie-policy').remove();
			return template;
		}

		var textLine1 = 'Brug af cookies';
		var textLine2 = 'Denne hjemmeside anvender cookies til statistik og indstillinger. Ved at bruge hjemmesiden accepterer du dette.';
		var buttonOk = 'Ok';
		var readMore = 'KLIK OG LÆS MERE';

		var readMoreText="";
		readMoreText += "					<h4>Information om brug af cookies på denne hjemmeside<\/h4>";
		readMoreText += "					<p>Når du bruger denne hjemmeside accepterer du, at vi benytter cookies.<\/p>";
		readMoreText += "					<br \/>";
		readMoreText += "					<h4>Hvad er en cookie?<\/h4>";
		readMoreText += "					<p>Cookies er små tekstfiler, der lagres i din browser, så vi kan registrere, at din computer, iPad, smartphone, eller andet udstyr har besøgt en hjemmeside. <\/p>";
		readMoreText += "					<p>Disse cookies hjælper med at huske præferencer og føre statistik over dit besøg og andre besøgende og lign.<\/p>";
		readMoreText += "					<br \/>";
		readMoreText += "					<h4>Oversigt over hjemmesidens brug af cookies<\/h4>";
		readMoreText += "					<p><i>Cookies som er nødvendige<\/i><\/p>";
		readMoreText += "					<p>Visse typer cookies er nødvendige for at hjemmesiden kan fungere korrekt, og udføre de handlinger du foretager. Det kunne eksempelvis være et login.<\/p>";
		readMoreText += "					<p><i>Cookies til dine præferencer<\/i><\/p>";
		readMoreText += "					<p>Disse typer cookies skal sørge for, at huske dine indstillinger på siden. Det kan være cookies, som husker din navigation på siden, udfyldning af formularer, søgninger, sprogvalg osv. Der bliver ikke gemt nogle personlige oplysninger om dig.<\/p>";
		readMoreText += "					<p><i>Cookies for optimering og løbende drift<\/i><\/p>";
		readMoreText += "					<p>Disse typer cookies anvendes eksempelvis til at få et statistisk billede af hvad trafik der er på siden. Kun i begrænset omfang kan disse data identificere dig som bruger. Men når dataene bliver brugt til at optimere hjemmesiden er informationen om brugeren anonym.<\/p>";
		readMoreText += "					<p>Dataene bliver blandt andet anvendt for Google Analytics, MetaTraffic eller andre analyseprogrammer. Oplysningerne kan blive behandlet af servere både i og uden for Danmark. Du kan fravælge cookies fra Google Analytics her:<a target=\"_blank\" href=\"http:\/\/tools.google.com\/dlpage\/gaoptout\">http:\/\/tools.google.com\/dlpage\/gaoptout<\/a><\/p>";
		readMoreText += "					<br \/>";
		readMoreText += "					<h4>Sådan afviser du cookies<\/h4>";
		readMoreText += "					<p>I indstillingerne til din browser, kan du afvise cookies på din computer. Fremgangsmåden er forskellig fra hvilken browser der benyttes. Hvis du beslutter at fravælge cookies, kan gå glip af funktioner og lignende på hjemmesiden, som i så fald ikke vil fungere. <\/p>";
		readMoreText += "					<br \/>";
		readMoreText += "					<h4>Sådan sletter du dine cookies<\/h4>";
		readMoreText += "					<p>Gamle cookies fra tidligere besøg på en hjemmeside kan slettes igen. Det gør du ligeledes i indstillingerne af din webbrowser.​​<\/p>";

		var template = '<div id="cookie-policy">' + 
							'<div id="eu-cookie-read-more">' + 
							'<div id="eu-cookie-read-more-content">' + readMoreText + '</div>' +
							'<a id="euCookieMoreClose">&nbsp;</a>' + 
							'</div>' + 
							'<div id="eu-cookie-bar">' + 
								'<div id="eu-cookie-bar-content">' + 
									'<div id="eu-cookie-bar-side-left">' +
										'<p id="eu-cookie-bar-line-1" class="pad">' + textLine1 + '</p>' + 
										'<p id="eu-cookie-bar-line-2" class="pad">' +
											textLine2 + 
											'<a href="#" id="euCookieMore">' + readMore + '</a>' +
										'</p>' + 
									'</div>' + 
									'<div id="eu-cookie-bar-side-right">' +
										'<div class="pad">' + 
											'<button id="euCookie">' + buttonOk + '</button>' + 
										'</div>' + 
									'</div>' + 
								'</div>' +
							'</div>' + 
						'</div>';
		return template;
	},

	showReadMoreCookiePolicy: function(){
		jQuery('#eu-cookie-read-more').addClass('see');
	},

	hideReadMoreCookiePolicy: function(){
		jQuery('#eu-cookie-read-more').removeClass('see');
	},
	
	showCookiePolicy: function(){
		var template = cookiePolicy.getTemplate();
		jQuery('body').append(template); 
		jQuery('#cookie-policy').css('display', 'block');
	},

	checkCookiePolicy: function(){
		return (cookiePolicy.getCookie("cookie-policy")) ? true : false;
	},

	setCookiePolicy: function(){
		 cookiePolicy.setCookie("cookie-policy", true);
	},

	getCookie: function(cname){
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0)==' ') c = c.substring(1);
	        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
	    }
	    return "";
	},

	setCookie: function(cname, cvalue){
		var CookieDate = new Date;
		CookieDate.setFullYear(CookieDate.getFullYear( ) +1);
		var expires = "expires="+CookieDate.toGMTString( );
		document.cookie = cname + "=" + cvalue + "; " + expires + " ;path=/";
		console.log('cookie is set');
	}
};