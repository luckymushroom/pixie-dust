<div class='page-header'>
    <div class='pull-right'>
        <div class='btn-group'>
            <a data-toggle="modal" href="#new_category" class='btn btn-small'><i class='icon-plus-sign'></i> New Category</a>
            <a data-toggle="modal" href="#list_category" class='btn btn-small'><i class='icon-eye-open'></i> View Categories</a>
            <a href="{site_url('admin/crop_reports')}" class='btn btn-small'><i class='icon-bookmark'></i>
             Crop Reports</a>
        </div>
    </div>
    <h3>Blog Posts</h3>
</div>
<div class="row">
    <div class="span3">
      <div class="project thumbnail new-project">
          <h1><a href="{site_url('admin/blog/add_post')}">+</a></h1>
      </div>
    </div>
    {foreach $blogs as $blog}
    <div class="span3">
        <div class="project thumbnail">
            <h5><a href='{site_url("admin/blog/{$blog->id}/edit")}'>{character_limiter($blog->title,20)}</a></h5>
            <p class="sub">{character_limiter($blog->intro,129)}</p>
            <span class="label">
                created: {date('F, d Y',strtotime($blog->created_at))}
            </span>
            <br>
            <span class="label">
                updated: {date('F, d Y',strtotime($blog->updated_at))}
            </span>
        </div>
    </div>
    {/foreach}
</div>



<!-- Add Category -->
<div id="new_category" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>Add Blog Category:</h3>
    </div>
    <div class="modal-body">
        <form action="{site_url('admin/blog/add_category')}" method="post" class='form form-vertical well'>
            <input type="hidden" id="order-id" required name="post_id" value="">
            <label class='control-label'>Category Name</label>
            <input type="text" name="title" class="input-xlarge" value="" placeholder="" required>
    </div>
    <div class="modal-footer">
        <input type="submit" value="Save Changes" class="btn btn-primary">
      <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
    </form>
    <div id="status" class="success" style="display: none;"></div>
</div>

<!-- List Category -->
<div id="list_category" class="modal hide fade">
    <div class="modal-header">
      <a class="close" data-dismiss="modal" >&times;</a>
      <h3>List Blog Categories:</h3>
    </div>
    <div class="modal-body">
        <table class="table table-bordered">
            <thead>
            <th>Category Name</th>
            <th>Actions</th>
            </thead>
            <tbody>
                {foreach $blog_categories as $row}
                <tr>
                    <td>{$row->title}</td>
                    <td>
                        <a href='{site_url("admin/blog/delete_category/{$row->id}")}' id='delete'><i class='icon-remove'></i></a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <div class='modal-footer'>
        <a href="#" class="btn" data-dismiss="modal" >Close</a>
    </div>
</div>