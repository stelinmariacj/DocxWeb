<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('uptomenu.php'); ?>
<?php include('header.php'); ?>






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
							    <th>Booking Id</th>
								<th>category</th>
								<th>My Doctor</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>"?>
							<?php
						        while($row=mysqli_fetch_array($result)){
									 ?>
								<tr>
								<td><?php echo $row['booking_id'];?></td>
								<td><?php echo $row['expertise'];?></td>
								<td><?php echo $row['dname'];?></td>
								<td><?php echo $row['dates'];?></td>
								<td><?php echo $row['tyme'];?></td>
						
								<td><button type='submit' name='submit' style='color:#000;'><a href="view_booking.php?booking_id=<?php echo $row['booking_id'] ?>">Cancel</a></td>
						        </tr>
						<?php
						}
					}
                           else{
                            echo "No records Found !";
                          } 

                          ?>
						</table>
					
					<!-- Cancel Booking -->


			<?php include('config.php');?>
			<?php if (isset($_GET['booking_id'])) 
  {
    if ($conn->query("delete from booking where booking_id= '$_GET[booking_id]'"))
    {
      header("location:view_booking.php");
    }
  } ?>
					


	<!-- Cancel Booking End-->

					
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>