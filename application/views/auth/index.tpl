<h1>Users</h1>
<legend>Below is a list of the users.</legend>

<table class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Groups</th>
		<th>Status</th>
	</tr>
	</thead>
	<tbody>
	{foreach $users as $user}
		<tr>
			<td>{$user->first_name}</td>
			<td>{$user->last_name}</td>
			<td>{$user->email}</td>
			<td>
				{foreach $user->groups as $group}
					{$group->name}/
                {/foreach}
			</td>
			<td>{($user->active) ? anchor("auth/deactivate/{$user->id}", 'Active') : anchor("auth/activate/{$user->id}", 'Inactive')}</td>
		</tr>
	{/foreach}
	</tbody>
</table>
<p><i class="icon-plus"></i> <a href="{site_url('auth/create_user')}">Create a new user</a></p>