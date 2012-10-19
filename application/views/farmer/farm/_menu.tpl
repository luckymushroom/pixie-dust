<div class="page-header">
		<div class="pull-right">
		<div class="btn-group">
			<a href='{site_url("users/{$user_session}/farmers")}' class="btn">
				<i class="icon-user"></i>
				Profiles
			</a>
			<a href="#" class="btn">{$username}</a>
			<button class="btn dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href='{site_url("settings/profile/{$seg_three}")}'><i class="pull-right icon-eye-open"></i> Profile</a>
				</li>
				<li>
					<a href='{site_url("users/{$seg_three}/posts")}'><i class="pull-right icon-download"></i> Posts</a>
				</li>
			</ul>
		</div>
	</div>
	<ul class="nav nav-pills">
		<li class="active"><a href='{site_url("farm/details/{$seg_three}")}'>Shamba Details</a></li>
		<li><a href='{site_url("farm/crops_grown/{$seg_three}")}'>Crops Grown</a></li>
		<!-- <li><a href="{site_url('farm/harvest')}">Harvests</a></li> -->
	</ul>
</div>