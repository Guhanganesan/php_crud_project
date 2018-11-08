<?php
		include("db.php");
		$q="delete from details where id='".$_GET['id']."'";
		$sql=mysqli_query($conn,$q);
		if($sql)
		{
		   header("location:Index.php");
		}
?>