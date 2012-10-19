<div class="page-header">
    <h3>Phone Numbers List</h3>
</div>
<table class='table table-bordered' id='example1'>
<thead>
    <th>Number</th>
    <th>Entries</th>
    <th>Actions</th>
</thead>
<tbody>
    {foreach $numbers as $number}
    <tr>
        <td>{$number->number}</td>
        <td>{$number->entries}</td>
        <td>
            <a href='{site_url("admin/bulk_sms/thread/{$number->number}")}' class='btn btn-small'><i class='icon-eye-open'></i></a>
            <a href='{site_url("admin/bulk_sms/add_to_bulk/{$number->number}")}' class='btn btn-small'><i class='icon-plus'></i></a>
        </td>
    </tr>
    {/foreach}
</tbody>
</table>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#example1').dataTable( {
            "sScrollY": "300px",
            "sDom": "frtiS",
            "bDeferRender": true
        } );
    });
</script>