<?php

if(isset($_SESSION['Nick']))
{
	class admin extends hf 
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
				if($data[$user['admin']] == 0) echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'/profile'>";
				
				function FixName($name){
					$order = array("_");
					$replace = " ";
					$newstr = str_replace($order,$replace,$name);
					$pos = strpos($newstr," ",1);
					$name = substr($newstr,0,$pos);
					$subname = substr($newstr,$pos,24);
					echo "".$name." ".$subname."";
				}
				
				
				
	    	}
			include "view/main/admin.php"; 
		}
	}
}
else echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/login'>";
?>
