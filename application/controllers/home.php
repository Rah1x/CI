<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->load->view('home_message');

        $cms_data = $this->main_model->get_cms_data(array('full_name', 'email_add'));
        var_dumpx($cms_data);
	}
}