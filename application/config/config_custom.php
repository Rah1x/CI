<?php
//@session_start();
$config['x']='1'; //autoload needs at least 1 entry in the config array

if(in_array($_SERVER['SERVER_NAME'], array('ci-local', 'ci-local.com', 'localhost'))==false) //SERVER
{
    //turn off all errors when its on Production
    //error_reporting(0);
    //ini_set('error_reporting', 'Off');
    //ini_set('display_errors', 'Off');
    //ini_set('display_startup_errors', false);

    #/*##/ ini force as php.ini is not working on godaddy
    ini_set('date.timezone', 'Australia/Melbourne');
    ini_set('short_open_tag', 'On');
    ini_set('register_globals', 'Off');
    ini_set('magic_quotes_gpc', 'Off');
    ini_set('memory_limit', '512M');
    ini_set('upload_max_filesize', '15M');
    ini_set('post_max_size', '16M');
    ini_set('max_execution_time', '2400');
    ini_set('session.cookie_httponly', '1');
    ini_set('session.use_only_cookies', '1');
    #*/-


    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {define('URL_PREFIX', 'https');}
    else {define('URL_PREFIX', 'http');}

    define('SITE_URL', URL_PREFIX.'://www.pickthewinner.com.au/');
    define('SITE_URL_WWW', URL_PREFIX.'://pickthewinner.com.au/');

    define('TOP_ROOT', '/www/');
    define('DOC_ROOT', '/');
    define('DOC_ROOT_ADMIN', '/back_adm/');

    define('AUTO_COMPLETE', 'autocomplete="off"');
    define('SERVER_TYPE', 'LIVE');


    ### Special Code to stop get_magic_quotes_gpc
    #/ You will have to manually do it for parse_str function as it may insert magic quote there automatically
    function stop_magic_quotes($in)
    {
        $out = $in;

    	if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
        {
            if(is_array($out))
            {
                foreach($out as $k=>$v)
                {
                    $v = stop_magic_quotes($v);
                    $out[$k] = $v;
                }
            }
            else
            {
                $out = stripslashes($out);
            }
        }

    	return $out;
    }//end func................

    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
    {
        $_GET = array_map('stop_magic_quotes', $_GET);
        $_POST = array_map('stop_magic_quotes', $_POST);
    }//end if....
    #-


    ##/ SMTP Constants // will work if SSL is enabled
    define('SMTP_HOSTX', 'pickthewinner.com.au'); //smtp.secureserver.net
    define('SMTP_USERX', 'noreply@pickthewinner.com.au');
    define('SMTP_PASSWORDX', '2tu}yQGhmafO');
    #-

}
else //LOCALHOST
{

    error_reporting(E_ALL);


    //var_dump($_SERVER['SERVER_NAME']);
    $SERVER_NAME = str_replace('/', '', $_SERVER['SERVER_NAME']);
    define('SITE_URL', "http://{$SERVER_NAME}/");
    define('SITE_URL_WWW', "http://{$SERVER_NAME}/");

    define('TOP_ROOT', '/www_root/');
    define('DOC_ROOT', '/');
    define('DOC_ROOT_ADMIN', '/back_adm/');

    define('AUTO_COMPLETE', '');
    define('SERVER_TYPE', 'LOCAL');


    ##/ SMTP Constants
    define('SMTP_HOSTX', 'localhost');
    define('SMTP_USERX', 'noreply@ci-prac.com');
    define('SMTP_PASSWORDX', '');
    #-

}

##/ Common Constants
define('FROM_EM', 'noreply@ci-prac.com.au');
define('SUPPORT_EM', 'support@ci-prac.com.au'); //r.hasan@apollomedia.com.au
define('SITE_NAME', 'ci-prac');
define('SITE_NAME_FULL', 'ci-prac.com.au');
#-

///////////////////////////////////////////////////////////////

static $browser;
$browser = @$_SERVER['HTTP_USER_AGENT'];
if((stristr($browser, 'msie')!=false) || (stristr($browser, 'trident')!=false)) {$browser = 'msie';}
if(stristr($browser, 'chrome')!=false) {$browser = str_ireplace('safari', '', $browser);}
define('BROWSER', $browser);

$consts = get_defined_constants();

?>