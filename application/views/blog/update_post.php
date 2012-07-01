<div class="row">
	<div class="span8 offset1">
	<div class='page-header'>
		<div class='btn-group pull-right'>
			<a href="<?=site_url('/blog/manage_posts/');?>" class='btn'> &larr; Back to Posts</a>
		</div>
		<h2>Publish Post</h2></div>

	<form action='<?=site_url("blog/save_post/{$post->id}");?>' method='post'>
		<div class='page-header'>
			<input type="text" name="title" value="<?=$post->title;?>" class="input-xlarge span8" id="input01" placeholder='Title'>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='intro' id="textarea" rows="5" placeholder='Intro/Excerpt'>
					<?=($post->intro) ? $post->intro : ''; ?>
				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='body' id="textarea1" rows="12" placeholder='Body/Content'>
					<?=($post->body) ? $post->body : ''; ?>
				</textarea>
			</div>
		</div>

		<div class="control-group">
			<div class="controls">
				<?php echo form_dropdown('category_id', $categories, '1'); ?>
			</div>
		</div>

		<div class="control-group">
			<div class="controls">
				<select name='status'><option value='0'>draft</option><option value='1'>live</option></select>
				<?php echo $post->status; ?>
			</div>
		</div>
		<div class='controls'>
			<input type='submit' value='update post' class='btn btn-success'>
		</div>
	</form>
	</div>
	<div class="span3">	
	<div class='page-header'><h3>Upload cover photo</h3></div>
	<?php if ($post->image): ?>
		<ul class="thumbnails">
			<li class="span2">
				<div class="thumbnail">
	      			<a href='<?=site_url("blog/delete_photo/{$post->id}");?>' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
	      			<img src='<?=site_url("media/blog_photos/{$post->image}");?>' alt="" rel="popover" data-content="Click to Delete photo" data-original-title="Info" data-placement="bottom">
	      			</a>
	    		</div>
			</li>
		</ul><!-- / -->
	<?php endif ?>
	<!-- Upload form here -->
		<form class="form-inline" action="<?=site_url('blog/upload_photo/'.$post->id);?>" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="photo">
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-primary">Upload Photo</button>
				</div>
			</fieldset>
		</form>
</div>
</div>