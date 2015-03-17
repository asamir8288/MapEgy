<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');
define('ROUTS_ITEM_TEMPLATE','$route["%s"]        ="%s";');
define('ROUTS_ITEM_TEMPLATE1','$route1["%s"]        ="%s";');

define('URL_PREFIX_EN_PRODUCT', 'product/index');
define('URL_PREFIX_EN_SERVICES', 'service/index');
define('URL_PREFIX_EN_ABOUT', 'about_us/index');
define('URL_PREFIX_EN_PRESS', 'press/index');
define('URL_PREFIX_EN_CAREER', 'job/index');
define('URL_PREFIX_EN_NEWS', 'news_section/index');
define('URL_PREFIX_EN_CONTACT', 'contact/index');
define('URL_PREFIX_EN_IMPRINT', 'legal_policy/index');
define('URL_PREFIX_EN_EVENTS', 'news_section/list_all_events');
define('URL_PREFIX_EN_HOME', 'home/index');



/* End of file constants.php */
/* Location: ./application/config/constants.php */