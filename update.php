<?php
     //echo $_GET['id'];
	 include("db.php");
	 $query=mysqli_query($conn,"select * from details where id='".$_GET['id']."'"); 
	 $row=mysqli_fetch_row($query);
?>


<form action='update1.php' method='get'>
<table>
<tr><th>Name</th><th>Age</th><th>Mobile</th></tr>
<tr>
		 <td><input type='hidden' name='id' value='<?php echo $row[0]?>' > </td>
		 <td><input name='name' value='<?php echo $row[1]?>' > </td>
		 <td><input name='age' value='<?php echo $row[2]?>' > </td>
		 <td><input name='mobile' value='<?php echo $row[3]?>' > </td></tr>
</table>
         <input type='submit' name='submit' value='submit'>
</form>




