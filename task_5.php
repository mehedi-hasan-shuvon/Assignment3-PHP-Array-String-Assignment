<?php

	function generatePassword($length=12){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
		$password = substr(str_shuffle($chars), 0, $length);
		return $password;
	}

	$generatedPassword = generatePassword(12);

	echo $generatedPassword;


?>