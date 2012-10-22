<div class='page-header'><h2>Manage Tips</h2></div>
{if ($tips)}
    {foreach $tips as $tip}
    	<blockquote>
    		<p>{$tip->tip}</p>
    		<small>{$tip->username} {date('d M,Y', strtotime($tip->created_at))}</small>
    	</blockquote>
    {/foreach}
{else}
	<blockquote>
		<p>No tips just yet, lets wait and see if the farmers will start sharing...</p>
		<small>Someone famous</small>
	</blockquote>
{/if}
