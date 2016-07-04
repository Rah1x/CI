<?php
/*
$to = 'r.hasan@apollomedia.com.au';
$subject = "Test 1";

$messg = "Test 1";
$messg = chunk_split(base64_encode($messg));

$hdr = "";

$retr = mail($to, $subject, $messg, $hdr);
var_dump($retr); exit;
#*/

///////////////////////////////////////////////////////////////////////////

$start = time(true);
require_once('../../includes/config.php');
include_once('../../includes/send_mail.php');

$msg = "Dear Xr,<br /><br />
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Ut wisi enim ad minim veniam, quis nostrud exerci tation <b>ullamcorper</b> suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br /><br />
Ut wisi enim ad minim veniam, quis nostrud <b>exerci tation</b> ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.";

$ret2 = send_mail2('r.hasan@apollomedia.com.au', 'Hello World mail 1', 'Hello World Heading', $msg); //send_mail = 4secs; send_mail2 = 5secs
$time_elapsed_secs = time() - $start;
var_dump($time_elapsed_secs, $ret2);
?>