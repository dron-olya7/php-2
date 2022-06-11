<!-- 2. Спросите у пользователя email с помощью формы. 
Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, 
email) при ее открытии поле email было автоматически заполнено. -->

<form action="" method="POST">
	<input type="email" name="email">
	<input type="button" value="Далее"  onClick='location.href="http://homeworks/homework2/index2.1.php";' />
</form>

<?php
	if (!empty($_REQUEST['email'])) {
		session_start(); 
		$_SESSION['email'] = $_REQUEST['email'];
	}
?>

