<?php

//admin include
require_once __DIR__ . '/admin/Admin_Ajax_AK.php';
require_once __DIR__ . '/admin/Admin_Ajax_LS.php';
require_once __DIR__ . '/admin/Admin_Ajax_SK.php';

//front include
//ajax
require_once __DIR__ . '/front/Front_Ajax_AK.php';
require_once __DIR__ . '/front/Front_Ajax_LS.php';
require_once __DIR__ . '/front/Front_Ajax_SK.php';
require_once __DIR__ . '/front/Front_Ajax_AM.php';
//end ajax
require_once __DIR__ . '/front/Category.php';
require_once __DIR__ . '/front/Product.php';
require_once __DIR__ . '/front/Search.php';
require_once __DIR__ . '/front/User_Account.php';
require_once __DIR__ . '/front/User_Account_LS.php';
require_once __DIR__ . '/front/User_Account_SK.php';
require_once __DIR__ . '/front/User_Account_AM.php';

require_once __DIR__ . '/front/Wishlist.php';


// individual other
require_once __DIR__ . '/front/Functions_SK.php';


// custom post
require_once __DIR__ . '/custom-post/HelpCenter.php';


// carbon fields
require_once __DIR__ . '/carbonfields/carbonfields.php';

require_once __DIR__ . '/ThemeInstaller.php';