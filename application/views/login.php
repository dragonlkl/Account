<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
	<?php echo form_open('login/user'); ?> 
		<label for="title">Username</label>
		<input type="text" name="username"><br>

		<label for="text">Password</label>
		<input type="password" name="password"><br>

		<input type="submit" name="submit" value="login" >

	</form>