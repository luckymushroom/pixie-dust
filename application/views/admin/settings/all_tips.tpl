<ul class="nav nav-pills">
	<li><a href="{base_url}admin/settings/tips">My Tips</a></li>
	<li class="active"><a href="{base_url}admin/settings/all_tips">All Tips</a></li>
</ul>
<h2><legend>All Tips</legend></h2>
<p><a class="btn btn-success" data-toggle="modal" href="#myModal">Give A Tip</a></p>
<br>
{if ($tips)}
{foreach $tips as $tip}
	<blockquote>
	{if $tip->user_id == $user_session}
		<a href='{site_url("admin/settings/delete_tip/{$tip->id}")}' class="close close-tip" onclick="return confirm('Are you sure you want to delete?')">×</a>
	{/if}
	  <p>{$tip->tip}</p>
	  <small>{$tip->username} {twitter_time_format($tip->created_at)}</small>
	</blockquote>
{/foreach}
{else}
	<blockquote>
	  <p>You have not yet posted any farming tips. Start posting by clicking on the new tip button above</p>
	  <small>M-Farm LTD.</small>
	</blockquote>
{/if}

<!-- Modal window here -->
<div class="modal hide fade" id="myModal">
  <form action="{base_url}admin/settings/tips" method="post">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Share Farming Tip</h3>
  </div>
  <div class="modal-body">
  	<div id="" class="control-group">
		<div id="" class="controls">
			<label class="control-label">Share A Tip:</label>
			<textarea name="tip" class="input-xlarge span5" rows="5">{set_value('tip')}</textarea>
		</div><!-- /controls-->
	</div><!-- /control-group -->
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal" >Close</a>
    <input type="submit" class="btn btn-success" value="Save changes"/>
  </div>
  </form>
</div>