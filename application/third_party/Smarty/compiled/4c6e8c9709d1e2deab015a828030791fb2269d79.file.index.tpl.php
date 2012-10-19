<?php /* Smarty version Smarty-3.1.7, created on 2012-09-26 15:27:55
         compiled from "/Library/WebServer/Documents/mfarm-web/application/views/farmer/trends/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701308592506302db7599a4-90347832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6e8c9709d1e2deab015a828030791fb2269d79' => 
    array (
      0 => '/Library/WebServer/Documents/mfarm-web/application/views/farmer/trends/index.tpl',
      1 => 1348130555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701308592506302db7599a4-90347832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'months_data' => 0,
    'series_data' => 0,
    'products' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_506302db856db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506302db856db')) {function content_506302db856db($_smarty_tpl) {?><script type="text/javascript">
    $(document).ready(function() {
        var crop;
        var days;
        $('select#crop').change(function() {
            crop = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('farmer/trends');?>
",
                data: crop,
                success: function(data) { window.location = "<?php echo site_url('farmer/trends/index');?>
/" + crop }
            });
        });
$(function () {
    var chart;
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'trends',
                type: 'line',
                marginRight: 100,
                marginBottom: 55
            },
            title: {
                text: 'Monthly Average Prices',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: MFarm LTD KE',
                x: -20
            },
            xAxis: {
                categories: <?php echo $_smarty_tpl->tpl_vars['months_data']->value;?>

            },
            yAxis: {
                title: {
                    text: 'Prices (°KES)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#ccc'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': KES '+ this.y;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series: <?php echo $_smarty_tpl->tpl_vars['series_data']->value;?>

        });
    });

});
</script>
<div class="row-fluid">
    <div class="span12">
        <legend>Select Crop : <?php echo form_dropdown('crop',$_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['product_id']->value,"id='crop'");?>
</legend>
        <div id="trends"></div><!-- / Trends Chart-->
    </div>
</div><?php }} ?>