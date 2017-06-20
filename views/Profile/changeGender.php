<div class="container">
	
	<div class="card unique-color text-left">
		<div class="card-block">

			<p class="white-text mb-0">
				Change Gender
			</p>
	</div>

	<div class="card">
		<div class="card-block">
			<form method="post" action="">
			<input type="hidden" id="old" value="<?=$_SESSION['user_data']['gender']?>">
		        <div class="md-form">
		        <p><?=$_SESSION['user_data']['gender'] == 1? "Male" : "Female"?></p>
		        	<select class="mdb-select" name="gender">
		                <option value="" disabled selected>Choose your option</option>
		                <option value="1">Male</option>
		                <option value="2">Female</option>
		            </select>
		        </div>

		        <div class="text-xs-center">
		        	<button class="btn btn-primary" type="submit" name="submit" value="1">Change Gender</button>
		        </div>
			</form>
		</div>
	</div>

</div>

<script type="text/javascript">
</script>