<?php

$langfile="";
if(mlang_getcurrentlang() == "Dutch")
	$langfile="Dutch.php";
if(mlang_getcurrentlang() == "English")
	$langfile="English.php";
if(mlang_getcurrentlang() == "French")
	$langfile="French.php";
if(mlang_getcurrentlang() == "German")
	$langfile="German.php";
if(mlang_getcurrentlang() == "Italian")
	$langfile="Italian.php";
if(mlang_getcurrentlang() == "Japanese")
	$langfile="Japanese.php";
if(mlang_getcurrentlang() == "Portuguese(Brazil)")
	$langfile="Portuguese.php";
if(mlang_getcurrentlang() == "Portuguese(Standard)")
	$langfile="Portugal.php";
if(mlang_getcurrentlang() == "Russian")
	$langfile="Russian.php";
if(mlang_getcurrentlang() == "Spanish")
	$langfile="Spanish.php";

if($langfile)
	include(getabspath("include/lang/".$langfile));

function mlang_message($tag)
{
	global $mlang_messages,$mlang_defaultlang;
	return @$mlang_messages[mlang_getcurrentlang()][$tag];
}

?>