<div class="maincontent">
    <!-- Load marketplace snapshot here -->
    {if ($posts)}
    <div class="col-2-2">
        <ul class="wine-list">
        {foreach $posts as $row }
            <li id="item">
                <h3>{$row->product_name}</h3>
                <h5>{$row->product_weight} {$row->weight_unit}</h5>
                <a href="{base_url}market/item/{$row->id}" title="{$row->product_name}">
                    <img src={base_url("media/crops/{$row->post_photo|default:'default-thumb.gif'}")} alt="{$row->image}" width="120" height="120">
                </a>
                <ul class="details clearfix">
                    <li class="price"><sup>KES</sup>{$row->unit_price}<sup>per {singular($row->packaging)}</sup></li>
                </ul><!-- / -->
                <p>{$row->description}</p>
                <p>Delivered: {($row->delivered)?'YES':'NO'}</p>
                <div class="actions default">
                    <button class="pre-order" id="{$row->id}" data-toggle="modal" href="#myModal"> pre-order here</button>
                </div>
            </li>
        {/foreach}
        </ul><!-- /list -->
    </div>
    <!-- END LEFT CONTENT -->
    
    <!-- BEGIN OF SIDEBAR -->
    <div class="col-3 sidebar">
        <div class="sidebar-content">
            <h4>Search</h4>
            <form action='{site_url("market")}' method='post'>
                <input name="search" type="text" value="{$search|default:''}">
                <br>
                <input type='submit' value='Search' class='btn'>
            </form>
        </div>

        <div class="sidebar-content">
            <a href="http://eepurl.com/lm6-9" class="button-helios alt-green" title="Newsletter"><span>Get Our Newsletter</span></a>
        </div><!-- /Newsletter -->
    </div>
    {else}
    <h6> Your posts will appear here soon</h6>
    <div class="col-1">
        <div class="image-frame"><img src="{base_url}media/site/images/mfarm_market_place_1.jpg" alt="Mfarm Marketplace"></div>
        <div class="image-frame"><img src="{base_url}media/site/images/mfarm_market_place_2.jpg" alt="Mfarm Marketplace"></div>
    </div>
    {/if}
</div>
<!-- END MAIN CONTENT -->


<!-- BEGIN MODAL -->
<div id="myModal" class="modal hide fade">
<div class="modal-header">
  <a class="close" data-dismiss="modal" >&times;</a>
  <h3>Pre-Order Details </h3>
</div>
<div class="modal-body">
        <form action="{base_url()}sms/sms_order" method="post" class='form form-vertical well' id='contact-me'>
            <input type="hidden" id="post-id" required name="post_id" value="">
            <input type="hidden" id="network" required name="network" value="safaricom">
            <input type="hidden" id="redirect_url" required name="redirect_url" value="{current_url()}">
            <label>Your Phone Number</label>
            <input type="text" name="buyer_contact" id='buyer-contact' class="input-xlarge" value="" placeholder="eg. 254722123456" data-required="true">
            <label>Message to farmer</label>
            <textarea name="message" id="message" class="input-xlarge" rows="3" placeholder='I want to buy your commodity and my contact details are 0722 123 456' data-required="true"></textarea>
            <label id="remaining">(160 characters remaining)</label>
    </div>
    <div class="modal-footer">
        <input type="submit" value="Submit order" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>
</div>
<!-- END MODAL -->


<script>
/* <![CDATA[ */
jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            return (
                key == 8 || 
                key == 9 ||
                key == 46 ||
                (key >= 37 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};
$(document).ready(function() {

    $("ul.wine-list").quickPager( {
        pageSize: 5,
        currentPage: 1,
        pagerLocation: "after"
    });

    $(".pre-order").click(function() {
        var id = $(this).attr('id');
        var contact = $(this).attr('name');
         $('#post-id').val(id);
         $('#contact').val(contact);
     });

    var $remaining = $('#remaining'),
    $messages = $remaining.next();

    $('#message').keyup(function(){
        var chars = this.value.length,
        messages = Math.ceil(chars / 160),
        remaining = messages * 160 - (chars % (messages * 160) || messages * 160);

        $remaining.text(remaining);
        if(chars == 160) {
            $(this).prop('disabled', true);
        }
    });

    $('form#contact-me').submit(function() {
        $('#buyer-contact').ForceNumericOnly();
        var buyer = $('input').filter(function() {
            // filter input elements to required ones that are empty
            return $(this).data('required') && $(this).val() === "";
        }).css({ "background-color":"grey", "color":"white" }); // make them attract the eye

        if(buyer.length) return false; // if any required are empty, cancel submit
    });
});

/* ]]> */
</script>