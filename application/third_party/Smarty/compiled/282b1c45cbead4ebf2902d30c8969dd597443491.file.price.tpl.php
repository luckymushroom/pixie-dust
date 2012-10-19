<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 12:18:03
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/site/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4812351145062d65b765aa0-29012249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282b1c45cbead4ebf2902d30c8969dd597443491' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/site/price.tpl',
      1 => 1345834937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4812351145062d65b765aa0-29012249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_session' => 0,
    'prices' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5062d65b8b940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5062d65b8b940')) {function content_5062d65b8b940($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include '/Library/WebServer/Documents/mfarm-web/application/third_party/Smarty/plugins/function.base_url.php';
?><!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/datatables.css" rel="stylesheet" type="text/css" />
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/demo_table_jui.css" rel="stylesheet" type="text/css" />


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<style type="text/css" title="currentStyle">
    @import "<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/demo_page.css";
    @import "<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/js/TableTools.js"></script>
<link href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/css/TableTools.css" rel="stylesheet" type="text/css" />
<?php if ($_smarty_tpl->tpl_vars['user_session']->value==12){?>
<script type="text/javascript">
$(document).ready( function() {
    //Datatables
    TableTools.DEFAULTS.aButtons = [ "xls" ];
    $('#example').dataTable( {
                        "sDom": 'T<"clear">lfrtip',
                        "oTableTools": {
                            "sSwfPath": "<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
media/site/swf/copy_cvs_xls_pdf.swf"
                        },
                        "bJQueryUI": true,
                        "sPaginationType": "full_numbers"
                    } );
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).change(function () {
        $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd");
        var date = $(this).val();
        $.ajax({
                type: "POST",
                url: "<?php echo site_url('price/');?>
",
                data: date,
                success: function(data) { window.location = "<?php echo site_url('price');?>
/" + date }
            });
    });
});
</script>
<?php }else{ ?>
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
                url: "<?php echo site_url('price/');?>
",
                data: date,
                success: function(data) { window.location = "<?php echo site_url('price');?>
/" + date }
            });
    });
});
</script>
<?php }?>

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
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->product_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->location_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->crop_date;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->crop_weight;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->crop_unit;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->min_price;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->max_price;?>
</td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>
<!-- END OF CONTENT --><?php }} ?>