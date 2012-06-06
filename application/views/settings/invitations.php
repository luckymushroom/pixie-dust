<h1>Invitations</h1>
<form action="invitations" method="post" action="<?=base_url();?>settings/invitations" class="form-inline well">
	<fieldset>
		<Legend>Invite a Friend to Mfarm</Legend>
		<div class="control-group">
			<div class="controls">
				<input type="text" class="input-medium" value="<?=set_value('first_name');?>" name="first_name" placeholder="First Name" required>
				<input type="text" class="input-medium" value="<?=set_value('last_name');?>" name="last_name" placeholder="Last Name" required>
				<input type="text" class="input-medium" value="<?=set_value('email');?>" name="email" placeholder="Email" required>
				<button type="submit" class="btn btn-primary">Send Invite</button>
				<p class="help-block">Please Enter Full names and email address of the person you want to invite.</p>
		</div>
	</fieldset>
</form>

<legend>Invites</legend>
<div class="btn-toolbar">
	<div class="btn-group">
		<a class="btn" href="<?=base_url();?>settings/invitations">All</a>
		<a class="btn" href="<?=base_url();?>settings/invitations/active">Active</a>
		<a class="btn" href="<?=base_url();?>settings/invitations/pending">Pending</a>
	</div>
</div>
<table class="table table-bordered table-striped" id="example">
	<thead>
		<tr>
			<th>Names</th>
			<th>Email</th>
			<th>Status</th>
			<th>Creation Date</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($invitations as $invite): ?>
			<tr>
				<td><?=$invite->username;?></td>
				<td><?=$invite->email;?></td>
				<td><?php if($invite->active) echo 'Active'; else echo 'Pending';?></td>
				<td><?=twitter_time_format(strtotime($invite->created_on));?></td>
			</tr>
		<?php endforeach ?>

	</tbody>
</table>