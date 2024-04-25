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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>	
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>USER_ID</th>
                                    <th>PAT_ID</th>
				                    <th>Patient Name</th>
				                    <th>Patient Street</th>
				                    <th>Patient City</th>
				                    <th>Diagnosis</th>
				                    <th>Appointment Date</
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								
								    define("HOSTNAME", "localhost");
                                    define("USERNAME", "root");
                                    define("PASSWORD", "");
                                    define("DATABASE", "hospital");

                                    $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
                                  

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM 'patient' WHERE CONCAT(USER_ID,PAT_ID,Pname,P_street,P_city,Diagnosis,Appointment) LIKE '%$filtervalues%'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                     <td><?= $items['USER_ID']; ?></td>
								                     <td><?= $items['PAT_ID']; ?></td>
							                         <td><?= $items['PNAME']; ?></td>
							                         <td><?= $items['P_street']; ?></td>
							                         <td><?= $items['P_city']; ?></td>
							                         <td><?= $items['Diagnosis']; ?></td>
                                                     <td><?= $items['Appointment'] ?></d>
													 <td><a href="update_page1.php?id=<?php echo $items['USER_ID']; ?>" class = "btn btn-success">Update</a></td>
											<td><a href="delete_page.php?id=<?php echo $items['USER_ID']; ?>" class = "btn btn-danger">Delete</a></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>