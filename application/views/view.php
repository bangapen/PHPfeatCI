<?php include_once('header.php'); ?>
<div class="row">
	<div class="col-1">
		<?php echo anchor($uri = 'welcome', $title = 'back', $attributes = ['class'=>'badge badge-dark m-2']); ?>
	</div>
	<div class="col-10">
		<h3 class="text-center text-muted">Post Details</h3>
	</div>
	<div class="col-1"></div>
</div>
<div class="container ">
		<br>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card text-white bg-primary mb-3">
				<div class="card-footer">
					<h4 class="card-title text-center"><?php echo $post->title?></h4>
				</div>
				  <div class="card-body">
				    <p class="card-text"><?php echo $post->description?></p>
				  </div>
				  <div class="card-footer float-right">
				  	<small>created on : <?php echo $post->date_created?> </small>
				  </div>
				</div>
			</div>
		</div>
	</div>
<?php include_once('footer.php'); ?>
