<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$user      = ossn_loggedin_user();
$birthdays = ossn_get_upcomming_birthdays($user);
if($birthdays) {
		echo "<ul>";
		foreach($birthdays as $item) {
				$item->birthdate = str_replace('/', '-', $item->birthdate);
				$time = strtotime($item->birthdate);
				$time = date('jS \of F', $time);
				$date = "<span class='time-created right'>{$time}</span>";
				echo "<a href='{$item->profileURL()}'><li><img src='{$item->iconURL()->small}' /><div><i class='fa fa-birthday-cake'></i>{$item->fullname}{$date}</div></li></a>";
		}
		echo "</ul>";
}