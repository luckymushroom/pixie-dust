<!-- ////////////////////////////////// -->
<!-- //      Start Stylesheets       // -->
<!-- ////////////////////////////////// -->
<link href="{base_url}media/site/css/datatables.css" rel="stylesheet" type="text/css" />
<link href="{base_url}media/site/css/demo_table_jui.css" rel="stylesheet" type="text/css" />


<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<style type="text/css" title="currentStyle">
    @import "{base_url}media/site/css/demo_page.css";
    @import "{base_url}media/site/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<script type="text/javascript" src="{base_url}media/site/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{base_url}media/site/js/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8" src="{base_url}media/site/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="{base_url}media/site/js/TableTools.js"></script>
<link href="{base_url}media/site/css/TableTools.css" rel="stylesheet" type="text/css" />
{if $user_session == 12}
<script type="text/javascript">
$(document).ready( function() {
    //Datatables
    TableTools.DEFAULTS.aButtons = [ "xls" ];
    $('#example').dataTable( {
                        "sDom": 'T<"clear">lfrtip',
                        "oTableTools": {
                            "sSwfPath": "{base_url}media/site/swf/copy_cvs_xls_pdf.swf"
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
                url: "{site_url('price/')}",
                data: date,
                success: function(data) { window.location = "{site_url('price')}/" + date }
            });
    });
});
</script>
{else}
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
                url: "{site_url('price/')}",
                data: date,
                success: function(data) { window.location = "{site_url('price')}/" + date }
            });
    });
});
</script>
{/if}

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
                {foreach $prices as $row}
                    <tr>
                        <td>{$row->product_name}</td>
                        <td>{$row->location_name}</td>
                        <td>{$row->crop_date}</td>
                        <td>{$row->crop_weight}</td>
                        <td>{$row->crop_unit}</td>
                        <td>{$row->min_price}</td>
                        <td>{$row->max_price}</td>

                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

</div>
<!-- END OF CONTENT -->