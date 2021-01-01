<?php echo form_open('users/login'); ?>

<style>
	a {
		color: white;
	}
</style>

<div class="row" style="margin: 50px auto;">
	<div class="col-md-4 offset-md-4">
		<br>
		<h1 class="text-center" style="color: white"><?php echo $title; ?></h1>
		<br>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			<br>
			<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Enter</button>
		<a href="<?php echo base_url(); ?>users/register">
			<center><u>Don't have an account?</center></u>
		</a>
	</div>
</div>
<?php echo form_close(); ?>
