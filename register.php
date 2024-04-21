<?php session_start();

if (isset($_SESSION['user'])) {
	header('Location: content.php');
	die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$user_form = filter_var(htmlspecialchars($_POST['user']), FILTER_SANITIZE_STRING);
	$password_form = filter_var(htmlspecialchars($_POST['password']), FILTER_SANITIZE_STRING);
	$password2_form = filter_var(htmlspecialchars($_POST['password2']), FILTER_SANITIZE_STRING);
	$errors = '';

	if (empty($user_form) or empty($password_form) or empty($password2_form)) {
		$errors = '<li>Por favor, complete todos los campos</li>';
	} else {

		include 'db/functions.php';
		$database = new Database();
		$connection = $database->connection();

		$statement = $connection->prepare('SELECT * FROM users WHERE user = :user LIMIT 1');
		$statement->execute(array(
			':user' => $user_form));	
		$result = $statement->fetch();
	
		if ($result != false) {
			$errors .= '<li>El usuario ya existe</li>';
		}

		$password_form = hash('sha512', $password_form);
		$password2_form = hash('sha512', $password2_form);

		if ($password_form != $password2_form) {
			$errors .= '<li>Las contraseñas no coinciden</li>';
		}
	}

	if ($errors == '') {
		$statement = $connection->prepare('INSERT INTO users (id_user, user, password) VALUES (null, :user, :password)');
		$statement->execute(array(
					':user' => $user_form,
				':password' => $password_form
			));
		header('Location: login.php');
	}

}

require 'views/register.view.php';
?>