<?php
set_include_path(implode(PATH_SEPARATOR,Array('.','./includes','../includes','../../includes',get_include_path())));
include_once('header.php'); ?>


<table class="table_style">
	<tr>
		<td class="gallery_td_style_l">
			<img src="01.jpg">
		</td>
		<td class="gallery_td_style_p">
			<img src="02.jpg">
		</td>
	</tr>
</table>


<?php include_once('footer.php'); ?>