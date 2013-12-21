<?php
//css for jb_overlay
?>


#overlay {
	z-index: 1999;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/jb_overlay/graphics/bg.png);
	position:fixed; top:0px; left:0px; width:100%; height:100%; 
}
.jb-wrap {width: 800px; margin: auto; margin-top: 150px; 	}
.jb-message {float: left; width:400px; min-height: 504px; background: #fff; height: 200px; padding: 2.4em; }
#jb-login {float: left; padding: 2.4em; background: #000; height: 504px; width: 200px;}
#jb-login label {color: #ccc;}


