<?php
session_start();
require_once ("../config/database.php");

global $connect;
global $user;
if(!empty($_POST['login'])){
		$password = $connect->real_escape_string($_POST['password']);
		$name = $connect->real_escape_string($_POST['nick']);
		if(!empty($password) && !empty($name))
		{
			$sql = "SELECT * FROM `{$user['table']}` WHERE `{$user['name']}` = '$name' LIMIT 1";
			$result = $connect->query($sql);
				
				if($result->num_rows)
				{
					$data = $result->fetch_assoc();
					if($data["{$user['pass']}"] == md5($password))
					{
						session_start();
						$_SESSION['Nick'] = $name;
						$_SESSION['Password'] = $password;
						echo "success";
					}	
					else 
					{
						echo "notfound";
					}
				
				} 
				else 
				{
					echo "notfound";
				}
		}
		else 
		{
			echo "pole";
		}
}
if(!empty($_POST['cnews'])){
	
	$title = $connect->real_escape_string($_POST['title']);
	$url = $connect->real_escape_string($_POST['url']);
	$vk = $connect->real_escape_string($_POST['vk']);

	$sql = "INSERT INTO `news` (`Title`, `Url`, `Vk`) VALUES ('$title', '$url', '$vk')";
	$result = $connect->query($sql);
	echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Вы успешно создали новость<br> сейчас перенаправим на главную страницу</p>
								</div><META HTTP-EQUIV="REFRESH" CONTENT="1;/">';
					

		
}
if(!empty($_POST['changepass'])){
		$pass = $connect->real_escape_string($_POST['oldpass']);
		$newpass = $connect->real_escape_string($_POST['newpass']);
		$name = $_SESSION['Nick'];

		if(!empty($pass) && !empty($newpass))
		{

			$sql = "SELECT `{$user['pass']}` FROM `{$user['table']}` WHERE `{$user['name']}` = '$name' LIMIT 1";
			$result = $connect->query($sql);
			if($result->num_rows)
			{
				$data = $result->fetch_assoc();
				if($data[$user['pass']] == $pass)
				{
					if(strlen($newpass) > 6 && strlen($newpass) < 32)//Допустимая длина пароля
					{
						if (preg_match("#^[aA-zZ0-9\-_]+$#",$newpass)) //Проверка на запрещеные символы
						{   
						    
	
								$sql = "UPDATE `{$user['table']}` SET `{$user['pass']}` = '$newpass' WHERE `{$user['name']}` = '{$name}'";
								$result = $connect->query($sql);
								echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Вы успешно изменили пароль<br> Перезайдите с новым паролем</p>
								
								
							</div><META HTTP-EQUIV="REFRESH" CONTENT="2;/profile/exit">';

							
						} 
						else 
						{
						   echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Недопустимые символы в новом пароле<br> Попробуйте заного изменив пароль</p>
								
								
							</div>';
						}
						
					}
					else echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Неверная длина нового пароля<br> Длинная должна быть больше 6 и меньше 32</p>
								
								
							</div>';
				}
				else echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Старый пароль введен неверно<br> Попробуйте еще раз!</p>
								
								
							</div>';	
				
			}
			else { echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Ошибка!<br> Перезайдите в личный кабинет</p>
								
								
							</div>';}
		}
		else {
			echo '<div class="in-messenger-vk">
								<span class="ic-warn"></span>
								<p class="text-pt">Заполните все поля!<br> А потом попробуйте снова</p>
								
								
							</div>';}
}		
