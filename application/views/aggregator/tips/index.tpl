<div class="page-header">
    <div class="btn-group pull-right">
        <a href="#" class='btn'>Create Tip</a></li>
    </div>
    <h3>Tips</h3>
</div>
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
      <p>You have not yet posted any farming tips. Start posting by clicking on the Create tip button above</p>
      <small>M-Farm LTD.</small>
    </blockquote>
{/if}