<?php if(!defined('BASEPATH')){exit;} ?>

<?php
if(!isset($cms_data) || empty($cms_data))
{
    echo "Error Fetching Result!";
}
else
{
    //var_dumpx($cms_data);
    echo "<h2>Name: {$cms_data['full_name'][0]['m_value']}<br />";
    echo "<h2>Email Address: {$cms_data['email_add'][0]['m_value']}<br />";
}
?>