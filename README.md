jb_overlay
==========

once-per-session site overlay

A visitor will see a once-per-session semi-transparent overlay to the site.  The visitor is given the option to enter as a guest, or to log in. 

It is easy to change this to a message and login box, or a registration form and login box.

If a visitor enters as a guest, the overlay won't appear again until a new browser session.  If the visitor logs in to the site, then the overlay will appear again after they log out.

The only site pages accessible are 'register' and 'lost password'.

That's it really.

If you want to change the css look in: jb_overlay/views/default/jb_overlay/css.php

Change the message in:  jb_overlay/views/default/jb_overlay/overlay.php (line 12)

The coloured background is a semi-tranparent .png image, so to change the colour you need to change the image: jb_overlay/graphics/bg.png
