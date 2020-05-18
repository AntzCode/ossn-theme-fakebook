<?php
/**
 * Fakebook Theme for Open Source Social Network
 *
 * @package   fakebook for ossn
 * @author    AntzCode Ltd <www.antzcode.com>
 * @copyright 2020 AntzCode Limited
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.github.com/antzcode/ossnfacebook
 */
?>
<div class="ossn-layout-startup">
	<div class="container">
		<div class="row">
            <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>        
			<div class="ossn-home-container">
				<div class="inner">
					<?php echo $params['content']; ?>
				</div>
			</div>
		</div>
		<?php echo ossn_plugin_view('theme/page/elements/footer');?>
	</div>
</div>