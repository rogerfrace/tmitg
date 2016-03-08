<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta property="fb:app_id" content="121619441387">
<meta property="fb:admins" content="1120445561,713632115">
<!-- this chunk is for the random header -->
<style type="text/css">
	#headblock { margin:0; padding:0; width:100%; height:150px; background: url("headers/images/2011/<?=$bgimg[$int];?>") no-repeat scroll 100% 0 #000000; }
</style>
<!-- end header code -->

<?php if (check_mobile()==false): ?>

<!-- for twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- for google +1 -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- is jquery loaded? if so, do shadowbox data-sb conversion -->
<script type="text/javascript">
if (window.jQuery) {
	// need to reassign data-sb to rel before sb inits
	$(document).ready(function() {
		$('a[data-sb]').each(function() {
			$(this).attr('rel',$(this).attr('data-sb') );
		});
	});
}
</script>

<!-- this chunk is for shadowbox -->
<link rel="stylesheet" type="text/css" href="/sb/shadowbox.css" />
<script type="text/javascript" src="/sb/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<!-- end shadowbox chunk -->

<?php endif; ?>
