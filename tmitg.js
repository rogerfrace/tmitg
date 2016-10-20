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
		break;
		case '/underworld.php':
			jQuery("ul.subnav a[href='underworld.php'] img").addClass('current');
		break;
		case '/winters.php':
			jQuery("ul.subnav a[href='winters.php'] img").addClass('current');
		break;
		case '/mists.php':
			jQuery("ul.subnav a[href='mists.php'] img").addClass('current');
		break;
		case '/asphodel.php':
			jQuery("ul.subnav a[href='asphodel.php'] img").addClass('current');
		break;
		case '/shadowpuppets.php':
			jQuery("ul.subnav a[href='shadowpuppets.php'] img").addClass('current');
		break;
		case '/xv.php':
			jQuery("ul.subnav a[href='xv.php'] img").addClass('current');
		break;
		case '/storm.php':
			jQuery("ul.subnav a[href='storm.php'] img").addClass('current');
		break;
	}
	
	// convert class ariahidden to aria-hidden="true"
	jQuery(".ariahidden").attr("aria-hidden","true");	
});
