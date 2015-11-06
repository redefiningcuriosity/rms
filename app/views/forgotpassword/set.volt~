{{ content() }}

{% if ur1 == ur2 %}
	<form method="POST" action="http://localhost/rms/forgotpassword/update">
	<input type="hidden" name="email" value="{{ email }}">
	<input type="hidden" name="reset" value="{{ ur1 }}">
	<input type="password" name="newpass" placeholder="Enter new pass">
	<input type="password" name="cpass" placeholder="Confirm new pass">
	<input type="submit" value="submit">
	</form>
{% else %}
	Wrong email. Please reset again.
{% endif %}
