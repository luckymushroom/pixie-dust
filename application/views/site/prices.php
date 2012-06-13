
<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?php echo base_url();?>media/site/css/datatables.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>media/site/css/demo_table_jui.css" rel="stylesheet" type="text/css" />


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<style type="text/css" title="currentStyle">
	@import "<?php echo base_url();?>media/site/css/demo_page.css";
	@import "<?php echo base_url();?>media/site/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<script type="text/javascript" src="<?php echo base_url();?>media/site/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/site/js/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>media/site/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>media/site/js/TableTools.js"></script>
<link href="<?php echo base_url();?>media/site/css/TableTools.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready( function() {
    //Datatables
    $('#example').dataTable( {
                        "bJQueryUI": true,
                        "sPaginationType": "full_numbers"
                    } );
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).change(function () {
        $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
        var date = $(this).val();
        $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>price/archives",
                data: date,
                success: function(data) { window.location = "<?=base_url();?>price/archives/" + date }
            });
    });
});
</script>

<!-- BEGIN OF CONTENT -->
<div id="content">
	<div class="maincontent">

    <div class="col-12">
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Archive Date: <input type="text" id="datepicker"></p>
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
			<thead>
				<tr>
					<th>Produce</th>
					<th>location</th>
					<th>Date</th>
                    <th>Weight</th>
					<th>Unit</th>
					<th>Low</th>
                    <th>High</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($prices as $row): ?>
					<tr>
						<td><?php echo $row->product_name;?></td>
						<td><?php echo $row->location_name;?></td>
                        <td><?php echo $row->crop_date;?></td>
						<td><?php echo $row->crop_weight;?></td>
						<td><?php echo $row->crop_unit;?></td>
                        <td><?php echo $row->min_price;?></td>
						<td><?php echo $row->max_price;?></td>

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

</div>
<!-- END OF CONTENT -->