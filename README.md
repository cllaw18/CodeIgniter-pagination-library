CodeIgniter-pagination-library
==============================

It's a pagination library for CodeIgniter 2. Most of the code was moved from controller to the library, easy to config and create the pagination.


An overview of the files
------------------------
- application
  - controllers
    - pagination.php
  - libraries
    - lib_pagination.php
  - views
    - paging_sample.php
- Sql
  - paging.sql
- .htaccess

How to use the library / samples
--------------------------------
<ol>
<li>Copy the paging.sql in sql folder, and import to your database. (It's for create a table named wp_posts)</li>
<li>Copy .htaccess and all file to your codeigniter. (optional)</li>
<li>Copy pagination.php sample code to yout controllers folder.</li>
<li>Copy lib_pagination.php sample code to yout libraries folder.</li>
<li>Copy paging_sample.php sample code to yout views folder.</li>
<li>Run your page : http://yourdomain/yourciroot/pagination/index<br />(For e.g. : <a href="#">http://localhost/ci/sample/pagination/index</a>)</li>
</ol>

<h3>Controller Part</h3>
Copy codes from example controller ("/application/controllers/pagination.php"), what you have to config is colored text showen below.
    
    public function index(){
        $this->load->library('lib_pagination');                         
        $pg_config['sql']      = "SELECT * from wp_posts";              
        $pg_config['per_page'] = 5;                                     
        $data = $this->lib_pagination->create_pagination($pg_config);   
        $this->load->view("paging_sample", $data);                      
    }

<b>$pg_config['sql']</b>
Value of $pg_config['sql'] is your sql statement but rememeber the statements must without ; since the library would add something after you sql.

<b>$pg_config['per_page']</b>
This value is for showing how many record per page, must be an integer. If the value is 5, means display 5 items per page.

------------------    
<h3>Views part</h3>

    <?php
        if (!empty($results['results'])){
            foreach($results['results'] as $data) { 
                echo ".$data->id." ) ".$data->post_date."</div>";
        
            }
        }
    ?>
    <p>Pagination: <?php echo $links; ?></p>

    
To display pagination bar at your view, use this code <?php echo $links; ?> and place to somewhere you wanted to display.</p>


-----------------------    
<h3>.htaccess part</h3>
This part is optional, for removing the index.php? of your url. You can just copy all code in .htaccess placing in the root of this project. For example:

From : http://soyosolution.com/index.php?/pagination/index/5
To   : http://soyosolution.com/pagination/index/5

----------------------    
<h3>Run your page</h3>  
Suupose you run the code in localhost and install CodeIgniter in a folder named "ci":
http://localhost/ci/sample/pagination/index
Or you can run demo on our website:
http://soyosolution.com/index.php?/pagination/index<br />
http://soyosolution.com/pagination/index

    
How to config pagination bar icons:
----------------------------------
The config of pagination bar 's appearance was paged in "/application/libraries/lib_pagination.php", arround line 28 - line 51, 
You can change appearance of pagination bar by uncomment and chnaging these value:
        
        //Uncomment to config to your own pagination style.
        /*
        $config['first_link'] = 'First';       //The text you would like shown in the "first" link on the left. If you do not want this link rendered, you can set its value to FALSE.
        $config['first_tag_open'] = '<span>';  //The opening tag for the "first" link.
        $config['first_tag_close'] = '</span>';//The closing tag for the "first" link.

        $config['last_link'] = 'Last';         //The text you would like shown in the "last" link on the right. If you do not want this link rendered, you can set its value to FALSE.
        $config['last_tag_open'] = '<span>';   //The opening tag for the "last" link.
        $config['last_tag_close'] = '</span>'; //The closing tag for the "last" link.
        
        $config['next_link'] = '&gt;';         //The text you would like shown in the "next" page link. If you do not want this link rendered, you can set its value to FALSE.
        $config['next_tag_open'] = '<span>';   //The opening tag for the "next" link.
        $config['next_tag_close'] = '</span>'; //The closing tag for the "next" link.
        
        $config['prev_link'] = '&lt;';         //The text you would like shown in the "previous" page link. If you do not want this link rendered, you can set its value to FALSE.
        $config['prev_tag_open'] = '<span>';   //The opening tag for the "previous" link.
        $config['prev_tag_close'] = '</span>'; //The closing tag for the "previous" link.
        
        $config['cur_tag_open'] = '<b>';       //$config['cur_tag_open'] = '<b>';
        $config['cur_tag_close'] = '</b>';     //$config['cur_tag_close'] = '</b>';
        
        $config['num_tag_open'] = '<span>';    //The opening tag for the "digit" link.
        $config['num_tag_close'] = '</span>';  //The closing tag for the "digit" link.
        */       
        
Values for View
--------------
<table>
    <tr>
        <td>$results</td>
        <td>An object storing the result.</td>
    </tr>
    <tr>
        <td>$pagination</td>
        <td>This value storing all the pagination code, place it to somewhere you want show the pagination bar.</td>
    </tr>
    <tr>
        <td>$result_amount</td>
        <td>It's a integer storing the result records of your sql.</td>
    </tr>
</table>
<pre><code>&lt;?php
	&lt;h1 style="text-align:center"&gt;CodeIgniter Pagination Library Demo&lt;/h1&gt;
	&lt;table width="400" border="1" align="center"&gt;
		&lt;tr&gt;
			&lt;td width="100" bgcolor="#CCCCCC"&gt;&lt;p&gt;ID&lt;/p&gt;&lt;/td&gt;
			&lt;td width="300" bgcolor="#CCCCCC"&gt;Post Date&lt;/td&gt;
            &lt;td width="300" bgcolor="#CCCCCC"&gt;Post Title&lt;/td&gt;
		&lt;/tr&gt;
		&lt;h1 style="text-align:center"&gt;&lt;/h1&gt;
&lt;div id="body"&gt;
 
		<i class="s">&lt;?php
		foreach($results as $data) {
		?&gt;</i>
		&lt;tr&gt;
            &lt;td&gt;&lt;?php echo $data-&gt;id; ?&gt;&lt;/td&gt;
			&lt;td&gt;&lt;?php echo $data-&gt;post_date; ?&gt;&lt;/td&gt;
			&lt;td&gt;&lt;?php echo $data-&gt;post_title; ?&gt;&lt;/td&gt;
		&lt;/tr&gt;
		<i class="s">&lt;?php
		}
		?&gt;</i>
	&lt;/table&gt;
	&lt;div style="text-align:center"&gt;<i class="s">&lt;?php echo $pagination; ?&gt;</i>&lt;/div&gt;
    &lt;div style="text-align:right"&gt;Total records: <i class="s">&lt;?php echo $result_amount; ?&gt;</i>&&lt;/div&gt;
&lt;/div&gt;
</code></pre>

        
Update
------
05/12/2014      Release CodeIgniter-pagination-library v2  
- Rewrite the library and sample referenced by a codeigniter basic tutorial at codesamplez.com
- auto count the segment number for configuration
- auto change pagination link if it's the first page
- inclucde the all pagination code into a value named $links
                
30/06/2014      Release CodeIgniter-pagination-library v1


Reference:
---------
Codeigniter Offical Site<br />
http://ellislab.com/codeigniter/user-guide/libraries/pagination.html<br />
http://codesamplez.com/development/codeigniter-basic-tutorial

Pagination Sample Site:<br />
http://soyosolution.com/en/works/1/<br />
http://soyosolution.com/pagination/index

Library Site:<br />
http://tool.soyosolution.com/codeIgniter-pagination-library/

