<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<style>
	a {
		color: white;
	}
</style>
<div class="row" style="margin: 50px auto;">
	<div class="col-md-4 offset-md-4">
		<h2 class="text-center" style="color: white"><?= $title; ?></h2>
		<div class="form-group">
			<label style="color: white">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="role" value="user" hidden>
		</div>
		<div class="form-group">
			<label style="color: white">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label style="color: white">Username</label>
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label style="color: white">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<label style="color: white">Confirm Password</label>
			<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
		</div>
		<button type="submit" class="btn btn-primary btn-block">Submit</button>
		<a href="<?php echo base_url(); ?>users/login">
			<center><u>Already have an account? Sign In </center></u>
		</a>
	</div>
</div>
<?php echo form_close(); ?>
