<script type="text/javascript">
    $(document).ready(function() {
        var crop;
        var days;
        $('select#crop').change(function() {
            crop = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>trends",
                data: crop,
                success: function(data) { window.location = "<?=base_url();?>trends/index/" + crop }
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
                categories: <?php echo $months_data; ?>
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
            series: <?php echo $series_data; ?>
        });
    });

});
</script>
<div class="row">
<div class="span9">
<legend>Select Crop : <?=form_dropdown('crop', $products,$product_id,"id='crop'");?></legend>
<div id="trends">
</div><!-- / Trends Chart-->
</div>
</div>