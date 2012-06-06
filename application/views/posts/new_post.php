<div class="page-header">
	<div class="pull-right">
		<div class="btn-group">
			<a href="<?=site_url('/posts');?>" class="btn btn-success"><i class="icon-circle-arrow-left icon-white"></i> Cancel</a>
		</div>
	</div>
<h2>Post on the Marketplace</h2>
</div>
<div class="row">
<div class="span6">
<form id="new-post" class="form-horizontal" method="post" action="<?=site_url('posts/save_post');?>">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="input01">Product Name</label>
			<div class="controls">
				<?=form_dropdown('product_id', $products,'','id=product'); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Product Amount</label>
			<div class="controls">
				<input type="text" name="product_weight" class="input-xlarge" id="input01" required />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Unit Weight</label>
			<div class="controls">
				<input type="text" name="units" class="input-xlarge" id="input01" placeholder="eg. KG" required />
			</div>
		</div>
		<div class="control-group">
            <label class="control-label" for="appendedPrependedInput">Unit Price</label>
            <div class="controls">
              <div class="input-prepend input-append">
                <span class="add-on">KES</span>
                <input class="span2" id="appendedPrependedInput" size="16" type="text" name="unit_price" required>
                <span class="add-on">.00</span>
              </div>
            </div>
         </div>
		<div class="control-group">
			<label class="control-label" for="textarea">Product Summary</label>
			<div class="controls">
				<textarea class="input-xlarge" name="description" id="textarea" rows="3"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Will you deliver</label>
			<div class="controls">
				<label class="radio">
					<input id="radio-yes" type="radio" name="delivered" value="YES" placeholder="">YES
				</label>
				<label class="radio">
					<input id="radio-no" type="radio" name="delivered" value="NO" placeholder="" checked>NO
				</label>
			</div>
		</div>
		<div id="delivery-date" class="control-group hidden">
			<label class="control-label">Delivery Date</label>
			<div class="controls">
				<input id="dp" type="text" class="input-xlarge" name="delivery_date" value="<?=date('Y-m-d',now());?>">
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-success">Post Item</button>
			<a href="<?=site_url('posts/');?>" class="btn">Cancel</a>
		</div>
	</fieldset>
</form>
</div>
<div class="span3">
	<legend>Price Feed</legend>
		<table class="table">
			<thead>
				<tr>
					<th>Day</th>
					<th>NBI</th>
					<th>MSA</th>
					<th>KSM</th>
					<th>ELD</th>
					<th>KTL</th>
				</tr>
			</thead>
			<tbody id='prices'>
			</tbody>
		</table>
</div>
</div>
<script type="text/javascript">
$(function() {
	$("select#product").change(function(event)
	{
		var product_id = $(this).find(':selected').val();
 		$.getJSON('/posts/price_feed/' + product_id, function(data) {
        $('#prices tr').remove();
        prices = data;
        $.each(prices, function(index, price) {
            $('#prices').append(
				'<tr><td>' + price.wk_date + '</td><td>' + price.NBI + '</td><td>' + price.MSA + '</td><td>' + price.KSM + '</td><td>' + price.ELD + '</td><td>' + price.KTL + '</td></tr>'
            );
        });
    });
	});
});
</script>

