<?php include_once('header.php'); ?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8 text-dark">
			<blockquote class="blockquote text-center">
			  <h3 class="mb-0">All Posts</h3>
			</blockquote>
			<?php 
			if($msg = $this->session->flashdata('msg'))
				echo '<script type="text/javascript">alert("'.$msg.'")</script>';
			?>
		</div>
		<div class="col-2 pr">
			<?php echo anchor($uri = 'welcome/create', $title = 'Add Post', $attributes = ['class'=>'btn btn-outline-success btn-block']); ?>	
		</div>
	</div>
	<br>
	<table class="table table-striped">
	  <thead>
	    <tr class="bg-primary text-light">
	      <th scope="col">#</th>
	      <th scope="col">Title</th>
	      <th scope="col">Description</th>
	      <th scope="col">Creation date</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php if(count($posts)): ?>
		    <?php foreach($posts as $post):?>
				<tr>
			      <th scope="row"><?php echo $post->id; ?></th>
			      <th><?php echo $post->title; ?></th>
			      <td><?php echo $post->description; ?></td>
			      <td><?php echo $post->date_created; ?></td>
			      <td>
			      	<?php echo anchor("welcome/view/{$post->id}", 'view', ['class'=>'badge badge-success m-1']); ?>
			      	<?php echo anchor("welcome/update/{$post->id}", 'update', ['class'=>'badge badge-warning m-1']); ?>
			      	<?php echo anchor("welcome/delete/{$post->id}", 'delete', ['class'=>'badge badge-danger m-1']); ?>
			      </td>
			    </tr>
			<?php endforeach;?>
	    <?php else: ?>
	    	 <tr>	
			      <th scope="row">No posts to display</th>
			 </tr>	
		<?php endif; ?>
	  </tbody>
</table>
</div>


<?php include_once('footer.php'); ?>



<!-- <i class="material-icons">
delete
</i>

<i class="material-icons">
remove_red_eye
</i>

<i class="material-icons">
border_color
</i> -->