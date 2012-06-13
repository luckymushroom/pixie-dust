<div class="maincontent">
<div class="col-1">                
   <!-- Load marketplace snapshot here -->
   	<?php if ($posts): ?>
    <div class="col-2-2">
	    <ul class="wine-list">
	    <?php foreach ($posts as $row): ?>
	        <li id="item">
	            <h3><?=$row->product_name;?></h3>
	            <h5><?=$row->product_weight;?> Kgs</h5>
	            <a href="<?=base_url();?>soko/item" title="<?=$row->product_name;?>">
	                <img src="<?=base_url();?>media/crop_images/<?=$row->image;?>.jpg" alt="<?=$row->image;?>" width="120" height="120">
	            </a>
	            <ul class="details clearfix">
	                <li class="price"><sup>KES</sup><?=$row->unit_price;?><sup>per <?=$row->units;?></sup></li>
	            </ul><!-- / -->
	            <p><?=$row->description;?></p>
	            <p>Location: <?=$row->location_name;?> &nbsp; Delivered: <?=$row->delivered;?></p>
	            <div class="actions default">
	                <button class="pre-order" id="<?=$row->id;?>" data-toggle="modal" href="#myModal"> pre-order here</button>
	            </div>
	        </li>
	    <?php endforeach ?>
	    </ul><!-- /list -->
	</div>
<?php endif ?>
   <!-- end loading of marketplace -->
</div>
</div>
<script type="text/javascript" src="<?php site_url('media/js/quickpager.jquery.js'); ?>"></script>