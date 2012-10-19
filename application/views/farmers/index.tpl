<div class="page-header">
<h2>{$title}</h2>
</div>
<div class="row-fluid">
{if $farmers}
<ul class="thumbnails">
{foreach $farmers as $farmer}
    <li class="span3">
      <div class="thumbnail">
      <img src='{site_url("media/avatars/{$farmer->avatar}")}' alt="">
      <div class="caption">
		  <h4>{$farmer->username}</h4>
      	<div class='btn-group'>
          <a href='{site_url("users/{$farmer->id}/posts")}' class="btn"> <i class='icon-inbox' title='posts'></i></a>
          <a href='{site_url("farm/details/{$farmer->id}")}' class="btn"> <i class='icon-tasks' title='farm details'></i></a>
          <a href='{site_url("settings/profile/{$farmer->id}")}' class="btn"> <i class='icon-user' title='profile'></i></a>
      		{if ($farmer->aggregator)}
      		<a href='{site_url("farmers/delete/{$farmer->id}")}' class="delete btn btn-primary"> <i class='icon-remove icon-white'></i></a>
      		{else}
      		<a href='{site_url("farmers/create/{$farmer->id}")}' class="btn btn-primary"><i class='icon-plus icon-white'></i></a>
      		{/if}
      	</div>
      </div><!-- / Caption -->
      </div><!-- / Thumbnail-->
    </li>
{/foreach}
</ul>
{else}
<legend align="center">
  Welcome, To add a new farmer tell them to text to 3555 <br> "FirstName LastName Location {$aggregator}"
</legend>
{/if}
</div>