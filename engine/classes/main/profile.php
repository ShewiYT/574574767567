<?php

if(isset($_SESSION['Nick']))
{
	class profile extends hf 
	{
		public function get_content() 
		{ 
			global $user,$connect;
		    unset($_SESSION['inf']);    
			if (isset($_SESSION['Nick']))
			{
				session_start();
				$nick = $_SESSION['Nick'];
				
		
				$sql = "SELECT * FROM `{$user['table']}` WHERE `{$user['name']}` = '".$nick."'";
				$result = $connect->query($sql);

				if($result->num_rows == 1)
				{ 
					$data = $result->fetch_assoc();
					if($data["{$user['pass']}"] != $_SESSION['Password'])
					{
						session_destroy();
						echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'/login'>";
					}
					
				} 
				else 
				{
					session_destroy();
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'/login'>";
					
				}

				
				function FixName($name){
					$order = array("_");
					$replace = " ";
					$newstr = str_replace($order,$replace,$name);
					$pos = strpos($newstr," ",1);
					$name = substr($newstr,0,$pos);
					$subname = substr($newstr,$pos,24);
					echo "".$name." ".$subname."";
				}
				
				if($data[$user['admin']] > 0) $status = "Администратор"; else $status = "Игрок";

				switch($data[$user['job']])
				{
					case 0: $job = "Отсутствует"; break; 
					case 1: $job = "Таксист"; break;
				}

				$frac = $member[$data[$user['member']]];

				switch($data[$user['member']])
				{
					case 0: $frac = "Безработный"; break; 
					case 1: $frac = "Мэрия LS"; break;
					case 2: $frac = "LSPD"; break;
					case 3: $frac = "SFPD"; break;
					case 4: $frac = "ФБР"; break;
					case 5: $frac = "Больница LS"; break; 
					case 6: $frac = "Автошкола"; break;
					case 7: $frac = "Grove Street"; break;
					case 8: $frac = "The Ballas"; break;
					case 9: $frac = "The Rifa"; break;
					case 10: $frac = "Varios Los Aztecas"; break; 
					case 11: $frac = "Los Santos Vagos"; break;
					case 12: $frac = "Национальная гвардия"; break;
					case 13: $frac = "Национальная гвардия"; break;
					case 14: $frac = "Национальная гвардия"; break;
					case 15: $frac = "La Cosa Nostra"; break;
					case 16: $frac = "Yakuza"; break;
					case 17: $frac = "Русская мафия"; break; 
					case 18: $frac = "LS News"; break;
					case 19: $frac = "SF News"; break;
					case 20: $frac = "LV News"; break;
					case 21: $frac = "LVPD"; break;
					case 22: $frac = "Больница SF"; break;
					case 23: $frac = "Больница LV"; break;
					case 24: $frac = "Мэрия SF"; break;
					case 25: $frac = "Мэрия LV"; break;

				}
				
	    	}
			include "view/main/profile.php"; 
		}
	}
}
else echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/login'>";
?>
