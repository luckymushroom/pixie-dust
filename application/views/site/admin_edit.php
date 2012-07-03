<div class="row">
	<div class="span8 offset1">
	<div class='page-header'>
		<div class='btn-group pull-right'>
			<a href="<?=site_url('/site/admin/press/');?>" class='btn'> &larr; Back to Press</a>
		</div>
		<h2>Publish Press Item</h2>
	</div>

	<form action='<?=site_url("site/admin_edit/{$item->id}");?>' method='post'>
		<div class='page-header'>
			<input type="text" name="title" value="<?=$item->title;?>" class="input-xlarge span8" id="input01" placeholder='Title'>
		</div>
		<div class="control-group">
			<div class="controls">
				<textarea class="input-xlarge span8" name='body' id="textarea1" rows="12" placeholder='Body/Content'>
					<?=($item->body) ? $item->body : ''; ?>
				</textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="text" name="external_link" value="<?=$item->external_link;?>" class="input-xlarge span8" id="input01" placeholder='External Link'>			
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="text" name="source" value="<?=$item->source;?>" class="input-xlarge span8" id="input01" placeholder='Source'>			
			</div>
		</div>
		<div class='controls'>
			<a href="<?=site_url("site/admin_delete/{$item->id}");?>" class='btn btn-warning' id='delete'>Delete Item</a>
			<input type='submit' value='update item' class='btn btn-success'>
		</div>
	</form>
