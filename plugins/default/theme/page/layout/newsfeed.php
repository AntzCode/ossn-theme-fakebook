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
 
//unused pagebar skeleton when ads are disabled #628 
if(ossn_is_hook('newsfeed', "sidebar:right")) {
	$newsfeed_right = ossn_call_hook('newsfeed', "sidebar:right", NULL, array());
	$sidebar = implode('', $newsfeed_right);
	$isempty = trim($sidebar);
}

$sideMenuHtml = ossn_plugin_view('theme/page/elements/sidemenu');

?>
<div class="sidemenu-absolute"><?php echo $sideMenuHtml;?></div>

<div class="container">
	<div class="row">
       	<?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
		<div class="ossn-layout-newsfeed">
        	<div class="col-md-2">
		    <?php echo $sideMenuHtml;?>
		</div>
			<div class="col-md-6">
				<div class="newsfeed-middle">
					<?php echo $params['content']; ?>
				</div>
			</div>
			<div class="col-md-3">
            	<?php if(!empty($isempty)){ ?>
				<div class="newsfeed-right">
					<?php
						echo $sidebar;
						?>                            
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
	<?php echo ossn_plugin_view('theme/page/elements/footer');?>
</div>