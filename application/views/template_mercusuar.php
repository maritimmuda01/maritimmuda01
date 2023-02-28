<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<?php echo $head_script ?>
	    <?php echo $page_css ?>
    </head>
    <body class="bg-background-fade-mercusuar">
    	<?php echo $header ?>
        <?php echo $konten ?>
        <?php echo $footer ?>
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <?php echo $page_js ?>
        <?php echo $foot_script ?>
    </body>

</html>