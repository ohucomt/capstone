<div class="container">
	
	<div class="card unique-color text-left">
		<div class="card-block">

			<p class="white-text mb-0">
				Change Date of Birth
			</p>
	</div>

	<div class="card">
		<div class="card-block">
			<form method="post" action="">
			<input type="hidden" id="old" value="<?=$_SESSION['user_data']['dob']?>">
		        <div class="md-form">
		        <p><?=$_SESSION['user_data']['dob']?></p>
		        	<input type="Date" name="dob" id="dob" class="form-control" placeholder="mm/dd/yyyy">

		        </div>

		        <div class="text-xs-center">
		        	<button class="btn btn-primary" type="submit" name="submit" value="1">Change DoB</button>
		        </div>
			</form>
		</div>
	</div>

</div>

<script type="text/javascript">
</script>