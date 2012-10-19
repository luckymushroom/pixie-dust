<legend>Forgot Password ?</legend>
{form_open("auth/forgot_password")}
<p>Email Address:<br /> {form_input($email)}</p>
<p>
    {form_submit('submit', 'Reset Password','class="btn btn-warning"')}
    <a href='{site_url("auth/login")}' class='btn' title='Sign In'>Sign In</a>
</p>
{form_close()}
