<?php
$dalTable_audit = array();
$dalTable_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTable_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime");
$dalTable_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip");
$dalTable_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user");
$dalTable_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table");
$dalTable_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action");
$dalTable_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description");
	$dalTable_audit["id"]["key"]=true;

$dal_info["tramitadora_at_localhost___audit"] = &$dalTable_audit;
?>