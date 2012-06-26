<div class='page-header'>
	<div class='pull-right'>
		<div class='btn-group'>
			<a href="<?=site_url('/blog/add_post');?>" class='btn btn-success'><i class='icon-plus-sign icon-white'></i> New Post</a>
			<a href="<?=site_url('/blog/add_category');?>" class='btn btn-success'><i class='icon-plus-sign icon-white'></i> New Category</a>
		</div>
	</div>
	<h2>Blog Posts</h2>
</div>
<div class="row">
	<?php foreach ($blogs as $blog): ?>
	<div class="span3">
		<div class="project thumbnail">
			<h3><a href='<?=site_url("/blog/update/post/{$blog->id}");?>'><?=$blog->title;?></a></h3>
			<p class="sub"><?=$blog->intro;?></p>
			<ul>
				<li><span class="badge badge-warning">15</span> clicks today</li>
			</ul>
			<p class="sub"><?=twitter_time_format($blog->date_modified);?></p>
		</div>
	</div>
	<?php endforeach ?>
	<div class="span3">
	  <div class="project thumbnail new-project">
		  <h1><a href="">+</a></h1>
	  </div>
	</div>
</div>
