<?php  
	error_reporting(E_ALL^E_WARNING);	
    require_once('conn.php');
?>
<table class="table" style="margin:5px;"> 
    <?php
		$stmt = "SELECT * FROM contact";
		$result = mysqli_query($conn, $stmt);
		                
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck > 0){
		while($row = mysqli_fetch_assoc($result)){
		    echo "
		        <tr>
		        	<td>".$row['id']."</td>
		            <td>".$row['name']."</td>
		            <td>".$row['email']."</td>
		            <td>".$row['subject']."</td>
		            <td>".$row['message']."</td>
				</tr>";
				}
		}
        ?>
</table>