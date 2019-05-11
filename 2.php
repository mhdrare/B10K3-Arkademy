<?php 

function validasiUsername($username)
{
	// username jika benar
	if (preg_match("/^[a-z\\.]+$/", $username) && strlen($username) == 8 ) {
		return true ;
	} 
	// username jika salah
	else {
		return false;
	}
}

echo var_dump(validasiUsername('zeronull'));

function validasiEmail($email)
{
	if (preg_match("/^[A-Za-z0-9\\.]{4,}+@[a-z]+\.[a-z]+$/", $email) && strlen($email) >= 4 ) {
		return true;
	} else {
		return false;
	}
}

echo var_dump(validasiEmail('aku@kamu.com'));
echo var_dump(validasiEmail('kamu@aku.com'));

 ?>