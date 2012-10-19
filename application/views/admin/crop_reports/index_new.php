<div class='page-header'>
<h2>Reports</h2>
</div>
<?php if ($reports): ?>
<?php foreach ($reports as $report): ?>
	<blockquote>
	  <a href="<?=base_url();?>settings/delete_report/<?=$report->id;?>" class="close close-report" onclick="return confirm('Are you sure you want to delete?')">×</a>
	  <p><?=$report->report;?></p>
	  <small><?=$report->username;?> <?=twitter_time_format($report->date_added);?></small>
	</blockquote>
<?php endforeach ?>
<?php else: ?>
	<blockquote>
	  <p>You have not yet posted any farming reports. Start posting by clicking on the new report button above</p>
	  <small>M-Farm LTD.</small>
	</blockquote>
<?php endif ?>