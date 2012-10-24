<div class="row">
	<div class="span8 offset1">
	<form action='{site_url("admin/blog/edit/{$post->id|default:''}")}' method='post'>
	<div class='page-header'>
		<div class='btn-group pull-right'>
			<a href="{site_url('admin/blog/')}" class='btn btn-small'><i class='icon-chevron-left'></i> Back to Posts</a>
			<input type='submit' value='update post' class='btn btn-small btn-warning'>
		</div>
		<h3>Publish Post</h3></div>

		<div class="control-group">
			<div class="controls">
				<select name="status">
					<option {($post->status|default:0)?'':'selected'} value='0'>draft</option>
					<option {($post->status|default:0)?'selected':''} value='1'>live</option>
				</select>
			</div>
		</div>

		<div class='page-header'>
			<input type="text" name="title" value='{$post->title|default:''}' class="input-xlarge span8" id="input01" placeholder='Title'>
		</div>

		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='intro' id="textarea" rows="5" placeholder='Intro/Excerpt'>
					{$post->intro|default:''}
				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='body' id="textarea1" rows="24" placeholder='Body/Content'>
					{$post->body|default:''}
				</textarea>
			</div>
		</div>

		<div class="control-group">
			<div class="controls">
				{form_dropdown('blog_category_id', $categories, '1')}
			</div>
		</div>

		<div class='controls'>
			<input type='submit' value='update post' class='btn btn-success'>
		</div>
	</form>
	</div>
	<div class="span3">
		{if ($post->image|default:'')}
		<div class='page-header'><h4>Blog Photo (200X230)</h4></div>
			<ul class="thumbnails">
				<li class="span2">
					<div class="thumbnail">
		      			<a href='{site_url("admin/blog/delete_photo/{$post->id}")}' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
		      			<img src='{site_url("media/blog_photos/{$post->image}")}' alt="" rel="popover" data-content="Click to Delete photo" data-original-title="Info" data-placement="right">
		      			</a>
		    		</div>
				</li>
			</ul><!-- / -->
		{else}
		<div class='page-header'><h4>Upload blog photo(200X230)</h4></div>
		<!-- Upload form here -->
		<form class="form-inline" action='{site_url("admin/blog/upload_photo/{$post->id|default:''}")}' method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="photo">
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-primary">Upload Photo</button>
				</div>
			</fieldset>
		</form>
		{/if}
	</div>
	<div class="span3">
		<!-- Upload form here -->
		<form class="form-inline" action='{site_url("admin/blog/upload_photo/{$post->id|default:''}")}' method="post" enctype="multipart/form-data">
			<legend>Other photos</legend>
			<fieldset>
				<div class="control-group">
					<div class="controls">
						<input class="input-file" id="fileInput" type="file" name="photo">
					</div>
				</div>
				<div class="controls">
					<button type="submit" class="btn btn-small btn-primary">Upload Photo</button>
				</div>
			</fieldset>
		</form>

		{if ($photos)}
		<div class='page-header'>
			<h4>Other Photos</h4>
		</div>
		<ul class="thumbnails">
			{foreach $photos as $photo}
			<li class="span2">
				<img src='{site_url("media/blog_photos/{$post->image}")}' alt="">
				<input type="text" name="photo_url" class="input-xlarge" value='{site_url("media/blog_photos/{$post->image}")}'>
	      	</li>
			{/foreach}
	    </ul>
	    {/if}
	</div>
</div>