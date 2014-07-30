<h2>News List</h2>
<?php
     if (!empty($results['results'])){
        foreach($results['results'] as $row) { 
            echo "<div>".$row->id." ) ".$row->title."</div>";
        }
    }
?>
<p>Pagination: <?php echo $this->pagination->create_links(); ?></p>   
<p>Total Number: <?php echo $results['total_num']; ?></p>

<hr />
<p>Provided by <a href="http://www.soyosolution.com" target="_blank">Soyo Solution</a>, 
This content is released under the <a href="http://opensource.org/licenses/MIT" target="_blank"> MIT License</a>.</p>
