<div class='mainInfo'>

	<h1>Edit User</h1>
	<p>Please enter the users information below.</p>

	<div id="infoMessage">{$message}</div>

    {form_open("admin/edit_user/{$seg_three}")}
      <p>First Name:<br />
      {form_input($firstName)}
      </p>

      <p>Last Name:<br />
      {form_input($lastName)}
      </p>

      <p>Company Name:<br />
      {form_input($company)}
      </p>

      <p>Email:<br />
      {form_input($email)}
      </p>

      <p>Phone:<br />
      {form_input($phone)}}
      </p>

      <p>
      	<input type=checkbox name="reset_password"> <label for="reset_password">Reset Password</label>
      </p>

      {form_input($user_id)}
      <p>{form_submit('submit', 'Submit')}</p>


    {form_close()}

</div>
