<div class="container">
	
	<div class="card unique-color text-left">
		<div class="card-block">

			<p class="white-text mb-0">
				Change email
			</p>
	</div>

	<div class="card">
		<div class="card-block">
			<form method="post" action="">
			<input type="hidden" id="old" value="<?=$_SESSION['user_data']['email']?>">
		        <div class="md-form">
		        	<input type="text" name="email" id="email" class="form-control">
		        	<label for="re-new">Your email</label>
		        </div>

		        <div class="text-xs-center">
		        	<button class="btn btn-primary" type="submit" name="submit" value="1">Change email</button>
		        </div>
			</form>
		</div>
	</div>

</div>

<script type="text/javascript">
	var body = document.getElementById("old").value;
	document.getElementById("email").value = body;
</script>