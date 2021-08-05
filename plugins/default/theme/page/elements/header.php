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
<style>
	header {
	    background-color: #3b5998;
	    border-bottom: 1px solid #29487d;
	    color: #fff;
	    z-index: 1;
	    padding: 5px;
	}
	.sitename-header {
	    font-size: 30px;
	    font-weight: bold;
	    margin-top: 15px;
	}
	header label {
	    font-size: 12px;
	}
	header input[type='password'],
	header input[type='text']{
	    padding: 3px 10px !important;
	    color: #000 !important;
	    margin-bottom: 2px !important;
	}
	header a {
	    font-size: 12px;
	    color: #fff;
	}
	header input[type='submit']{
	    margin-top: 20px!important;
	    padding: 3px 8px !important;
	    background: #718dc7 !important;
	}
	.ossn-startup-logo{
	    width: 55px;
	    margin-right: 13px;
	    background: white;
	    border-radius: 20px;
	    height: 55px;
	    padding: 5px;
	}
	img.users-connected{
	    width: 440px;
	    margin-left: 40px;
	    margin-top: 0px;
	}
	
	@media (max-width: 480px) {
	    img.users-connected{
		width: 380px;
		margin-left: 0px;
		margin-top: -20px;
	    }
	    .widget-heading{
		text-align:center;
	    }
	    .widget-contents > p{
		text-align: center;
	    }
	    .ossn-layout-startup .ossn-form .col-md-6:first-child{
		padding-right: 15px;
	    }
	    .ossn-red-borders{
		border-width: 3px !important;
	    }
	}
</style>
<header>	
		<div class="container">
        	<div class="col-md-6">
            	<div class="sitename-header">
                	FakeBook
                </div>
            </div>	
            <div class="col-md-6">
            	<?php echo ossn_view_form('login', array(
            			'id' => 'ossn-login',
           				'action' => ossn_site_url('action/user/login'),
 		 	      	));
				?>
            </div>
        </div>
</header>