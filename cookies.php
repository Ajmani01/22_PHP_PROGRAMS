<?php
$cookie_name="user";
$cookie_value="google";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
echo"cookie";
if(isset($_cookies[$_cooies_name]))
{
	echo"cookies is created";
}
else{
 echo$-cookies[$_cookies_name];
}
?>