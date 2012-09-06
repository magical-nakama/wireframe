<?php
/*
** 404
** Site 404 error page.
*/

include (TEMPLATEPATH . '/header.php');
include (TEMPLATEPATH . '/home_header.php');
?>

<div id="four_o_four">
	<h2>The Page You Requested Could Not Be Found</h2>
	<p>Sorry but that page doesn't seem to exist. Please feel free to browse the rest of our content.</p>
</div><!--#four_o_four-->


<?php
include (TEMPLATEPATH . '/primary_blogloop.php');
include (TEMPLATEPATH . '/additional_content.php');
include (TEMPLATEPATH . '/main_navigation.php');
include (TEMPLATEPATH . '/footer.php');
?>