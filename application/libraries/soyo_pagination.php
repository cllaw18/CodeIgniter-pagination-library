<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * CodeIgniter Pagination
 *
 * A Library helper create codeIgniter pagination.
 *
 * @package         CodeIgniter
 * @author          Soyo Solution
 * @created         30th July,2014
 * @link            http://www.soyosolution.com/
 */

class soyo_pagination extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $ci =& get_instance();
        $ci->load->library("pagination");
        $ci->load->helper('url');
        $ci->load->database();
    }
    
/**
 * public function create_pagination($paging)
 * --------------------------------------
 * This function is for create the pagination, storing the config value for Codenigter. To know more, you can visit this page:
 * http://ellislab.com/codeigniter/user-guide/libraries/pagination.html
 * This function would call 2 functions :
 *  - record_count()       => Count the total rows number which would be return of your sql.
 *  - load_db_data($model) => For adding sth (LIMIT) to your sql statment.
 *
 * @param  $paging         Restored the $config value, called from controller. This is an array including 3 config value:
 *                         - $paging['sql']        => SQL statment to be process, It's your sql from controller.
 *                         - $paging['per_page']   => Show how many record within a page.
 *                         - $paging['segment_no'] => num of your URL segment
 * @return $data           Return pagination data to controller, for passing to the view.
 */    
    public function create_pagination($paging){
        $ci =& get_instance();
        $segment_amount = $paging['segment_no'];
        $config['base_url'] = base_url();
        for ($i=1; $i<=$segment_amount; $i++){
            $config['base_url'] .= $ci->uri->segment($i).'/'; //create base url according $segment_amount
        }
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $this->record_count($paging['sql']);//get amount of returning record from mySQL.
        $config['per_page'] = $paging['per_page']; //display how many record per page.
        $config['uri_segment'] = $segment_amount+1;//cos the url was changed to 1/2 ,1/3, 1/4
        $config['num_links'] = 4;        
        $config['first_link'] = '<img src="https://lh5.googleusercontent.com/-ZhbEtlrTREE/U-A5GxaK10I/AAAAAAAABX8/Iq9MV9aYgvs/w13-h11-no/pink_start.gif" alt="To first page" />';
        $config['prev_link']  = '<img src="https://lh3.googleusercontent.com/-gC50RSiYb3o/U-A5GLTbzAI/AAAAAAAABX0/W09zQ-8H024/w13-h11-no/pink_back10.gif" alt="To previous page" />';
        $config['next_link']  = '<img src="https://lh3.googleusercontent.com/-A16makYUz7I/U-A5GfZImqI/AAAAAAAABYE/E5hr3us1pT4/w13-h11-no/pink_next10.gif" alt="To next page" />';
        $config['last_link']  = '<img src="https://lh4.googleusercontent.com/-l_c1t1lApKk/U-A5Gf2n06I/AAAAAAAABX4/3p4-qY0cTAs/w13-h11-no/pink_end.gif" alt="To last page" />';        
        
        $start = ($ci->uri->segment($segment_amount+1)) ? $ci->uri->segment($segment_amount+1) : 0; //Get the begining display record number from the url. 
        //Data pass to model md_pagination.
        $model["per_page"] = $config["per_page"];
        $model["start"] = $start;
        $model["sql"] = $paging['sql'];
        
        $data["results"] = $this->load_db_data($model);
        $data["paging"] = $ci->pagination->initialize($config);
        $data["total_num"] = $config['total_rows'];
        return $data;
    }//EOF function create_pagination($paging)
    
/**
 * public function record_count($sql)
 * --------------------------------------
 * This function is for count the total rows number which would be return of your sql.
 *
 * @param  $sql         your sql from controller
 * @return $count       Return pagination data to controller, for passing to the view.
 */
    public function record_count($sql) {
        $ci =& get_instance();
        $result = $ci->db->query($sql);
        $count = $result->num_rows();
        return $count;
    }//EOF record_count($sql)
    
/**
 * public function load_db_data($model)
 * --------------------------------------
 * This function is for adding the LIMIT to your sql statment.
 *
 * @param  $model         This is an array, concluding these value:
 *                        - $model["per_page"] => Show how many record within a page.
 *                        - $model["start"]    => The starting index for the items you are paginating.
 *                        - $model["sql"]      => SQL statment to be process, It's your sql from controller.
 * @return $data          Return pagination data to controller, for passing to the view.
 */       
    public function load_db_data($model) {
        $ci =& get_instance();
        //Add filter to sql, otherswise would display all records:
        if ($model['start']=="" || $model['start']<=0 || $model['start'] == null){ $start = 0; }
        else {$start = $model['start'] * $model['per_page'] - $model['per_page'] ;}
        $sql_final = $model['sql'].' LIMIT '.$start.' , '.$model['per_page'].';'; 
        $query = $ci->db->query($sql_final);

        //Load result from database for return
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }//EOF load_db_data($model)
    
}
?>
