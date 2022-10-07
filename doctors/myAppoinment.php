<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Today's Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM booking WHERE userid='".$_SESSION["userid"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
							    <th>Doctor Name</th>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
							</tr>";?>
							<?php
						        while($row=mysqli_fetch_array($result)){?>
								<tr>
								<td><?php echo $row['dname'];?></td>
								<td><?php echo $row['pname'];?></td>
								<td><?php echo $row['pcontact'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['address'];?></td>
								<td><?php echo $row['dates'];?></td>
								<td><?php  echo $row['tyme'];?></td>
								</tr><?php
						}
						
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}?>
                   </table>
				
			</div>
		
	
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
