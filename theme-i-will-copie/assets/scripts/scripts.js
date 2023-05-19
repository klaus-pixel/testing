jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit

// GG 12/23/2019 Pause player on modal close
var iframe = document.querySelector('.embed-responsive-item');
var player = new Vimeo.Player(iframe);
jQuery("#exampleModalCenter").on("click", function() {
  player.pause();
})

jQuery('.accordion p:empty, .orbit p:empty').remove();// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>");}else{jQuery(this).wrap("<div class='responsive-embed'/>");}});});

/*
Insert Custom JS Below
*/
jQuery(document).on('click', 'a', function(e){ 
  e.preventDefault(); 
  var url = $(this).attr('href'); 
  window.open(url, '_blank');
});
function CookiebotCallback_OnAccept() {
  Cookiebot.changed && document.location.reload();
 }