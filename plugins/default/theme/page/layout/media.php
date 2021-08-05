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
if (com_is_active('OssnAds')) {
    $ads = ossn_plugin_view('ads/page/view');
    $ads = trim($ads);
}
?>
<div class="sidemenu-absolute"><?php echo ossn_plugin_view('theme/page/elements/sidemenu');?></div>

<div class="container">
  <div class="row">
      <?php echo ossn_plugin_view('theme/page/elements/system_messages'); ?>    
    <div class="ossn-layout-media">
      <div class="row">
	<div class="col-md-8">
	  <div class="content">
	      <?php echo $params['content']; ?>
	  </div>
	</div>
	<div class="col-md-3">
	    <?php if (!empty($ads)) { ?>
    	  <div class="page-sidebar">
		<?php
		echo $ads;
		?>
    	  </div>
	  <?php } ?>
	</div>
      </div>
    </div>
  </div>
  <?php echo ossn_plugin_view('theme/page/elements/footer'); ?> 
</div>