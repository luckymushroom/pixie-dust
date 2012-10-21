    <div class="span6">
        <legend>Post #{$post->id}</legend>
        <form class="form-horizontal" method="post" action='{site_url("farmer/posts/edit/{$post->id}")}'>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="input01">Product Name</label>
                    <div class="controls">
                        {form_dropdown('product_id', $products, $post->product_id)} &nbsp;
                        <a title="Add New Crop"><i class="icon-plus"></i></a>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input01">Product Amount</label>
                    <div class="controls">
                        <input type="text" name="product_weight" value="{$post->product_weight}" class="input-large" id="input01" required />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input01">Unit Weight</label>
                    <div class="controls">
                        {form_dropdown('weight_unit',$weight_unit, $post->weight_unit)}
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="appendedPrependedInput">Unit Price <br> (Per Kilo/Crate)</label>
                    <div class="controls">
                      <div class="input-prepend input-append">
                        <span class="add-on">KES</span>
                        <input id="appendedPrependedInput" value="{$post->unit_price}" class="span8" type="text" name="unit_price" required>
                        <span class="add-on">.00</span>
                      </div>
                    </div>
                 </div>
                <div class="control-group">
                    <label class="control-label" for="textarea">Product Summary</label>
                    <div class="controls">
                        <textarea class="input-large" name="description" id="textarea" rows="3">{$post->description}</textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Will you deliver</label>
                    <div class="controls">
                        <label class="radio">
                            <input id="radio-yes" type="radio" name="delivered" value="1" placeholder="" {if $post->delivered == TRUE}checked{/if}>YES
                        </label>
                        <label class="radio">
                            <input id="radio-no" type="radio" name="delivered" value="0" placeholder="" {if $post->delivered == FALSE}checked{/if}>NO
                        </label>
                    </div>
                </div>
                <div id="delivery-date" class="control-group">
                    <label class="control-label">Delivery Date</label>
                    <div class="controls">
                        <input id="dp" type="text" class="input-xlarge" name="delivery_date" value="{$post->delivery_date}">
                    </div>
                </div>
                <div class="controls">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{site_url('farmer/posts/')}" class="btn btn-warning">Done</a>
                </div>
            </fieldset>
        </form>
    </div><!-- / -->
    <div class="span4">
    <legend>Upload Photos</legend>
    {if ($post->post_photo)}
        <ul class="thumbnails">
            <li class="span7">
                <div class="thumbnail">
                    <a href='{site_url("farmer/posts/delete_photo/{$post->id}/")}' onclick="return confirm('Are you sure you want to delete this Photo?')" title="Delete Photo">
                    <img src='{site_url("media/crops/{$post->post_photo|default:'default-thumg.gif'}")}' alt="{$post->post_photo}">
                    </a>
                </div>
            </li>
        </ul><!-- /Photos -->
    {else}
    <!-- Upload form here -->
        <form class="form-inline" action='{site_url("farmer/posts/upload_photo/{$post->id}")}' method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" name="caption" class="input-xlarge" placeholder="Caption" id="input01">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input class="input-file" id="fileInput" type="file" name="photo">
                    </div>
                </div>
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Upload Photo</button>
                </div>
            </fieldset>
        </form>
    {/if}
        <br>
        <legend>Price Feed</legend>
        <table class="table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>NBI</th>
                    <th>MSA</th>
                    <th>KSM</th>
                    <th>ELD</th>
                    <th>KTL</th>
                </tr>
            </thead>
            <tbody>
                {foreach price_feed($post->product_id) as $row}
                <tr>
                    <td>{$row->wk_date}</td>
                    <td>{$row->NBI}</td>
                    <td>{$row->MSA}</td>
                    <td>{$row->KSM}</td>
                    <td>{$row->ELD}</td>
                    <td>{$row->KTL}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div><!-- / -->
</div>