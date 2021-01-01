<div class="container">
	<h2 class=><?php echo $post['title']; ?></h2>
	<small class="post-date">Date: <?php echo $post['date'] ?></small>
	<div class="post-date">
		<?php echo $post['description']; ?>
	</div>
	<hr>
	<?php echo form_open('/posts/edit/' . $post['slug']); ?>
	<input type="submit" value="Edit" class="btn btn-default bg-white">

	<a class="btn btn-danger" href="<?php echo site_url('/posts/delete/' . $post['id']); ?>">Delete</a>
	</form>
</div>
