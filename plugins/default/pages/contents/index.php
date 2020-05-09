<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
<script>
	$(document).ready(function(){
		$('footer').find('.col-md-11').addClass('col-md-12').removeClass('col-md-11');						   
	});
</script>
<div class="row ossn-page-contents">
		<div class="col-md-6 home-left-contents">
            <div class="description">
            	<?php echo ossn_print('home:top:heading', array(ossn_site_settings('site_name'))); ?>
            </div><br />
            <img src="<?php echo ossn_theme_url();?>images/users.png" />
 	   </div>   
       <div class="col-md-6">
    	<?php 
			$contents = ossn_view_form('signup', array(
        					'id' => 'ossn-home-signup',
        				'action' => ossn_site_url('action/user/register')
	   	 	));
			$heading = "<p>".ossn_print('its:free')."</p>";
			echo ossn_plugin_view('widget/view', array(
						'title' => ossn_print('create:account'),
						'contents' => $heading.$contents,
			));
			?>	       			
       </div>     
</div>	
