<div class="page-header">
      <h2>Change Password</h2>
</div>
{form_open("auth/change_password")}

      <p>Old Password:<br />
      {form_input($old_password)}
      </p>

      <p>New Password:<br />
      {form_input($new_password)}
      </p>

      <p>Confirm New Password:<br />
      {form_input($new_password_confirm)}
      </p>

      {form_input($user_id)}
      <p><input type="submit" name="submit" value="Change" class='btn btn-warning'></p>
{form_close()}