<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter pagination library
 *
 * A Library helper create Codeigniter pagination.
 *
 * @package         CodeIgniter
 * @author          Soyo Solution
 * @created         30th July,2014
 * @link            http://www.soyosolution.com/
*/

class sample extends CI_Controller {
    
    public function index(){
        $this->load->library('soyo_pagination');
        //You can place the SQL to model and load it. In this sample, i place sql here for easy to read.
        $sql = "SELECT * FROM news ";
        $paging_config['sql']         = $sql;
        $paging_config['per_page']    = 4;
        $paging_config['segment_no']  = 3;
        $data['results']       = $this->soyo_pagination->create_pagination($paging_config);
        $this->load->view("paging_sample",$data);
    }
    
}

/* End of file sample.php */
/* Location: ./application/controllers/sample.php */
