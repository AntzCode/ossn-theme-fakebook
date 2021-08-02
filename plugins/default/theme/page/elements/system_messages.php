<?php
/**
 * Fakebook Theme for Open Source Social Network
 *
 * @package   fakebook for ossn
 * @author    AntzCode Ltd <www.antzcode.com>
 * @copyright 2020 AntzCode Limited
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.github.com/antzcode/ossnfacebook
 */
 	$col = "col-md-11";
	if(array_key_exists('admin', $params) && $params['admin'] === true){
		$col = "col-md-12";
	}
 ?>
<div class="ossn-system-messages">
   <div class="row">
	   <div class="<?php echo $col;?> ossn-system-messages-inner">
    		<?php echo ossn_display_system_messages(); ?>
   		</div>
	</div>
</div>    