<div class="row">
	<div class="span6">
	<form action='<?=site_url("blog/save_post/{$post->id}");?>' method='post'>
		<div class='page-header'>
			<input type="text" name="title" value="<?=$post->title;?>" class="input-xlarge span6" id="input01" placeholder='Title'>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span6" name='intro' id="textarea" rows="5" placeholder='Intro/Excerpt'>
					<?=($post->intro) ? $post->intro : ''; ?>
				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span6" name='body' id="textarea1" rows="9" placeholder='Body/Content'>
					<?=($post->body) ? $post->body : ''; ?>
				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<div class="btn-group">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class='controls'>
			<input type='submit' value='update post' class='btn btn-success'>
		</div>
	</form>
	</div>
	<div class="span3">	
	<legend>Upload Photos</legend>
	<?php if ($post->image): ?>
		<ul class="thumbnails">
			<li class="span2">
				<div class="thumbnail">
	      			<a href='<?=site_url("blog/delete_photo/{$post->id}");?>' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
	      			<img src='<?=site_url("media/blog/{$post->image}");?>' alt="" rel="popover" data-content="Click to Delete photo" data-original-title="Hi" data-placement="bottom">
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
						<input type="text" name="caption" class="input-xlarge" placeholder="Caption" id="input01">
					</div>
				</div>
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
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#textarea').wysihtml5();
		$('#textarea1').wysihtml5();
	});
	
</script>