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
$sitename = ossn_site_settings('site_name');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $sitename;
} else {
    $title = $sitename;
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
	
	<?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>
    <?php echo ossn_fetch_extend_views('ossn/site/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/js/head'); ?>
    </script>
</head>

<body>

	<div class="ossn-halt ossn-light"></div>
	<div class="ossn-message-box"></div>
	<div class="ossn-viewer" style="display:none"></div>
    
    <div class="opensource-socalnetwork">
    	<?php echo ossn_plugin_view('theme/page/elements/sidebar');?>
    	 <div class="ossn-page-container">
			  <?php if(ossn_isLoggedin()){ 
			  			echo ossn_plugin_view('theme/page/elements/topbar');
			  		} else {
			  			echo ossn_plugin_view('theme/page/elements/header');
							
					}
			  ?>
          <div class="ossn-inner-page">    
  	  		  <?php echo $contents; ?>
          </div>    
		</div>
    </div>
    <?php echo ossn_fetch_extend_views('ossn/page/footer'); ?>           
</body>
</html>
