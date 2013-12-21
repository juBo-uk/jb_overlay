<?php
$whereami = elgg_get_context();
if (!elgg_is_logged_in()) {
if($_SESSION['et_session'] == null && $whereami !== 'register' && $whereami !== 'forgotpassword') {
      
		echo "<div id='overlay'>";
?>
		<div class='jb-wrap'>
		<div class='jb-message'>		
		<h2 style='color: #4690d6'>Guests</h2>

<!-- EDIT THE MESSAGE HERE - Use <h3> & <p>  tags -->
		
		<p>Do you agree to our terms?</p> 
		
		
		
		
		
		
		
<!-- END EDIT  -->		

<?php
//This is the "I agree" button - if you don't want to use it you can comment it out
//Change button text in jb_overlay/views/default/forms/jb_overlay/passt.php 

		echo elgg_view_form('jb_overlay/passt');
				
   //echo elgg_view_form('register');
?>
</div>
<div  id='jb-login'>
<h2 style="color: #4690d6" >Members Log In</h2><br />

<?php

		 echo elgg_view_form('login');

?>

</div>


<?php

echo "</div>";
echo"</div>";
}
}

?>
