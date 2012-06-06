<h1>Users</h1>
<legend>Below is a list of the users.</legend>

	<div id="infoMessage"><?php echo $message;?></div>

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
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo $group->name;?>/
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
		</tr>
	<?php endforeach;?>
	</tbody>
</table>
<p><i class="icon-plus"></i> <a href="<?php echo site_url('auth/create_user');?>">Create a new user</a></p>