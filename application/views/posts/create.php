<br>
<h2 style="color: white">
	<center><?= $title ?></center>
</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
<div class="container">
	<div class="form-group">
		<label for="title" style="color: white">Title</label>
		<input type="text" name="title" class="form-control" placeholder="Enter title">
	</div>
	<div class="form-group">
		<label for="date" style="color: white">Until</label>
		<input type="date" name="date" class="form-control" placeholder="Date">
	</div>
	<div class="form-group">
		<label for="description" style="color: white">Description</label>
		<textarea type="textarea" name="description" class="form-control" rows="5">

        </textarea>
	</div>
	<label for="" style="color: white">Type: </label>
	<select class="form-control" name="priority">
		<option>High Priority</option>
		<option>Medium Priority</option>
		<option>Low Priority</option>
		<option>No Priority</option>
	</select>
	<br>
	<button type="submit" class="btn btn-primary col-md-2 offset-md-5">Submit</button>
	</form>
</div>
