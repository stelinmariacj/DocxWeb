<?php include('header.php'); ?>

	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Doctor Registration</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
					    Name:<input type="text" name="name" value="" placeholder="Full name" autocomplete="on">
					</label><br><br>
					<label>
						Address:<input type="text" name="address" value="" placeholder="address" >
					</label><br><br>
					<label>
						Contact:<input type="text" name="contact" value="" placeholder="contact" >
					</label><br><br>

					
					<label>
					    Expertise:
						 <select name="expertise" >
										<option>-Expert in-</option>
										<option>Cardiologist</option>
										<option>Audiologist</option>
										<option>Dentist</option>
										<option>ENT Specialist</option>
										<option>Gynacologist</option>
										<option>Orthopaedic Surgeon</option>
										<option>paediatrician</option>
										<option>psychiatrists</option>
										<option>Radiologist</option>
										</select>
					</label><br><br>
					<label>
					    User Id:<input type="text" name="userid" value="" placeholder="userid" >
					</label><br><br>
					<label>
					   Fee:<input type="text" name="fee" value="" placeholder="Fee" >
					</label><br><br>
					
					
					<label>
					   Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
					   Password: <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add Doctor</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	



	
	

	 <!-- validation and insertion -->


				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM doctor WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO doctor (name,address,contact,expertise,userid,fee,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["expertise"] . "','" . $_POST["userid"]. "','" . $_POST["fee"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('doctor_success_msg.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 



	<!-- validation and insertion End-->

      <?php include('../doctors/footer.php'); ?>



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


</body>
</html>