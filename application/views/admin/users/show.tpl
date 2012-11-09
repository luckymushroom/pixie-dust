<div class="page-header">
    <div class="pull-right">
        <a href="{site_url('admin/users/')}" title="Users" class="btn btn-small">
        Back to Users <i class="icon-chevron-right"></i></a>
    </div>
    <h3>{$user->username}</h3>
</div>
<div class="row-fluid">
    <form action='{site_url("admin/users/$user->id/update")}' method="get" accept-charset="utf-8">
        <label for="username">Username</label>
        <input type="text" name="username" value="{$user->username}" disabled="disabled">

        <label for="email">Email</label>
        <input type="text" name="email" value="{$user->email}" disabled="disabled">

        <label for="email">Phone</label>
        <input type="text" name="phone" value="{$user->phone}" disabled="disabled">

        {if $user->is_aggregator }
            <label>Aggregator Code</label>
            <input type="text" name="code" value="{$user->is_aggregator}" disabled="disabled">
        {else}
            <br>
            <a href='{site_url("admin/users/aggregator_code/{$user->id}")}' class="btn btn-primary" title="Make Aggregator">Make Aggregator</a>
        {/if}
    </form>
</div>