<?php
	include 'config.php';
	
$con = mysqli_connect('localhost','root','','demo');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		
?>	
		<tr>
			<td><?=$row['email'];?></td>
			<td><?=$row['username'];?></td>
		
			<td><?=$row['profile_image'];?></td>
			
			<td><img src="<?php echo 'uploads/' . $row['profile_image']; ?>" width="90" height="90" alt="no image"></td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
 