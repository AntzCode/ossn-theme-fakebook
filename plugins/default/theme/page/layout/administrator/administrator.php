<?php
/**
 * Fakebook Theme for Open Source Social Network
 *
 * @package   fakebook for ossn
 * @author    AntzCode Ltd <www.antzcode.com>
 * @copyright 2020 AntzCode Limited
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.github.com/antzcode/ossn-theme-fakebook
 */
 ?>
<div class="ossn-layout-admin">
	<?php echo ossn_plugin_view('theme/page/elements/system_messages', array(
						'admin' => true
	  	  )); 
	?>    
    <div class="row">
		<div class="page-title"><?php echo $params['title']; ?></div>
    	<div class="col-md-12 contents">
    	 	<?php echo $params['contents']; ?>
    	</div>
	</div>
</div>    