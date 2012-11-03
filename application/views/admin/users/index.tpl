<div class="page-header">
<h3>Accounts - {$type|default:'All'}</h3>
</div>
<table class='table table-bordered table-condensed' id='example'>
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Created On</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{if (isset($user))}
		<tr>
			<td>{$user->username}</td>
			<td>{$user->email}</td>
			<td>{$user->phone}</td>
			<td>{date('Y-m-d',$user->created_on)}</td>
			<td>
                <a href='{site_url("admin/users/index/{$user->id}")}' class='user-card btn btn-small' data-toggle="modal" id="{$user->id}" data-target="#user-card">
                    <i class='icon-eye-open'></i></a>
                <a href='{site_url("admin/users/delete/{$user->id}")}' class='btn btn-small'><i class='icon-remove delete'></i></a>
			</td>
		</tr>
		{else}
		{foreach $users as $user}
		<tr>
			<td>{$user->username}</td>
			<td>{$user->email}</td>
			<td>{$user->phone}</td>
			<td>{date('Y-m-d',$user->created_on)}</td>
			<td class='btn-group'>
                <a href='{site_url("admin/users/index/{$user->id}")}' class='user-card btn btn-small' data-toggle="modal" id="{$user->id}" data-target="#user-card">
                    <i class='icon-eye-open'></i></a>
                <a href='{site_url("admin/users/delete/{$user->id}")}' class='btn btn-small'><i class='icon-remove delete'></i></a>
			</td>
		</tr>
		{/foreach}
		{/if}
	</tbody>
</table>

<!-- User card -->
<!-- Modal window for reply sms -->
<div id="user-card" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>User Profile:</h3>
    </div>
    <div class="modal-body">
    	<p>Name: Isaak Mogetutu</p>
    	<p>Email: mogetutu@mogetutu.com</p>
    	<hr>
    	<p>Bio: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco.</p>
    </div>
    <div class="modal-footer">
        <div class="btn-group">
            <a href="#" class='btn'>Reset Password</a>
            <a href="#" class='btn'>Make Aggregator</a>
            <a href="#" class='btn'>Make Administrator</a>
        </div>
    </div>
</div>