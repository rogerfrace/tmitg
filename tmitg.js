/* code that allows rel="external" to open links in a new window */
/* rel="external" is the new target="_blank" */
function externalLinks() {
	if (!document.getElementsByTagName) {return;}
	var anchors = document.getElementsByTagName("a");
	for (var i=0; i<anchors.length; i++) {
		var anchor = anchors[i];
		if (anchor.getAttribute("href") &&
			anchor.getAttribute("rel") == "external") {
		anchor.target = "_blank"; }
	}
}
window.onload = externalLinks;


jQuery(document).ready(function() {
	// replace no-js on <html> with has-js
	jQuery("html").removeClass('no-js').addClass('has-js');

	// add current class to discography subnav
	var pathname = window.location.pathname;
	switch (pathname) {
		case '/vs.php':
			jQuery("ul.subnav a[href='vs.php'] img").addClass('current');
			jQuery("ul.subnav a[href='vs.php']").attr('aria-current','page');
		break;
		case '/underworld.php':
			jQuery("ul.subnav a[href='underworld.php'] img").addClass('current');
			jQuery("ul.subnav a[href='underworld.php']").attr('aria-current','page');
		break;
		case '/winters.php':
			jQuery("ul.subnav a[href='winters.php'] img").addClass('current');
			jQuery("ul.subnav a[href='winters.php']").attr('aria-current','page');
		break;
		case '/mists.php':
			jQuery("ul.subnav a[href='mists.php'] img").addClass('current');
			jQuery("ul.subnav a[href='mists.php']").attr('aria-current','page');
		break;
		case '/asphodel.php':
			jQuery("ul.subnav a[href='asphodel.php'] img").addClass('current');
			jQuery("ul.subnav a[href='asphodel.php']").attr('aria-current','page');
		break;
		case '/shadowpuppets.php':
			jQuery("ul.subnav a[href='shadowpuppets.php'] img").addClass('current');
			jQuery("ul.subnav a[href='shadowpuppets.php']").attr('aria-current','page');
		break;
		case '/xv.php':
			jQuery("ul.subnav a[href='xv.php'] img").addClass('current');
			jQuery("ul.subnav a[href='xv.php']").attr('aria-current','page');
		break;
		case '/storm.php':
			jQuery("ul.subnav a[href='storm.php'] img").addClass('current');
			jQuery("ul.subnav a[href='storm.php']").attr('aria-current','page');
		break;
		case '/places.php':
			jQuery("ul.subnav a[href='places.php'] img").addClass('current');
			jQuery("ul.subnav a[href='places.php']").attr('aria-current','page');
		break;
	// and main nav
		case '/':
			jQuery("nav a[href='/index.php']").attr('aria-current','page').addClass('current');
		break;
		case '/news.php':
			jQuery("nav a[href='/news.php']").attr('aria-current','page').addClass('current');
		break;
		case '/discog.php':
			jQuery("nav a[href='/discog.php']").attr('aria-current','page').addClass('current');
		break;
		case '/music.php':
			jQuery("nav a[href='/music.php']").attr('aria-current','page').addClass('current');
		break;
		case '/images.php':
			jQuery("nav a[href='/images.php']").attr('aria-current','page').addClass('current');
		break;
		case '/bio.php':
			jQuery("nav a[href='/bio.php']").attr('aria-current','page').addClass('current');
		break;
		case '/merch.php':
			jQuery("nav a[href='/merch.php']").attr('aria-current','page').addClass('current');
		break;
		case '/contact.php':
			jQuery("nav a[href='/contact.php']").attr('aria-current','page').addClass('current');
		break;
		case '/links.php':
			jQuery("nav a[href='/links.php']").attr('aria-current','page').addClass('current');
		break;
		case '/live.php':
			jQuery("nav a[href='/live.php']").attr('aria-current','page').addClass('current');
		break;
	}

	// set focus to main when click on skip link
	jQuery("#main").attr("tabindex","-1");
	jQuery("#stm").click(function() {
		jQuery("#main").focus();
	});
	// convert aria classes to roles and states
	jQuery(".ariahidden").attr("aria-hidden","true");

	if (jQuery.isFunction(window.colorbox)) {
		// colorbox activation (non-photos), only if loaded (non-mobile)
		jQuery(".lyriclink").colorbox({iframe:'true', returnFocus:'true', rel:'lyrics', transition:"fade", width:"400px", height:"80%"});
		jQuery(".musiclink").colorbox({iframe:'true', returnFocus:'true', rel:'music', transition:"fade", width:"380px", height:"520px"});
		jQuery(".videolink").colorbox({iframe:'true', returnFocus:'true', rel:'videos', transition:"fade", width:"550px", height:"450px"});
	}
	
	// append aria-modal="true" to modals
	jQuery(document).bind('cbox_complete', function(){
		jQuery("[role='dialog']").attr("aria-modal","true");
	});

	// homepage mobile nav
	$('button').click(function() {
  	  $(this).toggleClass('expanded').siblings('div').slideToggle();
  	  if ($(this).hasClass("expanded")){
  	  	$(this).attr("aria-expanded","true");
  	  } else {
  	  	$(this).attr("aria-expanded","false");
  	  }
    });
});
