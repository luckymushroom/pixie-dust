<div class='page-header'>
    <a href="{site_url('auth/create_user')}" class="btn btn-small pull-right" title="Create Account">Create Account</a>
    <h3>Please Sign In</h3>
</div>

<!-- Login Form here -->
<form action="{base_url}auth/login/" autocomplete="off" method="post">
    {form_input($email)}
    {form_input($password)}
    <label class="checkbox">{form_checkbox('remember', '1', FALSE)}Remember Me</label>
    {form_submit('submit', 'Sign In','class="btn btn-info"')}
</form>
<a href="{site_url('auth/forgot_password')}" title="Forgotten Password?">Forgotten Password?</a>
<!-- Form ends here -->