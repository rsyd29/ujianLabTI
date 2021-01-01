<div class="row">
	<?php
	foreach ($posts as $post) : ?>
		<div class="card col-md-4 offset-md-4" style="width: 40rem; margin-top: 10px;">
			<div class="card-body">
				<h6 <?php
					if ($post['priority'] == "High Priority") {
						echo "class='text-center font-weight-bold bg-danger' style='color: white'";
					} elseif ($post['priority'] == "Medium Priority") {
						echo "class='text-center font-weight-bold bg-warning' style='color: white'";
					} elseif ($post['priority'] == "Low Priority") {
						echo "class='text-center font-weight-bold bg-success' style='color: white'";
					}
					echo "class='text-center font-weight-bold bg-dark' style='color: white'";
					?>>
					<?php echo $post['priority'] ?>
				</h6>
				<h5 class="card-title"><?php echo $post['title'] ?></h5>
				<h6 class="card-subtitle mb-2 text-muted"><?php echo $post['date']; ?></h6>
				<p class="card-text"><?php echo $post['description']; ?></p>
				<a href="<?php echo site_url('/posts/edit/' . $post['slug']); ?>" class="card-link" style="color:orange">Edit</a>
				<a href="<?php echo site_url('/posts/delete/' . $post['id']); ?>" class="card-link" style="color:red">Delete</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
