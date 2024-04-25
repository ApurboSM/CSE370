<?php include('connect1.php');?>


<?php

  if(isset($_GET['id'])){
	  $id = $_GET['id']
	  
	  
  $query = "delete from 'patient' where 'id' = '$id'";
  $result = mysqli_query($connection, $query);
   
  if(!$result){
	  die("Query Failed".mysqli_error());
	   
   }
   
  else{
	  header('location:update.html?delete_msg=Deleted.')
	   
   }
   
 }
  
   ?>
   
   