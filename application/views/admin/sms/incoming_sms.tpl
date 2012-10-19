<div class="page-header">
    <div class="table-filters pull-right">
        <ul class="nav nav-pills">
            <li {if $ci->uri->segment(4) == 'Today'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/Today")}'>Today</a>
            </li>
            <li {if $seg_three == '1-day'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/1-day")}'>Yesterday</a>
            </li>
            <li {if $seg_three == '3-day'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/3-day")}'>Past 3 Days</a>
            </li>
            <li {if $seg_three == '1-week'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/1-week")}'>Past Week</a>
            </li>
            <li {if $seg_three == '1-month'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/1-month")}'>Past Month</a>
            </li>
            <li {if $seg_three == '3-month'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/3-month")}'>Past 3 Months</a>
            </li>
            <li {if $seg_three == '6-month'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/6-month")}'>Past 6 Months</a>
            </li>
            <li {if $seg_three == '1-year'}class='active'{/if}>
                <a href='{site_url("{$link}/date_created/1-year")}'>Past Year</a>
            </li>
        </ul>
    </div>
	<h3>{$seg_two|default:'Incoming'}</h3>
</div>


<div class='row-fluid'>
	<div class='span12'>
		<table class="table table-bordered table-striped" id="example">
			<thead>
			<tr>
				<th>Date Sent</th>
				<th>Number</th>
				<th>Message</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			{foreach $texts as $text}
			<tr>
				<td width="30%">{$text->date_created}</td>
				<td><a href='{site_url("admin/bulk_sms/thread/{$text->number}")}'>{$text->number}</td>
				<td>{character_limiter($text->message, 30)}</td>
				<td>
					<a id='{$text->number}' class='btn btn-small phone'><i class='icon-edit' data-toggle="modal" href="#myModal"></i></a>
					<a href='{site_url("admin/sms/delete_sms/{$text->id}")}' class='btn btn-small' id='delete'><i class='icon-remove'></i></a>
				</td>
			</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
<!-- Modal -->
<!-- Modal window for reply sms -->
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Reply:</h3>
    </div>
    <div class="modal-body">
        <form action="{site_url('sms/send_sms/')}" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <input type="hidden" id="redirect_url" required name="redirect_url" value="{$uri_string}">
            <label class='control-label'>Phone Number</label>
            <input type="text" name="source" id="phone-id" class="input-xlarge" value="">
            <input type="hidden" name="network" value="Safaricom Short Code" placeholder="">
			<input type="hidden" name="destination" value="3555" placeholder="">
            <label>Message</label>
            <textarea name="message" class="input-xlarge" rows="3" placeholder="">....For more help call us on 0707933993</textarea>
    </div>
    <div class="modal-footer">
        <input type="submit" value="send reply" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>
<!-- End modal -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a.phone').click(function(){
			var number = $(this).attr('id');
			$('#phone-id').val(number);
		});
	});
</script>