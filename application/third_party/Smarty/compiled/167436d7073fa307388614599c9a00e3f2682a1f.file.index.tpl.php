<?php /* Smarty version Smarty-3.1.7, created on 2012-11-01 15:49:31
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/site/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1265330331507c55b532a027-69041984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167436d7073fa307388614599c9a00e3f2682a1f' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/site/index.tpl',
      1 => 1351774143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265330331507c55b532a027-69041984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_507c55b555683',
  'variables' => 
  array (
    'posts' => 0,
    'row' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507c55b555683')) {function content_507c55b555683($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><div class="maincontent">
    <!-- Load marketplace snapshot here -->
    <?php if (($_smarty_tpl->tpl_vars['posts']->value)){?>
    <div class="col-2-2">
        <ul class="wine-list">
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <li id="item">
                <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->product_name;?>
</h3>
                <h5><?php echo $_smarty_tpl->tpl_vars['row']->value->product_weight;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->weight_unit;?>
</h5>
                <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
market/item/<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value->product_name;?>
">
                    <img src=<?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['row']->value->post_photo)===null||$tmp==='' ? 'default-thumb.gif' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo base_url("media/crops/".$_tmp1);?>
 alt="<?php echo $_smarty_tpl->tpl_vars['row']->value->image;?>
" width="120" height="120">
                </a>
                <ul class="details clearfix">
                    <li class="price"><sup>KES</sup><?php echo $_smarty_tpl->tpl_vars['row']->value->unit_price;?>
<sup>per <?php echo singular($_smarty_tpl->tpl_vars['row']->value->weight_unit);?>
</sup></li>
                </ul><!-- / -->
                <p><?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>
</p>
                <p>Delivered: <?php echo $_smarty_tpl->tpl_vars['row']->value->delivered ? 'YES' : 'NO';?>
</p>
                <div class="actions default">
                    <button class="pre-order" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" data-toggle="modal" href="#myModal"> pre-order here</button>
                </div>
            </li>
        <?php } ?>
        </ul><!-- /list -->
    </div>
    <!-- END LEFT CONTENT -->

    <!-- BEGIN OF SIDEBAR -->
    <div class="col-3 sidebar">
        <div class="sidebar-content">
            <h4>Search</h4>
            <form action='<?php echo site_url("market");?>
' method='post'>
                <input name="search" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['search']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                <br>
                <input type='submit' value='Search' class='btn'>
            </form>
        </div>

        <div class="sidebar-content">
            <a href="http://eepurl.com/lm6-9" class="button-helios alt-green" title="Newsletter"><span>Get Our Newsletter</span></a>
        </div><!-- /Newsletter -->
    </div>
    <?php }else{ ?>
    <h6> Your posts will appear here soon</h6>
    <div class="col-1">
        <div class="image-frame"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/mfarm_market_place_1.jpg" alt="Mfarm Marketplace"></div>
        <div class="image-frame"><img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/images/mfarm_market_place_2.jpg" alt="Mfarm Marketplace"></div>
    </div>
    <?php }?>
</div>
<!-- END MAIN CONTENT -->


<!-- BEGIN MODAL -->
<div id="myModal" class="modal hide fade">
<div class="modal-header">
  <a class="close" data-dismiss="modal" >&times;</a>
  <h3>Pre-Order Details </h3>
</div>
<div class="modal-body">
        <form action="<?php echo base_url();?>
sms/sms_order" method="post" class='form form-vertical well' id='contact-me'>
            <input type="hidden" id="post-id" required name="post_id" value="">
            <input type="hidden" id="network" required name="network" value="safaricom">
            <input type="hidden" id="redirect_url" required name="redirect_url" value="<?php echo current_url();?>
">
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
</script><?php }} ?>