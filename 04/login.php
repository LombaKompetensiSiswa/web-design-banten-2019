

<section class="log">
	<div class="container">
		<form action="<?php echo BASE."function/proses.php?action=login"; ?>" method="POST">
			<div class="element-form">
				<label>Email</label>
				<input type="text" placeholder="Email@gmail.com" name="email">
			</div>
			<div class="element-form">
				<label>Password</label>
				<input type="password" placeholder="*******" name="password">
			</div>
			<div class="element-form">
				<input type="submit" value="Login" class="btn-act">
			</div>
		</form>
	</div>
</section>