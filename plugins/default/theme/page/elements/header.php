<style>
	header {
    background-color: #3b5998;
    border-bottom: 1px solid #29487d;
    color: #fff;
    z-index: 1;
    padding: 5px;
    height: 85px;
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
		        margin-top: 25px!important;
    padding: 3px 8px !important;
	    background: #718dc7 !important;
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