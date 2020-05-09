<div class="sidemenu">
 <?php
          			  if (ossn_is_hook('newsfeed', "sidebar:left")) {
                			$newsfeed_left = ossn_call_hook('newsfeed', "sidebar:left", NULL, array());
               				 echo implode('', $newsfeed_left);
            		}
           		 ?>                
</div>