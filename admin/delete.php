<?php include('header.php'); ?>

<?php if (isset($_GET['delete'])) 
  {
    if ($con->query("delete from doctor where doctor_id = '$_GET[delete]'"))
    {
      header("location:delete.php");
    }
  } ?>
<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Delete doctor</h3>
		
		
	</div>
	
	
<form method="post" action="delete.php" class="delete">

	<div class="input-groupA">
		<label>doctor_id</label>
		<input type="text" name="delete" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>
	 <?php include('footer.php'); ?>



</form>





	
	
	<!--  containerFluid Ends -->


         <script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>



