<?php include_once('header.php'); ?>
<div class="row">
	<div class="col-1">
		<?php echo anchor($uri = 'welcome', $title = 'back', $attributes = ['class'=>'badge badge-dark m-2']); ?>
	</div>
	<div class="col-10">
		<h3 class="text-center text-muted">Add Post</h3>
	</div>
	<div class="col-1"></div>
</div>
	<div class="container ">
		<br>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card border-success mb-3 p-3">

					<?php echo form_open('welcome/addPost');?>

					  <div class="form-group">
					    <label>Title</label>
					    <?php echo form_input(['name'=>'title','placeholder'=>'enter title', 'class'=>'form-control'])?>
					    <?php echo form_error('title', '<small class="text-danger">', '</small>')?>
					  </div>
						
					  <div class="form-group">
					    <label>Description</label>
					    <?php echo form_textarea(['name'=>'description','placeholder'=>'enter description','rows'=>'3', 'class'=>'form-control'])?>
					    <?php echo form_error('description', '<small class="text-danger">', '</small>')?>
					  </div>
					  
					  <br>
					  <div class="row justify-content-center">
					  	<div class="col-6">
							<?php echo form_submit(['name'=>'submit','value'=>'Create new post','class'=>'btn btn-outline-success btn-block'])?>  		
					  	</div>
					  </div>
					



					<?php echo form_close();?>

				</div>
			</div>
		</div>
	</div>
<?php include_once('footer.php'); ?>
