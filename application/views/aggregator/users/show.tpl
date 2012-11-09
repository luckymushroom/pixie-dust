<div class="page-header">
    <div class="btn-group pull-right">
        <a href='{site_url("aggregator/users/{$user_session}")}' class='btn btn-small'><i class='icon-chevron-left'></i> All Farmers</a>
        <a href="{base_url}aggregator/farm/details/{$seg_four}" class='btn btn-small'><i class='icon-th-large'></i> Farm Details</a>
        <a href='{site_url("aggregator/farm/crops/{$farmer->id}")}' class='btn btn-small'><i class='icon-leaf'></i> Planted</a>
        <a href='{site_url("aggregator/farm/crops/{$farmer->id}/harvested")}' class='btn btn-small'>Harvested</a>
    </div>
    <h2>Profile</h2>
</div>

<div class="span3">
    {if $farmer->avatar != 'default_avatar.jpg'}
        <img src="{base_url}media/avatars/{$farmer->avatar}" alt="{$farmer->avatar}" class="thumbnail">
    {/if}
    <br>
    <form action="{base_url}aggregator/users/upload_photo/{$user_session}/{$farmer->id}" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="control-group">
                <label class="control-label" for="fileInput">Upload Profile Picture:</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file" name="user_avatar">
                </div>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary btn-small">Save changes</button>
                <button class="btn btn-small">Cancel</button>
            </div>
        </fieldset>
    </form>
</div>
<div class="span6">
    <form class="form-horizontal" method="post" action='{site_url("aggregator/users/update/{$user_session}/{$farmer->id}")}'>
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="input01">Name</label>
            <div class="controls">
                <input type="text" name="username" class="input-xlarge" id="input01" value="{$farmer->username}" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Phone</label>
            <div class="controls">
                <input type="text" name="phone" class="input-xlarge" id="input01" value="{$farmer->phone}" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">Email</label>
            <div class="controls">
                <input type="text" name="email" disabled class="input-xlarge" id="input01" value="{$farmer->email}" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="textarea">Biography</label>
            <div class="controls">
                <textarea class="input-xlarge" id="textarea" rows="4" name="biography">{$farmer->biography}</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Marital Status</label>
            <div class="controls">
                <input type="text" name="marital_status" class="input-xlarge" id="input01" value="{$farmer->marital_status}" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Date of Birth</label>
            <div class="controls">
                <input type="text" id="dp" name="date_of_birth" class="input-xlarge" id="input01"
                value="{($farmer->date_of_birth) ? $farmer->date_of_birth : '1970-01-01'}" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="textarea">Gender</label>
            <div class="controls">
            <label class="radio">
                <input type="radio" name="gender" value="Male" {if $farmer->gender == 'Male' } checked {/if} />
                Male
                </label>
                <label class="radio">
                <input type="radio" name="gender" value="Female" {if $farmer->gender == 'Female'} checked {/if}/>Female
            </label>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Public Profile</label>
            <div class="controls">
                <label class="radio">
                <input type="radio" name="is_public" value="1" {if ($farmer->is_public)}checked{/if} />
                Public
                </label>
                <label class="radio">
                <input type="radio" name="is_public" value="0" {if !($farmer->is_public)}checked{/if}/>Private
            </label>
            </div>
        </div>
        <div class="controls">
            <button type="submit" class="btn btn-success btn-small">Update Profile</button>
            <button class="btn btn-small">Cancel</button>
        </div>
    </fieldset>
    </form>
</div>