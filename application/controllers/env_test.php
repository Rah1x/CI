<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Env_test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();


        ###/ Only allow access after Authetication
        $ADMIN_USERNAME = 'env_Tx';
        $ADMIN_PASSWORD = 'Lhhh';

        //if(!isset($_SESSION['env_test_auth']))
        //$_SESSION['env_test_auth'] = 0;
        //$AUTHENTICATED = (int)$_SESSION['env_test_auth'];

        //if(!$AUTHENTICATED){
    	if (!isset($_SERVER['PHP_AUTH_USER']) ||
		!isset($_SERVER['PHP_AUTH_PW']) ||
		$_SERVER['PHP_AUTH_USER'] != $ADMIN_USERNAME ||
		$_SERVER['PHP_AUTH_PW'] != $ADMIN_PASSWORD)
        {
    		//var_dump($_SERVER['PHP_AUTH_USER'],ADMIN_USERNAME, $_SERVER['PHP_AUTH_PW'], ADMIN_PASSWORD); exit;
            Header("WWW-Authenticate: Basic realm=\"ENV TEST Login\"");
			Header("HTTP/1.0 401 Unauthorized");

			echo "
			<html><body>
			<h1>Rejected!</h1>
			<big>Wrong Username or Password!</big><br/>&nbsp;<br/>&nbsp;
			</body></html>";
			exit;

		} else {
			//$_SESSION['env_test_auth'] = 1;
		}
        //}
        ##--

	}

    public function t($pg='')
    {
        if(empty($pg)){return false;}
        //var_dumpx($pg);

        $fl_p = APPPATH."_test/{$pg}.php";
        //var_dumpx(__FILE__, $fl_p, is_file($fl_p));

        if(!is_file($fl_p)){return false;}
        else{
        include_once($fl_p);
        }
    }//end func...
}