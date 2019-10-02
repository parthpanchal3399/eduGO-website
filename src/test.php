<?php
	$rows = $result->num_rows;    // Find total rows returned by database
    if($rows > 0)
    {
		$cols = 3;    // Define number of columns
		$counter = 1;     // Counter used to identify if we need to start or end a row
		$nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
		
		$container_class = 'container-fluid';  // Parent container class name
		$row_class = 'row';    // Row class name
		$col_class = 'col-sm-4'; // Column class name

        echo '<div class="'.$container_class.'">';    // Container open
        while ($item = $result->fetch_array())
        {
            if(($counter % $cols) == 1)
            {    // Check if it's new row
				echo '<div class="'.$row_class.'">';	// Start a new row
			}
                   	$img = "http://yourdomain.com/assets/".$item['image_name'];
					echo '<div class="'.$col_class.'"><img src="'.$img.'" alt="'.$item['name'].'" /><h5>'.$item['name'].'</h5></div>';     // Column with content
            if(($counter % $cols) == 0)
            { // If it's last column in each row then counter remainder will be zero
				echo '</div>';	 //  Close the row
			}
			$counter++;    // Increase the counter
		}
		$result->free();
        if($nbsp > 0)
        { // Adjustment to add unused column in last row if they exist
            for ($i = 0; $i < $nbsp; $i++)
            { 
				echo '<div class="'.$col_class.'">&nbsp;</div>';		
			}
			echo '</div>';  // Close the row
		}
        echo '</div>';  // Close the container
	}
?>