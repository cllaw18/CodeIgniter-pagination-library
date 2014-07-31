CodeIgniter-pagination-library
==============================


It's a pagination library for CodeIgniter 2. Most of the code was moved from controller to the library, easy to config and create the pagination.


An overview of the files
------------------------
- application
  - controllers
    - sample.php
  - libraries
    - soyo_pagination.php
  - views
    - paging_sample.php
- Sql
  - news.sql
- .htaccess

How to use the library
----------------------
<h3>Controller Part</h3>
Copy codes from example controller ("/application/controllers/sample.php"), what you have to config is colored text showen below.
    
    public function index(){
        $this->load->library('soyo_pagination'); 
        $paging_config['sql']         = "SELECT * FROM news ";
        $paging_config['per_page']    = 4;
        $paging_config['segment_no']  = 3;
        $data['results']       = $this->soyo_pagination->create_pagination($paging_config);
        $this->load->view("paging_sample",$data);
    }

<b>$paging_config['sql']</b>
Value of $paging_config['sql'] is your sql statement but rememeber the statements must without ; since the library would add something after you sql.

<b>$paging_config['per_page']</b>
This value is for showing how many record per page, must be an integer. If the value is 4, means display 4 items per page.

<b>$paging_config['segment_no']</b>
This is the position of url segment you will add. The pagination would add some segement like 1/2, 2/3 after your url. 
For e.g. if the page is <a href="#">http://www.soyosolution.com/en/works
en is url segment 1 and works would be the  url segment 2</p>

We want add the pagination segement at the position of segment 3. So we use "3" to be value of $paging_config['segment_no']


------------------    
<h3>Views part</h3>

    <?php
        if (!empty($results['results'])){
            foreach($results['results'] as $row) { 
                echo ".$row->id." ) ".$row->title."</div>";
        
            }
        }
    ?>
    <p>Pagination: <?php echo $this->pagination->create_links(); ?></p>       
    <p>Total Number: <?php echo $results['total_num']; ?></p>    

    
To display pagination bar at your view, use this code <?php echo $this->pagination->create_links(); ?> and place to somewhere you wanted to display.</p>
And &lt;?php echo $results['total_num']; ?&lt; is for display total records of your records.</p>
Code in green is the php statment to display your records from database.</p>

-----------------------    
<h3>.htaccess part</h3>
Create a .htacess to remove the index.php? of your url. You can just copy all code in .htaccess placing in the root of this project.

----------------------    
<h3>Run your page</h3>    
If you want call your page, you need add 1/ or 1/1 after your page url. For example:
    <a href="http://soyosolution.com/en/works/1/" target="_blank">http://soyosolution.com/en/works/1/</a>
    <a href="#">http://localhost/ci/sample/index/1/1</a>


How to use the sample
---------------------
- 1 Copy the news.sql in sql folder, and import to your database. (It's for create a table named news)
- 2 Copy .htaccess and all file to your codeigniter.
- 3 Run your page : http://yourdomain/yourciroot/sample/index/1/1/<br />(For e.g. : <a href="#">http://localhost/ci/sample/index/1/1</a>)
    

Reference:
---------

Codeigniter Offical Site
http://ellislab.com/codeigniter/user-guide/libraries/pagination.html

Pagination Sample Site:
http://soyosolution.com/en/works/1/

Library Site:
http://tool.soyosolution.com/codeIgniter-pagination-library/
