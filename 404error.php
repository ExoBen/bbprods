<?php 
set_include_path(implode(PATH_SEPARATOR,Array('.','./includes','../includes','../../includes',get_include_path())));
include_once('header.php'); ?>

<title>Page cannot be found</title>

<div class="row">
    <div class="col-md-12">
        Sorry! Page not found - 404 Error! Click above to go back to home!
    </div>
</div>

<?php include_once('footer.php'); ?>
