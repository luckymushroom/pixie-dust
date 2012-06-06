<h1><?=$title;?></h1>
<legend></legend>
<ul class="thumbnails">
<?php foreach ($farmers as $farmer): ?>
	<li class="span2">
		<div class="thumbnail">
	      <img src="<?=site_url('media/avatars/'.$farmer->avatar);?>" alt="">
	      <div id="" class="caption">
			<h5><?=$farmer->username;?></h5>
	      	<p></p>
	      	<p>
	      		<a href="#" class="btn">Details</a>
	      		<?php if ($code): ?>
	      		<a href="<?=site_url('farmers/remove_farmer/'.$farmer->id);?>" class="btn btn-primary">Remove</i></a>
	      		<?php else: ?>
	      		<a href="<?=site_url('farmers/add_farmer/'.$farmer->id);?>" class="btn btn-primary">Add <i class="icon-plus icon-white"></i></a>
	      		<?php endif ?>
	      	</p>
	      </div><!-- / -->
	    </div>
	</li>
	<?php endforeach ?>
</ul>