<div class="page-header">
	<h1>Incoming SMS Traffic</h1>
</div>

<div class="table-filters">
	<ul class="nav nav-pills">
		<?php $l = $this->uri->segment(3); ?>
		<li <?=($l == 'Today')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/Today');?>">Today</a></li>
		<li <?=($l == '1-day')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/1-day');?>">Yesterday</a></li>
		<li <?=($l == '3-day')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/3-day');?>">Past 3 Days</a></li>
		<li <?=($l == '1-week')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/1-week');?>">Past Week</a></li>
		<li <?=($l == '1-month')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/1-month');?>">Past Month</a></li>
		<li <?=($l == '3-month')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/3-month');?>">Past 3 Months</a></li>
		<li <?=($l == '6-month')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/6-month');?>">Past 6 Months</a></li>
		<li <?=($l == '1-year')? "class='active'":'';?>><a href="<?=site_url('/sms/incoming_sms/1-year');?>">Past Year</a></li>
	</ul>
</div>
<div class='row'>
	<div class='span9'>
		<table class="table table-bordered" id="example">
			<thead>
			<tr>
				<th>Date Sent</th>
				<th>Number</th>
				<th>Message</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($texts as $text): ?>
			<tr>
				<td width="30%"><?=$text->date_created;?></td>
				<td><?=$text->number;?></td>
				<td><?=character_limiter($text->message, 30);?></td>
				<td>
					<a href=''><i class='icon-eye-open'></i></a>
					<a href=''><i class='icon-edit' data-toggle="modal" href="#myModal"></i></a>
					<a href='<?=site_url("sms/delete_sms/{$text->id}");?>' id='delete'><i class='icon-remove'></i></a>
				</td>
			</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal window for reply sms -->
<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Reply:</h3>
    </div>
    <div class="modal-body">
        <form action="" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <label class='control-label'>Phone Number</label>
            <input type="text" name="number" class="input-xlarge" value="" placeholder="" required>
            <label>Message</label>
            <textarea name="message" class="input-xlarge" rows="3"></textarea>
    </div>
    <div class="modal-footer">
        <input type="submit" value="send reply" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>
