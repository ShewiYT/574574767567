<?php
if(isset($_SESSION['Nick']))
{
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/profile'>";
}
else
{
	class login extends hf 
	{
		public function get_content() 
		{ 
			include "view/main/login.php"; 
		}
	}
}

?>
