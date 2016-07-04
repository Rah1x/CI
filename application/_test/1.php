<meta charset="utf-8" />
<?php
#/ Redirect if not in our IP
//var_dump($_SERVER['REMOTE_ADDR']);
if(in_array($_SERVER['REMOTE_ADDR'], array('203.173.41.189', '127.0.0.1'))==false){
@header("Location: nf.php");
echo "<script language=\"javascript\">location.href='nf.php';</script>";
exit;
}

//exit;

/////////////////////////////////////////////////
/*
require_once('../includes/func_enc.php');
echo md5_encrypt('qqqqqq11').'<br />';
//echo md5_decrypt('czoxOToi4lXMSsFE9W/sZcpw8H3iBTs5OSI7');
die();

$crypt = new Crypt();
$encrypted_data = $crypt->encrypt("TPass1297");

$ori_v = $crypt->decrypt($encrypted_data);
var_dump($encrypted_data, $ori_v);
die();
#*/

//apc_store('T1', 'tt');
//var_dump(apc_fetch('T1'));

/////////////////////////////////////////////////

//require_once('../../includes/config.php');

/*
var_dum(); die(); //testing errors display
var_dump($x); die(); //testing errors display

$up_path = "up_files/offers/0x";
if(!is_dir($up_path)){mkdir($up_path, 0705, true);}
exit;
#*/

/////////////////////////////////////////////////
#/*
echo "<pre>";

//var_dump(extension_loaded('pdo'));
echo date("Y-m-d H:i:s").'<br />';

//var_dump("<pre>", apache_get_modules());echo '<br /><br />';
var_dump(get_current_user()); echo '<br />';

$ax = exec('ls -a', $ar);
var_dump("<pre>", $ax, $ar, "</pre>"); echo '<br />';

var_dump(ini_get('memory_limit')); echo '<br />';
var_dump(php_sapi_name());

phpinfo();
die();
#*/

/////////////////////////////////////////////////
/*
include_once('../includes/send_mail.php');

$msg = "Dear Xr,<br /><br />
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Ut wisi enim ad minim veniam, quis nostrud exerci tation <b>ullamcorper</b> suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br /><br />
Ut wisi enim ad minim veniam, quis nostrud <b>exerci tation</b> ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.";

//$ret1 = send_mail2('r.hasan@apollomedia.com.au', 'Hello World phpMailer', 'Hello World Heading', $msg);
$ret2 = send_mail('r.hasan@apollomedia.com.au', 'Hello World mail 1', 'Hello World Heading', $msg);
var_dumpx($ret1, $ret2);
#*/
?>