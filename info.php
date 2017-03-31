<?php
print_r('测试自动提交');
	$conn=mysql_connect('127.0.0.1','root','root');
if ($conn){
  echo "LNMP platform connect to mysql is successful!";
}else{
  echo "LNMP platform connect to mysql is failed!";
}
 phpinfo();
?>
