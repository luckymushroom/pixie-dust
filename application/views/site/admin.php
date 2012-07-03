<div class='page-header'>
	<h2>Press Page Items</h2>
</div>
<div class="row">
	<?php foreach ($items as $row): ?>
	<div class="span3">
		<div class="project thumbnail">
			<h3><a href="<?=site_url("/site/admin_edit/{$row->id}");?>"><?=$row->title;?></a></h3>
			<p class="sub"><?=$row->body;?></p>
			<ul>
			</ul>
			<p class="sub">Updated: <?=twitter_time_format($row->updated_at);?></p>
			<p class="sub">Source: <?=auto_link($row->source);?></p>
		</div>
	</div>
	<?php endforeach ?>

  	<div class="span3">
	  <div class="project thumbnail new-project">
		  <h1><a href="<?=site_url('site/admin_add/press');?>">+</a></h1>
	  </div>
	</div>
</div>