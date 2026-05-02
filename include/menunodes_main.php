<?php

function getMenuNodes_main($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["main"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "registro";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-list-alt";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = GetTableCaption("registro");



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "USUARIOS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "users";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "CustomID";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-users";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = GetCustomLabel("USUARIOS");



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Tipo de Documento";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tiposdoc";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-leaf";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tipo de Documento";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
}
?>
