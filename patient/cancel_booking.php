<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">My Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
							    <th>Appoinment Id</th>
							    <th>category</th>
								<th>My Doctor</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>";
							while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['booking_id']."</td>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
						?>
						                                                       
				               <td><a href="cancel_booking.php?dates=<?php echo $row['dates'] ?>">Cancel</a></td>;		

								<?php
								echo "</tr>";
						}
						echo "</table>";
						       
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>

					<!-- Cancel Booking -->


			<?php
							include('config.php');
							if(isset($_POST['submit'])){
							
							// sql to delete a record
							$sql = "DELETE * FROM booking WHERE";

							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						}
					?> 



	<!-- Cancel Booking End-->
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
