<?php
include("connection.php");
?>

 <form action="search.php" method="POST">
     <input type="text" name="search">
     <input type="submit"  value="search"><a href="new.php">new</a>
</form>
<table>
 <tr>
     <td>ID</td>
     <td>NAME</td>
     <td>LAST</td>
</tr>
<?php
$sql="SELECT id, names, lastName FROM user order by id desc";
$query = mysqli_query($con,$sql);
while($mostrar=mysqli_fetch_array($query)){
    ?>
<tr>
     <td><?php echo $mostrar['id']?></td>
     <td><?php echo $mostrar['names']?></td>
     <td><?php echo $mostrar['lastName']?></td> 
     <td><a href="delete.php?id=<?php echo $mostrar['0']?>">delete</a></td>
     <td><a href="edit.php?name=<?php echo $mostrar['names']?> & 
     last=<?php echo $mostrar['lastName']?> & id=<?php echo $mostrar['id']?>">edit</a></td>
</tr>
<?php
}
?>
</table>

<?php if(isset($_SESSION['message'])){

 echo $_SESSION['message']; 
    
 }
 session_unset(); ?>
 


