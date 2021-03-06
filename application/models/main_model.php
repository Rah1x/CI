<?php
class main_model extends CI_Model {

    function __construct(){
    parent::__construct();

    //var_dumpx($this->db->query('select now()')); //testing
    }


    /**
     * Get all CMD Data from Cache (progressively).
     * [params]
     * $c_key = Only fetch for these keys.
    */
    function get_cms_data($cats=array(), $reset=false)
    {
        $cms_data = array();

        $sql_1 = "SELECT * FROM cms_data
        WHERE m_cat IN (##LIST_OF_FV##)
        ORDER BY m_cat, id";

        $cms_data = $this->shared_mem_lib->sm_var($cats, "cms_data", 'm_cat', $sql_1, $this, $reset);
        if(empty($cms_data)){return false;}

        $cms_data = @array_map('cb_risky', $cms_data);
        //var_dump_p($sql_1, $cms_data); die();
        #-

        return $cms_data;

    }//end func...

}
?>