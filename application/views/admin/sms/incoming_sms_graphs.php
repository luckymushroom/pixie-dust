<script type="text/javascript">
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
                text: 'Daily Average SMS',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: MFarm LTD KE',
                x: -20
            },
            xAxis: {
                categories: <?php echo $date_data; ?>
            },
            yAxis: {
                title: {
                    text: 'Count (texts)'
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
                        this.x +': Count '+ this.y;
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