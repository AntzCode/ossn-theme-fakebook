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
$params['controls'] = (isset($params['controls'])) ? $params['controls'] : '';

?>
	<div class="col-md-11">
		<div class="ossn-layout-module">
			<div class="module-title">
				<div class="title"><?php echo $params['title']; ?></div>
				<div class="controls">
					<?php echo $params['controls']; ?>
				</div>
			</div>
			<div class="module-contents">
				<?php echo $params['content']; ?>
			</div>
		</div>
	</div>