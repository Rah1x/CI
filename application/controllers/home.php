<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    private function set_hdr($data_pass)
    {
        $this->load->view('header', $data_pass);
    }

    private function set_ftr()
    {
        $this->load->view('footer');
    }

    ///////////////////////////////////////////////////////////////////

    public function index()
	{
        $cms_data = $this->main_model->get_cms_data(array('full_name', 'email_add'));
        //var_dumpx($cms_data);

        #/ Header
        $data_pass = array(
        'insert_css' => '',
        'insert_js' => '',
        'page_title' => 'Lorem ipsum Page',
        'head_msg' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
        );
        $this->set_hdr($data_pass);


        $v_dta = array(
        'cms_data'=>$cms_data
        );
        $this->load->view('home_inner', $v_dta);


        #/ Footer
        $this->set_ftr();
	}
}