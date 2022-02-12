<?php
	require 'conn.php';
	$query = mysqli_query($conn, 'SELECT * FROM `file`');
	$i = 1;
	while($fetch = mysqli_fetch_array($query)){
	?>
	 <a  href="#<?php echo $i ?>" class="info_link" onclick="doc('<?php echo $fetch['location'].'~'.$i;?>')">Document #<?php echo $i ?></a>
	<?php
	$i++;
	}
?>
 