<?php echo $this->getContent(); ?>

<?php if ($ur1 == $ur2) { ?>
	<form method="POST" action="http://localhost/rms/forgotpassword/update">
	<input type="hidden" name="email" value="<?php echo $email; ?>">
	<input type="hidden" name="reset" value="<?php echo $ur1; ?>">
	<input type="password" name="newpass" placeholder="Enter new pass">
	<input type="password" name="cpass" placeholder="Confirm new pass">
	<input type="submit" value="submit">
	</form>
<?php } else { ?>
	Wrong email. Please reset again.
<?php } ?>
