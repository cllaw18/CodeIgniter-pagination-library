<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter pagination library v2
 *
 * A Library helper create Codeigniter pagination.
 *
 * @package         CodeIgniter
 * @author          Soyo Solution
 * @created         30th July,2014
 * @last_update     04th Dec,2014
 * @link            http://www.soyosolution.com/
 * @licensed        Licensed MIT
 */
 
class pagination extends CI_Controller {
    public function __construct() {
        parent:: __construct();     
    }
 
    public function index(){
        $this->load->library('lib_pagination');                         //Load the "lib_pagination" library
        $pg_config['sql']      = "SELECT * from wp_posts";              //your SQL, don't add ";" in your SQL query
        $pg_config['per_page'] = 5;                                     //Display items per page
        $data = $this->lib_pagination->create_pagination($pg_config);   //Load function in "lib_pagination" libraryfor create pagination. 
        $this->load->view("paging_sample", $data);                      //Pass result to view
    }
    
}
?>
