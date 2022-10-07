<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Add description</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
<?php  


	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);
	

	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>

<div class="input-group">
		<label>Patient ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>">

	</div>




	<div class="input-group">
		<label>Name</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>">

	</div>

	<div class="input-group">
		<label>Treatment</label>
		<input type="text" name="Treatment">
	</div>

	<div class="input-group-add">
		<label>Note</label>
		<input style="" type="text" name="Note">
	</div>


	 <div class="input-group">
			<button type="submit" name="AddD" class="btn">Add</button>
			</div>


	<?php  

	}
	 ?>

			 </div>
	 
		
	   
	  
	 

	 
	
	  
<?php 
}


	    ?>




	    <?php  


if (isset($_POST['AddD'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$treatment 			= $mysqli -> real_escape_string($_POST['Treatment']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

	
	







if (empty($treatment)) {
	array_push($errors,"Treatment is required");
	# code...
}

if (empty($note)) {
	array_push($errors,"Your note is required");
	# code...
}








if(count($errors)==0){



	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorprofile') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Your Description Is Added",$mysqli->affected_rows);?></h2>
			
			
		<?php 



	}
}
}














?>









</form>





</body>

</html>