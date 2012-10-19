<div class="page-header">
	<h1>SMS Traffic</h1>
</div>
<div class="row-fluid">
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="{site_url('admin/sms/incoming_sms')}">Incoming SMS</a></h3>
			<p class="sub">All incoming system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success">{$today}</span> today</li>
				<li><span class="badge badge-warning">{$all}</span> total</li>
			</ul>
			<p class="sub">Updated 30 minute ago</p>
		</div>
	</div>
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="{site_url('admin/sms/price_texts')}">Price</a></h3>
			<p class="sub">All price system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success">{$today_price}</span> today</li>
				<li><span class="badge badge-warning">{$price}</span> total</li>
			</ul>
			<p class="sub">Updated 45 minutes ago</p>
		</div>
	</div>

	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="{site_url('admin/sms/sell_texts')}">Sell</a></h3>
			<p class="sub">All sell system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success">{$today_sell}</span> today</li>
				<li><span class="badge badge-warning">{$sell}</span> total</li>
			</ul>
			<p class="sub">Updated 15 minutes ago</p>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span4">
		<div class="project thumbnail">
			<h3><a href="{site_url('admin/sms/join_texts')}">Subscribe</a></h3>
			<p class="sub">All subscription system SMSs 3535 and 3555</p>
			<ul>
				<li><span class="badge badge-success">{$today_join}</span> today</li>
				<li><span class="badge badge-warning">{$join}</span> total</li>
			</ul>
			<p class="sub">Updated 15 minutes ago</p>
		</div>
	</div>
		<div class="span4">
		<div class="project thumbnail">
			<h3><a href="{site_url('admin/bulk_sms')}">Bulk sms</a></h3>
			<p class="sub">Bulk SMS system here</p>
		</div>
	</div>
	<div class="span4">
	  <div class="project thumbnail new-project">
		  <h1><a href="">+</a></h1>
	  </div>
	</div>
</div>