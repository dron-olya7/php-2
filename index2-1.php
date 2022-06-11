<?php
	session_start(); 
	
	if(!empty($_SESSION['email']))
		$email = $_SESSION['email'];
	else
		$email = '';
?>

<form action="" method="POST">
	<input type="text" name="name" value="Введите имя">
	<input type="text" name="surname" value="Введите фамилию">
    <input type="password" name="password" value="Пароль">

	<input type="text" name="email" value="<?php echo $email ?>">

	<input type="submit">
</form>