<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTableusers["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name");
$dalTableusers["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTableusers["modified_at"] = array("type"=>135,"varname"=>"modified_at", "name" => "modified_at");
$dalTableusers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTableusers["deleted_at"] = array("type"=>135,"varname"=>"deleted_at", "name" => "deleted_at");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTableusers["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date");
$dalTableusers["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTableusers["apikey"] = array("type"=>200,"varname"=>"apikey", "name" => "apikey");
	$dalTableusers["id"]["key"]=true;

$dal_info["tramitadora_at_localhost__users"] = &$dalTableusers;
?>