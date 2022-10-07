
<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Delete Doctor</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
			 
			 		<label>
					    <input type="text" name="doctor_Id" value="" placeholder="doctor_Id" pattern="[a-zA-Z]{1-100}" required>
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Delete</button> <br>
				</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
			 <?php
						include('../config.php');
						if(isset($_POST['submit'])){
                             $sql = "DELETE FROM Doctor WHERE doctor_id="" ";

                              if ($conn->query($sql) === TRUE) {
                               echo "Record deleted successfully";
                                } else {
                                  echo "Error deleting record: " . $conn->error;
                                  }
               ?>
       

 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>
</body>
</html>