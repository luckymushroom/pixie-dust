<div class="maincontent">
	<div class="col-1">                
	   <!-- Load marketplace snapshot here -->
	   	<?php if ($posts): ?>
    <div class="col-2-2">
    <ul class="wine-list">
    <?php foreach ($posts as $row): ?>
        <li id="item">
            <h3><?=$row->product_name;?></h3>
            <h5><?=$row->product_weight;?> <?=$row->weight_unit;?></h5>
            <a href="<?=base_url();?>soko/item" title="<?=$row->product_name;?>">
                <img src="<?=base_url();?>media/crops/<?=$row->photo;?>" alt="<?=$row->image;?>" width="120" height="120">
            </a>
            <ul class="details clearfix">
                <li class="price"><sup>KES</sup><?=$row->unit_price;?><sup>per <?=$row->packaging;?></sup></li>
            </ul><!-- / -->
            <p><?=$row->description;?></p>
            <p>Location: <?=$row->location_name;?> &nbsp; Delivered: <?=($row->delivered)?'YES':'NO';?></p>
            <div class="actions default">
                <button class="pre-order" id="<?=$row->id;?>" data-toggle="modal" href="#myModal"> pre-order here</button>
            </div>
        </li>
    <?php endforeach ?>
    </ul><!-- /list -->
</div>
<div class="col-2-1">
    <h4>Newsletter</h4>
    <a href="http://eepurl.com/lm6-9" class="button-helios alt-green" title="Newsletter"><span>Get Our Newsletter</span></a>
</div><!-- / -->

<div id="myModal" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Pre-Order Details </h3><i>*Fill in all fields</i>
    </div>
    <div class="modal-body">
        <form action="<?=base_url();?>post/post_order" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <label class='control-label'>Names</label>
            <input type="text" name="names" class="input-xlarge" value="" placeholder="First and Last Name" required>
            <label>Email</label>
            <input type="text" name="email" class="input-xlarge" value="" placeholder="Email" required>
            <label>Phone number</label>
            <input type="tel" name="phone" class="input-xlarge" value="" placeholder="eg. +2547221234567" required>
            <label>Price Offer</label>
            <input type="text" name="price_offer" class="input-xlarge" value="" placeholder="eg. KES 3200" required>
            <label>Quantity</label>
            <input type="text" name="quantity" class="input-xlarge" value="" placeholder="eg. 1000Kgs" required>
            <label>Order Description</label>
            <textarea name="description" class="input-xlarge" rows="3"></textarea>
            <input type="hidden" name="latitude" value="" id="latitude">
            <input type="hidden" name="longitude" value="" id="longitude">
    </div>
    <div class="modal-footer">
        <input type="submit" value="Submit order" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>

<?php else: ?>
<h6> Your posts will appear here soon</h6>
<div class="col-1">
    <div class="image-frame"><img src="<?=base_url();?>media/site/images/mfarm_market_place_1.jpg" alt="Mfarm Marketplace"></div>
    <div class="image-frame"><img src="<?=base_url();?>media/site/images/mfarm_market_place_2.jpg" alt="Mfarm Marketplace"></div>
</div>
<?php endif ?>
</div>
<script>
navigator.geolocation.getCurrentPosition(
    function(pos) {
        $("#latitude").val(pos.coords.latitude);
        $("#longitude").val(pos.coords.longitude);
    });
/* <![CDATA[ */

$(document).ready(function() {
    $("ul.wine-list").quickPager( {
        pageSize: 5,
        currentPage: 1,
        pagerLocation: "after"
    });

    $(".pre-order").click(function() {
        var id = $(this).attr('id');
         $('#order-id').val(id);
     });
});

/* ]]> */
</script>
<script src="http://www.google.com/jsapi"></script>