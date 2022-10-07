
			<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Donar List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
<body>
	<form method="post" action="searchdonoradmin.php" class="searchdonor">
    
	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Blood Group<br>*Organ  </label>
		<input type="text" name="dID3" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchD" class="btnA" style="padding: 5px;margin-left: 90px;margin-top: 20px; padding-left: 15px; padding-right: 15px">Search</button>
	</div>

	







		</form>
	</form>


	
        
		<?php 

         if (isset($_POST['SearchD'])) {

         ?>	<table class="table2">
		<tr>
		<th>DonorID</th>
		<th>DonorName</th>
		<th>DonorAddress</th>
		<th>DonorContactNumber</th>
		<th>DonorEmail</th>
		<th>DonorBloodGroup</th>
		<th>DonorOrgan</th>



		</tr><?php  


		$dID3 =$mysqli -> real_escape_string($_POST['dID3']);

		$sql8="SELECT  * FROM  donation  WHERE donarblood=('$dID3') OR organ=('$dID3') ";
		$result8=$mysqli->query($sql8);
		if(mysqli_num_rows($result8)>=1){
			while ($row8=$result8->fetch_assoc()) {

				echo "<tr><td>".$row8["donarID"]."</td><td>".$row8["donarname"]."</td><td>".$row8["donaraddress"]."</td><td>".$row8["donarnumber"]."</td><td>".$row8['donaremail']."</td><td>".$row8['donarblood']."</td><td>".$row8['organ']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>

 </table>
				
	<?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	


</body>
</html>

