<?php 
	function generate(){
	$rand='';
	$i=1;
	$str='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*(){}[]/';
	$len=strlen($str);
	while($i<=5)//your length of captcha//
	{
	$rand.=$str[rand(0,$len-1)];
	$i++;
	}
	return $rand;
}
$captcha=generate();
echo $captcha;
?>
