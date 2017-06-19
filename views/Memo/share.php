<div class="container">
	<div class="card">
		<div class="card-block">
			<div class="card-title">Now you can send link below to one you want to share!</div>

			<div class="card-text">
				<?php
					$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/mymemo/memo/view/".$viewmodel;

					echo $link;
				?>
			</div>
		</div>
	</div>
</div>