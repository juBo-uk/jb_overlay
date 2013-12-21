<?php
elgg_register_event_handler('init', 'system', 'jb_overlay_init');

function jb_overlay_init() {
	        elgg_extend_view('css/elgg', 'jb_overlay/css');
					
					elgg_extend_view('page/elements/header_logo', 'jb_overlay/overlay');					
					// OR
          //elgg_extend_view('page/elements/body', 'jb_overlay/overlay', 450);
										
					$base = elgg_get_plugins_path() . 'jb_overlay/actions/jb_overlay';
					elgg_register_action('jb_overlay/passt', "$base/passt.php", 'public');
   
}
