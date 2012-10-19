<div class='mainInfo'>

	<div class="pageTitle">Deactivate User</div>
    <div class="pageTitleBorder"></div>
	<p>Are you sure you want to deactivate the user '{$user->username}'</p>

    {form_open("auth/deactivate/{$user->id}")}

      <p>
      	<label for="confirm">Yes:</label>
		<input type="radio" name="confirm" value="yes" checked="checked" />
      	<label for="confirm">No:</label>
		<input type="radio" name="confirm" value="no" />
      </p>

      {form_hidden($csrf)}
      {form_hidden(array('id'=>$user->id))}

      <p>{form_submit('submit', 'Submit')}</p>

    {form_close()}

</div>
