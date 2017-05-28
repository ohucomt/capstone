<div class="container">
	
	<div class="card unique-color text-left">
		<div class="card-block">

			<p class="white-text mb-0">
				Change name
			</p>
	</div>

	<div class="card">
		<div class="card-block">
			<form method="post" action="">
			<input type="hidden" id="oldf" value="<?=$_SESSION['user_data']['first_name']?>">
		        <div class="md-form">
		        	<input type="text" name="first_name" id="namef" class="form-control">
		        	<label for="namef">Your name</label>
		        </div>

		        <input type="hidden" id="oldl" value="<?=$_SESSION['user_data']['last_name']?>">
		        <div class="md-form">
		        	<input type="text" name="last_name" id="namel" class="form-control">
		        	<label for="namel">Your name</label>
		        </div>

		        <div class="text-xs-center">
		        	<button class="btn btn-primary" type="submit" name="submit" value="1">Change name</button>
		        </div>
			</form>
		</div>
	</div>

</div>

<script type="text/javascript">
	var body = document.getElementById("oldf").value;
	document.getElementById("namef").value = body;
	body = document.getElementById("oldl").value;
	document.getElementById("namel").value = body;
</script>