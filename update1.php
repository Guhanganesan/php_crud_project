<?php
     
		include("db.php");
		$q="update details set name='".$_GET['name']."',age='".$_GET['age']."',mobile='".$_GET['mobile']."' where id='".$_GET['id']."'";
		$sql=mysqli_query($conn,$q);
		if($sql)
		{
		   header("location:Index.php");
			
		}

?>