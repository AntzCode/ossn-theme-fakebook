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
$menus = $params['menu'];
?>
<div class="sidebar-menu-nav">
          <div class="sidebar-menu">
                 <ul id="menu-content" class="menu-content">
<?php 
// sort the menus
uksort($menus, function($a, $b){
    $preferredOrder = array(
	'links',
	'bpage',
	'groups',
	'videos',
	'polls',
	'event'
    );
    if(!in_array($a, $preferredOrder)){
	// put the unspecified link after our preferences
	return 1;
    }
    if(!in_array($b, $preferredOrder)){
	// put the unspecified link after our preferences
	return -1;
    }
    return (array_search($a, $preferredOrder) > array_search($b, $preferredOrder)) ?1 : -1;
});
foreach ($menus as $name => $menu) {
	$section = 'menu-section-'.OssnTranslit::urlize($name).' ';
	$items = 'menu-section-items-'.OssnTranslit::urlize($name).' ';
	
	$expend = '';
	$hash = md5($name);
    ?>
     <li data-bs-target="#<?php echo $hash;?>" class="<?php echo $section;?>">
        	<a class="<?php $item;?>" href="javascript:void(0);"><?php echo ossn_print($name);?></a>
     </li>
    <ul class="sub-menu <?php echo $expend;?>" id="<?php echo $hash;?>" class="<?php echo $items;?>"> 
    <?php
	if(is_array($menu)){
	    foreach ($menu as $data) {
			$class = 'menu-section-item-'.OssnTranslit::urlize($data['name']);
			$data['class'] = 'menu-section-item-a-'.OssnTranslit::urlize($data['name']);
			unset($data['name']);
			unset($data['icon']);
			unset($data['section']);
			unset($data['parent']);
		
			$link = ossn_plugin_view('output/url', $data);		
			echo "<li class='{$class}'>{$link}</li>";
			unset($class);
    	}
	}
	echo "</ul>";
}
?>

         </ul>
    </div>
</div>
