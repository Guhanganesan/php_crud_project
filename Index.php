<?php
     include("db.php");
	 $query=mysqli_query($conn,"select * from details");
	 echo "<table>";
	 echo "<tr><th>Id</th><th>Name</th><th>Age</th><th> Mobile</tr>";
	 while($row=mysqli_fetch_object($query))
	 {
	 echo "<tr>";
	 echo"<td>".$row->id."</td>
	 <td>".$row->name."</td>
	 <td>".$row->age."</td>
	 <td>".$row->mobile."</td>".
	 "<td><a href='http://localhost/CRUD/update.php?id=$row->id'> update </a></td>".
	 "<td><a href='http://localhost/CRUD/delete.php?id=$row->id'> delete </a></td>";
	 echo "</tr>";
	 }

//http://localhost/CRUD/update.php?id=1
?>