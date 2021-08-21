<?php 
$after6mount = time()+ (180 * 24 *60*50); // 1 day 
date_default_timezone_set('Africa/Casablanca');
echo "this date after 6 mounth :". date( 'jS \of Y-m h:i:s p', $after6mount);


