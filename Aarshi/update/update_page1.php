<!doctype html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Your Details</title>
</head>

<body>

     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Update Your Details Below </h4>
                    </div>
                </div>
			</div>
		</div>
    </div>		


 
	<?php include('connect1.php'); ?>
	
	   <?php
	   
	   if(isset($_GET['id'])){
		   $id = $_GET['id'];
	      
		   $query = "select * from 'patient' where 'id' = '$id'";
		   $result = mysqli_query($connection, $query);
		   
		   if(!$result){
			   die("query failed".mysqli_error());
			}
			else{
				$row = mysqli_fetch_assoc($result);
				
				
					
		}
}		
	   
	     ?>
		   
		   <?php
		       if(isset($_POST['update_patient'])){
				   
			    if(isset($_GET['id_new'])){
					$idnew = $_GET['id_new'];
				}
			   
				   
				   
			       
				   
			    $user_id = $_POST['id'];
			    $pat_id = $_POST['pat_id'];
			    $pname = $_POST['pname'];
			    $p_street = $_POST['p_street'];
			    $p_city = $_POST['p_city'];
			    $diagnosis = $_POST['diagnosis'];
			    $appointment = $_POST['appointment'];
			   
			    $query = "update 'patient' set 'id' = '$user_id', 'pat_id' = '$pat_id', 'pname' = '$pname', 'p_street' = '$p_street', 'p-city' = '$p_city', 'diagnosis' = '$diagnosis', 'appointment' = '$appointment' where 'id' = '$id'";
			    $result = mysqli_query($connection, $query);
			   
			    if(!$result){
				    die("query failed".mysqli_error());
			    }
                else{
				    header('location: http://localhost/hos_update/update2.html?search=yfigf');
			    }
			   }			   
				   
			?>   
	  
	    <form action="update_page1.php?id_new=<?php echo $id; ?>" method="post">
		<div class="form-group">
		    <label for="ID">USER_ID</label>
			<input type= "int" name="USER_ID" class="form-control" value="<?php echo $row['id'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="PAT_ID">PAT_ID</label>
			<input type= "int" name="USER_ID" class="form-control" value="<?php echo $row['pat_id'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="Pname">Patient Name</label>
			<input type= "text" name="USER_ID" class="form-control" value="<?php echo $row['pname'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="P_street">Patient Street</label>
			<input type= "text" name="USER_ID" class="form-control"  value="<?php echo $row['p_street'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="P_city">Patient City</label>
			<input type= "text" name="USER_ID" class="form-control"  value="<?php echo $row['p_city'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="Diagnosis">Diagnosis</label>
			<input type= "text" name="USER_ID" class="form-control" value="<?php echo $row['diagnosis'] ?>">
		</div>
		
		<div class="form-group">
		    <label for="Appointment">Appointment</label>
			<input type= "date" name="USER_ID" class="form-control" value="<?php echo $row['appointment'] ?>" >
			
		</div>
		<input type="submit" class="btn btn-success" name="update_patient" value="UPDATE">
		</form>
		
		
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>