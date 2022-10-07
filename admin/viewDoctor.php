<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('../config.php');?>
<?php include('header.php'); ?>
<?php if (isset($_GET['email'])) 
  {
    if ($conn->query("delete from doctor where email= '$_GET[email]'"))
    {
      header("location:viewDoctor.php");
    }
  } ?>





	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>doc_id</th>
								<th>Name</th>
								
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>

								<th>Fee</th>
								<th>Action</th>
								
							</tr>";?>
						        <?php
								while($row=mysqli_fetch_array($result))
								{
									?>
								<tr>
							    <td><?php echo $row['doc_id'];?></td>
								<td><?php echo $row['name'];?></td>
								
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['contact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['expertise'];?></td>
								
								<td><?php echo $row['fee'];?></td>
								<td>
					              <button type='submit' name='submit' style='color:#000;'><a href="viewDoctor.php?email=<?php echo $row["email"]; ?>">Delete</a></button> </td>
								
								</tr><?php
						}
					}
                           else{
                            echo "No records Found !";
                          } 

                          ?>
						</table>";
					
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->


