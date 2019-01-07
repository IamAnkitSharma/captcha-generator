<?php 
	function generate($captchalength){
	$rand='';
	$i=1;
	$str='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*(){}[]/';
	$len=strlen($str);
	while($i<=$captchalength)//your length of captcha//
	{
	$rand.=$str[rand(0,$len-1)];
	$i++;
	}
	return $rand;
}
$captcha=generate(6);
echo $captcha;
?>
