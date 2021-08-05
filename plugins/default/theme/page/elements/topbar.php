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
 
	if(ossn_isLoggedin()){		
		$hide_loggedin = "hidden-xs hidden-sm";
	}
?>
<!-- ossn topbar -->
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-5 left-side left">
			  <a href="<?php echo ossn_site_url() ?>" class="sitename" href="<?php echo ossn_site_url();?>" title="<?php echo ossn_site_settings('site_name'); ?>">
			    <span><?php /*$name = ossn_site_settings('site_name'); echo $name[0];*/ ?>f</span></a>
				<?php if(ossn_isLoggedin()){ ?>
				<div class="topbar-menu-left site-name">
                    <?php echo ossn_view_form('search', array(
								'component' => 'OssnSearch',
								'class' => 'ossn-search',
								'autocomplete' => 'off',
								'method' => 'get',
								'security_tokens' => false,
								'action' => ossn_site_url("search"),
					), false);
				?>
                    <i class="fa fa-search search-icon-submit" title="Search Now"></i>
				</div>
				<?php } ?>
			</div>
            <div class="col-md-4 mid-side">
                	<div class="topbar-userdata">
			    <div class="user-icon"><a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"><img src="<?php echo ossn_loggedin_user()->iconURL()->smaller;?>" /></a></div>
			    <div class="name"><a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"><?php echo ossn_loggedin_user()->fullname; ?></a></div>
			    <div class="homelink"><a href="<?php echo ossn_site_url();?>home"><?php echo ossn_print('home');?></a></div>
			</div>            
            </div>
			<div class="col-md-3 text-right right-side">
				<div class="topbar-menu-right">
					<ul>
					<li class="ossn-topbar-dropdown-menu">
						<div class="dropdown">
						<?php
							if(ossn_isLoggedin()){						
								echo ossn_plugin_view('output/url', array(
									'role' => 'button',
									'data-bs-toggle' => 'dropdown',
									'data-bs-target' => '#',
									'text' => '<i class="fa fa-sort-desc"></i>',
								));									
								echo ossn_view_menu('topbar_dropdown'); 
							}
							?>
						</div>
					</li>                
					<?php
						if(ossn_isLoggedin()){
							echo ossn_plugin_view('notifications/page/topbar');
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./ ossn topbar -->
