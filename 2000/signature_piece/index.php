<?php
set_include_path(implode(PATH_SEPARATOR,Array('.','./includes','../includes','../../includes',get_include_path())));
include_once('header.php'); ?>

<div class="row gallery">
	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-centered gallery_td_style_l">
		<img src="01.jpg">
	</div>
	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 col-centered gallery_td_style_l">
		<img src="02.jpg">
	</div>
</div>

<?php include_once('footer.php'); ?>
