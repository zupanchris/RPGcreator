<ul role="navigation">
				  			 
				  <li class="pagination-next">
				  	<a href="?pageNumber=<?php echo $pageNumber - 1; ?>&search=<?php echo isset($_GET["search"]) ? $_GET["search"] : "" ?>">Previous</a>
				  	   <?php echo $pageNumber ?> / <?php echo $totalPage; ?>
				  	    <a href="?pageNumber=<?php echo $pageNumber + 1; ?>&search=<?php echo isset($_GET["search"]) ? $_GET["search"] : "" ?>">Next</a>
				  </li>
</ul>