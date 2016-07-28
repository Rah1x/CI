<?php if(!defined('BASEPATH')){exit;} ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CI - Practice :: <?php if(!@empty($page_title)){echo @$page_title.' | ';} ?>LOREUM ISPUM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="keywords" content="<?php echo @$meta_keywords; ?>" />
    <meta name="description" content="<?php echo @$meta_descr; ?>" />

	<?php if(isset($insert_css) && is_array($insert_css)){foreach($insert_css as $icss){echo $icss."\r\n\t";}} ?>
    <?php if(isset($insert_js) && is_array($insert_js)){foreach($insert_js as $ijs){echo $ijs."\r\n\t";}} ?>
</head>

<body>
<div style="width:90%; margin:auto;">
    <h1 style="text-align: center;"><?php echo @$head_msg; ?></h1>

    <div class="main_body" style="text-align: center;">
    <br />