

 <!-- ==================================================== -->
 <!-- ===========  IMPORTS AND SCRIPTS  ========== -->
 <!-- ==================================================== -->

<!-- ADD CSS CDN or Library Imports here -->
<!-- CSS Libraries are Stored in "assets" Folder -->
<!-- use def_url() and echo it in a php tag to specify your default url. -->
<!-- go to config/siteur.php to configure them -->
<link rel="stylesheet" type="text/css" href="<?php echo def_url(); ?>assets/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo def_url(); ?>assets/bootstrap/css/bootstrap.min.css">



<!-- ADD JAVASCRIPT CDN or Library Imports here -->
<!-- JS Libraries are Stored in "assets" Folder -->
<!-- use def_url() and echo it in a php tag to specify your default url. -->
<!-- go to config/siteurl.php to configure them -->
<script src=""></script>
<script src="<?php echo def_url(); ?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo def_url(); ?>assets/popper/popper.min.js"></script>
<script src="<?php echo def_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>



<!-- ADD JavaScript Source Code here -->
<script type="text/javascript">
	$(function() {
		// ADD Any JavaScript Functions and Source Code here
	})

	function showPassword(){
		var x = document.getElementById("txtpassword");
		if(x.type === "password"){
			x.type = "text";
		}else{
			x.type="password";
		}
	}
</script>