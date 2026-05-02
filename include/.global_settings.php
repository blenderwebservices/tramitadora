<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"changepwd\":[\"changepwd\"],\"changepwd_success\":[\"changepwd_success\"],\"login\":[\"login\"],\"menu\":[\"menu\"],\"register\":[\"register\"],\"register_success\":[\"register_success\"],\"remind\":[\"remind\"],\"remind_success\":[\"remind_success\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"changepwd\":[\"changepwd\"],\"changepwd_success\":[\"changepwd_success\"],\"login\":[\"login\"],\"menu\":[\"menu\"],\"register\":[\"register\"],\"register_success\":[\"register_success\"],\"remind\":[\"remind\"],\"remind_success\":[\"remind_success\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"changepwd\":\"changepwd\",\"changepwd_success\":\"changepwd_success\",\"login\":\"login\",\"menu\":\"menu\",\"register\":\"register\",\"register_success\":\"register_success\",\"remind\":\"remind\",\"remind_success\":\"remind_success\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>