<?php

session_start();

include '../../connection/connection.php';

$html=array();

$sql = "select * from product_info p
left join category c on c.category_id = p.Product_Main_Category";	

$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

while($row = mysqli_fetch_assoc($query)){
    
    
        $html[]= $row;
    }

echo json_encode($html)

	

		?>