<div class="page-header">
    <div class="btn-group pull-right">
        <a href='{site_url("admin/bulk_sms")}' class='btn'><i class='icon-chevron-left'></i> Back</a>
        <a href="" class='btn'><i class='icon-plus'></i> add to group</a>
        <a href="" class='btn'><i class='icon-plus'></i> add to bulk</a>
    </div>
    <h2>Texts : {$account->username|default:$ci->uri->segment(4)}</h2>
</div>
{foreach $messages as $message}
<blockquote>
  <p>{$message->message}</p>
  <small>{$account->username|default:'Someone famous'} <cite title="Source Title">{$message->date_created}</cite></small>
</blockquote>
{/foreach}