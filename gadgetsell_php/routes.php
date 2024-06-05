<?php

require_once __DIR__ . '/router.php';

get('/', 'index.php');
get('/o-kompanii', 'o-kompanii.php');
get('/dostavka-i-oplata', 'dostavka-i-oplata.php');
get('/garantiya', 'garantiya.php');
get('/trade-in', 'trade-in.php');
get('/obmen-i-vozvrat', 'obmen-i-vozvrat.php');
get('/servis', 'servis.php');
get('/catalog', 'catalog.php');
get('/iphone', 'iphone.php');
get('/mac', 'mac.php');
get('/ipad', 'ipad.php');
get('/watch', 'watch.php');
get('/airpods', 'airpods.php');
get('/page', 'page.php');

any('/404', 'public/status/error/404.php');

?>