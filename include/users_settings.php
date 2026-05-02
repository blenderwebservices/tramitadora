<?php
$tdatausers = array();
$tdatausers[".searchableFields"] = array();
$tdatausers[".ShortName"] = "users";
$tdatausers[".OwnerID"] = "id";
$tdatausers[".OriginalTable"] = "users";


$tdatausers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausers[".originalPagesByType"] = $tdatausers[".pagesByType"];
$tdatausers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausers[".originalPages"] = $tdatausers[".pages"];
$tdatausers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausers[".originalDefaultPages"] = $tdatausers[".defaultPages"];

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();
$placeHoldersusers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusers["Spanish"] = array();
	$fieldToolTipsusers["Spanish"] = array();
	$placeHoldersusers["Spanish"] = array();
	$pageTitlesusers["Spanish"] = array();
	$fieldLabelsusers["Spanish"]["id"] = "Id";
	$fieldToolTipsusers["Spanish"]["id"] = "";
	$placeHoldersusers["Spanish"]["id"] = "ID";
	$fieldLabelsusers["Spanish"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Spanish"]["last_name"] = "";
	$placeHoldersusers["Spanish"]["last_name"] = "Apellido";
	$fieldLabelsusers["Spanish"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Spanish"]["modified_at"] = "";
	$placeHoldersusers["Spanish"]["modified_at"] = "";
	$fieldLabelsusers["Spanish"]["created_at"] = "Created At";
	$fieldToolTipsusers["Spanish"]["created_at"] = "";
	$placeHoldersusers["Spanish"]["created_at"] = "";
	$fieldLabelsusers["Spanish"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Spanish"]["deleted_at"] = "";
	$placeHoldersusers["Spanish"]["deleted_at"] = "";
	$fieldLabelsusers["Spanish"]["password"] = "Password";
	$fieldToolTipsusers["Spanish"]["password"] = "";
	$placeHoldersusers["Spanish"]["password"] = "Contraseña";
	$fieldLabelsusers["Spanish"]["email"] = "Email";
	$fieldToolTipsusers["Spanish"]["email"] = "";
	$placeHoldersusers["Spanish"]["email"] = "";
	$fieldLabelsusers["Spanish"]["fullname"] = "Nombre Completo";
	$fieldToolTipsusers["Spanish"]["fullname"] = "";
	$placeHoldersusers["Spanish"]["fullname"] = "";
	$fieldLabelsusers["Spanish"]["groupid"] = "Grupo";
	$fieldToolTipsusers["Spanish"]["groupid"] = "";
	$placeHoldersusers["Spanish"]["groupid"] = "Grupo de Usuarios";
	$fieldLabelsusers["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Spanish"]["reset_token"] = "";
	$placeHoldersusers["Spanish"]["reset_token"] = "";
	$fieldLabelsusers["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Spanish"]["reset_date"] = "";
	$placeHoldersusers["Spanish"]["reset_date"] = "";
	$fieldLabelsusers["Spanish"]["active"] = "Activo";
	$fieldToolTipsusers["Spanish"]["active"] = "";
	$placeHoldersusers["Spanish"]["active"] = "";
	$fieldLabelsusers["Spanish"]["username"] = "Usuario";
	$fieldToolTipsusers["Spanish"]["username"] = "";
	$placeHoldersusers["Spanish"]["username"] = "Usuario";
	if (count($fieldToolTipsusers["Spanish"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsusers["Dutch"] = array();
	$fieldToolTipsusers["Dutch"] = array();
	$placeHoldersusers["Dutch"] = array();
	$pageTitlesusers["Dutch"] = array();
	$fieldLabelsusers["Dutch"]["id"] = "Id";
	$fieldToolTipsusers["Dutch"]["id"] = "";
	$placeHoldersusers["Dutch"]["id"] = "";
	$fieldLabelsusers["Dutch"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Dutch"]["last_name"] = "";
	$placeHoldersusers["Dutch"]["last_name"] = "";
	$fieldLabelsusers["Dutch"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Dutch"]["modified_at"] = "";
	$placeHoldersusers["Dutch"]["modified_at"] = "";
	$fieldLabelsusers["Dutch"]["created_at"] = "Created At";
	$fieldToolTipsusers["Dutch"]["created_at"] = "";
	$placeHoldersusers["Dutch"]["created_at"] = "";
	$fieldLabelsusers["Dutch"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Dutch"]["deleted_at"] = "";
	$placeHoldersusers["Dutch"]["deleted_at"] = "";
	$fieldLabelsusers["Dutch"]["password"] = "Password";
	$fieldToolTipsusers["Dutch"]["password"] = "";
	$placeHoldersusers["Dutch"]["password"] = "";
	$fieldLabelsusers["Dutch"]["email"] = "Email";
	$fieldToolTipsusers["Dutch"]["email"] = "";
	$placeHoldersusers["Dutch"]["email"] = "";
	$fieldLabelsusers["Dutch"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Dutch"]["fullname"] = "";
	$placeHoldersusers["Dutch"]["fullname"] = "";
	$fieldLabelsusers["Dutch"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Dutch"]["groupid"] = "";
	$placeHoldersusers["Dutch"]["groupid"] = "";
	$fieldLabelsusers["Dutch"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Dutch"]["reset_token"] = "";
	$placeHoldersusers["Dutch"]["reset_token"] = "";
	$fieldLabelsusers["Dutch"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Dutch"]["reset_date"] = "";
	$placeHoldersusers["Dutch"]["reset_date"] = "";
	$fieldLabelsusers["Dutch"]["active"] = "Active";
	$fieldToolTipsusers["Dutch"]["active"] = "";
	$placeHoldersusers["Dutch"]["active"] = "";
	$fieldLabelsusers["Dutch"]["username"] = "Username";
	$fieldToolTipsusers["Dutch"]["username"] = "";
	$placeHoldersusers["Dutch"]["username"] = "";
	if (count($fieldToolTipsusers["Dutch"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$placeHoldersusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["id"] = "Id";
	$fieldToolTipsusers["English"]["id"] = "";
	$placeHoldersusers["English"]["id"] = "";
	$fieldLabelsusers["English"]["last_name"] = "Last Name";
	$fieldToolTipsusers["English"]["last_name"] = "";
	$placeHoldersusers["English"]["last_name"] = "";
	$fieldLabelsusers["English"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["English"]["modified_at"] = "";
	$placeHoldersusers["English"]["modified_at"] = "";
	$fieldLabelsusers["English"]["created_at"] = "Created At";
	$fieldToolTipsusers["English"]["created_at"] = "";
	$placeHoldersusers["English"]["created_at"] = "";
	$fieldLabelsusers["English"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["English"]["deleted_at"] = "";
	$placeHoldersusers["English"]["deleted_at"] = "";
	$fieldLabelsusers["English"]["password"] = "Password";
	$fieldToolTipsusers["English"]["password"] = "";
	$placeHoldersusers["English"]["password"] = "";
	$fieldLabelsusers["English"]["email"] = "Email";
	$fieldToolTipsusers["English"]["email"] = "";
	$placeHoldersusers["English"]["email"] = "";
	$fieldLabelsusers["English"]["fullname"] = "Fullname";
	$fieldToolTipsusers["English"]["fullname"] = "";
	$placeHoldersusers["English"]["fullname"] = "";
	$fieldLabelsusers["English"]["groupid"] = "Groupid";
	$fieldToolTipsusers["English"]["groupid"] = "";
	$placeHoldersusers["English"]["groupid"] = "";
	$fieldLabelsusers["English"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["English"]["reset_token"] = "";
	$placeHoldersusers["English"]["reset_token"] = "";
	$fieldLabelsusers["English"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["English"]["reset_date"] = "";
	$placeHoldersusers["English"]["reset_date"] = "";
	$fieldLabelsusers["English"]["active"] = "Active";
	$fieldToolTipsusers["English"]["active"] = "";
	$placeHoldersusers["English"]["active"] = "";
	$fieldLabelsusers["English"]["username"] = "Username";
	$fieldToolTipsusers["English"]["username"] = "";
	$placeHoldersusers["English"]["username"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsusers["French"] = array();
	$fieldToolTipsusers["French"] = array();
	$placeHoldersusers["French"] = array();
	$pageTitlesusers["French"] = array();
	$fieldLabelsusers["French"]["id"] = "Id";
	$fieldToolTipsusers["French"]["id"] = "";
	$placeHoldersusers["French"]["id"] = "";
	$fieldLabelsusers["French"]["last_name"] = "Last Name";
	$fieldToolTipsusers["French"]["last_name"] = "";
	$placeHoldersusers["French"]["last_name"] = "";
	$fieldLabelsusers["French"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["French"]["modified_at"] = "";
	$placeHoldersusers["French"]["modified_at"] = "";
	$fieldLabelsusers["French"]["created_at"] = "Created At";
	$fieldToolTipsusers["French"]["created_at"] = "";
	$placeHoldersusers["French"]["created_at"] = "";
	$fieldLabelsusers["French"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["French"]["deleted_at"] = "";
	$placeHoldersusers["French"]["deleted_at"] = "";
	$fieldLabelsusers["French"]["password"] = "Password";
	$fieldToolTipsusers["French"]["password"] = "";
	$placeHoldersusers["French"]["password"] = "";
	$fieldLabelsusers["French"]["email"] = "Email";
	$fieldToolTipsusers["French"]["email"] = "";
	$placeHoldersusers["French"]["email"] = "";
	$fieldLabelsusers["French"]["fullname"] = "Fullname";
	$fieldToolTipsusers["French"]["fullname"] = "";
	$placeHoldersusers["French"]["fullname"] = "";
	$fieldLabelsusers["French"]["groupid"] = "Groupid";
	$fieldToolTipsusers["French"]["groupid"] = "";
	$placeHoldersusers["French"]["groupid"] = "";
	$fieldLabelsusers["French"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["French"]["reset_token"] = "";
	$placeHoldersusers["French"]["reset_token"] = "";
	$fieldLabelsusers["French"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["French"]["reset_date"] = "";
	$placeHoldersusers["French"]["reset_date"] = "";
	$fieldLabelsusers["French"]["active"] = "Active";
	$fieldToolTipsusers["French"]["active"] = "";
	$placeHoldersusers["French"]["active"] = "";
	$fieldLabelsusers["French"]["username"] = "Username";
	$fieldToolTipsusers["French"]["username"] = "";
	$placeHoldersusers["French"]["username"] = "";
	if (count($fieldToolTipsusers["French"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsusers["German"] = array();
	$fieldToolTipsusers["German"] = array();
	$placeHoldersusers["German"] = array();
	$pageTitlesusers["German"] = array();
	$fieldLabelsusers["German"]["id"] = "Id";
	$fieldToolTipsusers["German"]["id"] = "";
	$placeHoldersusers["German"]["id"] = "";
	$fieldLabelsusers["German"]["last_name"] = "Last Name";
	$fieldToolTipsusers["German"]["last_name"] = "";
	$placeHoldersusers["German"]["last_name"] = "";
	$fieldLabelsusers["German"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["German"]["modified_at"] = "";
	$placeHoldersusers["German"]["modified_at"] = "";
	$fieldLabelsusers["German"]["created_at"] = "Created At";
	$fieldToolTipsusers["German"]["created_at"] = "";
	$placeHoldersusers["German"]["created_at"] = "";
	$fieldLabelsusers["German"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["German"]["deleted_at"] = "";
	$placeHoldersusers["German"]["deleted_at"] = "";
	$fieldLabelsusers["German"]["password"] = "Password";
	$fieldToolTipsusers["German"]["password"] = "";
	$placeHoldersusers["German"]["password"] = "";
	$fieldLabelsusers["German"]["email"] = "Email";
	$fieldToolTipsusers["German"]["email"] = "";
	$placeHoldersusers["German"]["email"] = "";
	$fieldLabelsusers["German"]["fullname"] = "Fullname";
	$fieldToolTipsusers["German"]["fullname"] = "";
	$placeHoldersusers["German"]["fullname"] = "";
	$fieldLabelsusers["German"]["groupid"] = "Groupid";
	$fieldToolTipsusers["German"]["groupid"] = "";
	$placeHoldersusers["German"]["groupid"] = "";
	$fieldLabelsusers["German"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["German"]["reset_token"] = "";
	$placeHoldersusers["German"]["reset_token"] = "";
	$fieldLabelsusers["German"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["German"]["reset_date"] = "";
	$placeHoldersusers["German"]["reset_date"] = "";
	$fieldLabelsusers["German"]["active"] = "Active";
	$fieldToolTipsusers["German"]["active"] = "";
	$placeHoldersusers["German"]["active"] = "";
	$fieldLabelsusers["German"]["username"] = "Username";
	$fieldToolTipsusers["German"]["username"] = "";
	$placeHoldersusers["German"]["username"] = "";
	if (count($fieldToolTipsusers["German"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsusers["Italian"] = array();
	$fieldToolTipsusers["Italian"] = array();
	$placeHoldersusers["Italian"] = array();
	$pageTitlesusers["Italian"] = array();
	$fieldLabelsusers["Italian"]["id"] = "Id";
	$fieldToolTipsusers["Italian"]["id"] = "";
	$placeHoldersusers["Italian"]["id"] = "";
	$fieldLabelsusers["Italian"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Italian"]["last_name"] = "";
	$placeHoldersusers["Italian"]["last_name"] = "";
	$fieldLabelsusers["Italian"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Italian"]["modified_at"] = "";
	$placeHoldersusers["Italian"]["modified_at"] = "";
	$fieldLabelsusers["Italian"]["created_at"] = "Created At";
	$fieldToolTipsusers["Italian"]["created_at"] = "";
	$placeHoldersusers["Italian"]["created_at"] = "";
	$fieldLabelsusers["Italian"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Italian"]["deleted_at"] = "";
	$placeHoldersusers["Italian"]["deleted_at"] = "";
	$fieldLabelsusers["Italian"]["password"] = "Password";
	$fieldToolTipsusers["Italian"]["password"] = "";
	$placeHoldersusers["Italian"]["password"] = "";
	$fieldLabelsusers["Italian"]["email"] = "Email";
	$fieldToolTipsusers["Italian"]["email"] = "";
	$placeHoldersusers["Italian"]["email"] = "";
	$fieldLabelsusers["Italian"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Italian"]["fullname"] = "";
	$placeHoldersusers["Italian"]["fullname"] = "";
	$fieldLabelsusers["Italian"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Italian"]["groupid"] = "";
	$placeHoldersusers["Italian"]["groupid"] = "";
	$fieldLabelsusers["Italian"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Italian"]["reset_token"] = "";
	$placeHoldersusers["Italian"]["reset_token"] = "";
	$fieldLabelsusers["Italian"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Italian"]["reset_date"] = "";
	$placeHoldersusers["Italian"]["reset_date"] = "";
	$fieldLabelsusers["Italian"]["active"] = "Active";
	$fieldToolTipsusers["Italian"]["active"] = "";
	$placeHoldersusers["Italian"]["active"] = "";
	$fieldLabelsusers["Italian"]["username"] = "Username";
	$fieldToolTipsusers["Italian"]["username"] = "";
	$placeHoldersusers["Italian"]["username"] = "";
	if (count($fieldToolTipsusers["Italian"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsusers["Japanese"] = array();
	$fieldToolTipsusers["Japanese"] = array();
	$placeHoldersusers["Japanese"] = array();
	$pageTitlesusers["Japanese"] = array();
	$fieldLabelsusers["Japanese"]["id"] = "Id";
	$fieldToolTipsusers["Japanese"]["id"] = "";
	$placeHoldersusers["Japanese"]["id"] = "";
	$fieldLabelsusers["Japanese"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Japanese"]["last_name"] = "";
	$placeHoldersusers["Japanese"]["last_name"] = "";
	$fieldLabelsusers["Japanese"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Japanese"]["modified_at"] = "";
	$placeHoldersusers["Japanese"]["modified_at"] = "";
	$fieldLabelsusers["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsusers["Japanese"]["created_at"] = "";
	$placeHoldersusers["Japanese"]["created_at"] = "";
	$fieldLabelsusers["Japanese"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Japanese"]["deleted_at"] = "";
	$placeHoldersusers["Japanese"]["deleted_at"] = "";
	$fieldLabelsusers["Japanese"]["password"] = "Password";
	$fieldToolTipsusers["Japanese"]["password"] = "";
	$placeHoldersusers["Japanese"]["password"] = "";
	$fieldLabelsusers["Japanese"]["email"] = "Email";
	$fieldToolTipsusers["Japanese"]["email"] = "";
	$placeHoldersusers["Japanese"]["email"] = "";
	$fieldLabelsusers["Japanese"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Japanese"]["fullname"] = "";
	$placeHoldersusers["Japanese"]["fullname"] = "";
	$fieldLabelsusers["Japanese"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Japanese"]["groupid"] = "";
	$placeHoldersusers["Japanese"]["groupid"] = "";
	$fieldLabelsusers["Japanese"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Japanese"]["reset_token"] = "";
	$placeHoldersusers["Japanese"]["reset_token"] = "";
	$fieldLabelsusers["Japanese"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Japanese"]["reset_date"] = "";
	$placeHoldersusers["Japanese"]["reset_date"] = "";
	$fieldLabelsusers["Japanese"]["active"] = "Active";
	$fieldToolTipsusers["Japanese"]["active"] = "";
	$placeHoldersusers["Japanese"]["active"] = "";
	$fieldLabelsusers["Japanese"]["username"] = "Username";
	$fieldToolTipsusers["Japanese"]["username"] = "";
	$placeHoldersusers["Japanese"]["username"] = "";
	if (count($fieldToolTipsusers["Japanese"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsusers["Portuguese(Brazil)"] = array();
	$fieldToolTipsusers["Portuguese(Brazil)"] = array();
	$placeHoldersusers["Portuguese(Brazil)"] = array();
	$pageTitlesusers["Portuguese(Brazil)"] = array();
	$fieldLabelsusers["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsusers["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Portuguese(Brazil)"]["last_name"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["last_name"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Portuguese(Brazil)"]["modified_at"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["modified_at"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["created_at"] = "Created At";
	$fieldToolTipsusers["Portuguese(Brazil)"]["created_at"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["created_at"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Portuguese(Brazil)"]["deleted_at"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["deleted_at"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsusers["Portuguese(Brazil)"]["password"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsusers["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Portuguese(Brazil)"]["groupid"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Portuguese(Brazil)"]["reset_token"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["reset_token"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Portuguese(Brazil)"]["reset_date"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["reset_date"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsusers["Portuguese(Brazil)"]["active"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelsusers["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsusers["Portuguese(Brazil)"]["username"] = "";
	$placeHoldersusers["Portuguese(Brazil)"]["username"] = "";
	if (count($fieldToolTipsusers["Portuguese(Brazil)"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelsusers["Portuguese(Standard)"] = array();
	$fieldToolTipsusers["Portuguese(Standard)"] = array();
	$placeHoldersusers["Portuguese(Standard)"] = array();
	$pageTitlesusers["Portuguese(Standard)"] = array();
	$fieldLabelsusers["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipsusers["Portuguese(Standard)"]["id"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["id"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Portuguese(Standard)"]["last_name"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["last_name"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Portuguese(Standard)"]["modified_at"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["modified_at"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["created_at"] = "Created At";
	$fieldToolTipsusers["Portuguese(Standard)"]["created_at"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["created_at"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Portuguese(Standard)"]["deleted_at"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["deleted_at"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["password"] = "Password";
	$fieldToolTipsusers["Portuguese(Standard)"]["password"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["password"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["email"] = "Email";
	$fieldToolTipsusers["Portuguese(Standard)"]["email"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["email"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Portuguese(Standard)"]["fullname"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["fullname"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Portuguese(Standard)"]["groupid"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["groupid"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Portuguese(Standard)"]["reset_token"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["reset_token"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Portuguese(Standard)"]["reset_date"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["reset_date"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["active"] = "Active";
	$fieldToolTipsusers["Portuguese(Standard)"]["active"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["active"] = "";
	$fieldLabelsusers["Portuguese(Standard)"]["username"] = "Username";
	$fieldToolTipsusers["Portuguese(Standard)"]["username"] = "";
	$placeHoldersusers["Portuguese(Standard)"]["username"] = "";
	if (count($fieldToolTipsusers["Portuguese(Standard)"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsusers["Russian"] = array();
	$fieldToolTipsusers["Russian"] = array();
	$placeHoldersusers["Russian"] = array();
	$pageTitlesusers["Russian"] = array();
	$fieldLabelsusers["Russian"]["id"] = "Id";
	$fieldToolTipsusers["Russian"]["id"] = "";
	$placeHoldersusers["Russian"]["id"] = "";
	$fieldLabelsusers["Russian"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Russian"]["last_name"] = "";
	$placeHoldersusers["Russian"]["last_name"] = "";
	$fieldLabelsusers["Russian"]["modified_at"] = "Modified At";
	$fieldToolTipsusers["Russian"]["modified_at"] = "";
	$placeHoldersusers["Russian"]["modified_at"] = "";
	$fieldLabelsusers["Russian"]["created_at"] = "Created At";
	$fieldToolTipsusers["Russian"]["created_at"] = "";
	$placeHoldersusers["Russian"]["created_at"] = "";
	$fieldLabelsusers["Russian"]["deleted_at"] = "Deleted At";
	$fieldToolTipsusers["Russian"]["deleted_at"] = "";
	$placeHoldersusers["Russian"]["deleted_at"] = "";
	$fieldLabelsusers["Russian"]["password"] = "Password";
	$fieldToolTipsusers["Russian"]["password"] = "";
	$placeHoldersusers["Russian"]["password"] = "";
	$fieldLabelsusers["Russian"]["email"] = "Email";
	$fieldToolTipsusers["Russian"]["email"] = "";
	$placeHoldersusers["Russian"]["email"] = "";
	$fieldLabelsusers["Russian"]["fullname"] = "Fullname";
	$fieldToolTipsusers["Russian"]["fullname"] = "";
	$placeHoldersusers["Russian"]["fullname"] = "";
	$fieldLabelsusers["Russian"]["groupid"] = "Groupid";
	$fieldToolTipsusers["Russian"]["groupid"] = "";
	$placeHoldersusers["Russian"]["groupid"] = "";
	$fieldLabelsusers["Russian"]["reset_token"] = "Reset Token";
	$fieldToolTipsusers["Russian"]["reset_token"] = "";
	$placeHoldersusers["Russian"]["reset_token"] = "";
	$fieldLabelsusers["Russian"]["reset_date"] = "Reset Date";
	$fieldToolTipsusers["Russian"]["reset_date"] = "";
	$placeHoldersusers["Russian"]["reset_date"] = "";
	$fieldLabelsusers["Russian"]["active"] = "Active";
	$fieldToolTipsusers["Russian"]["active"] = "";
	$placeHoldersusers["Russian"]["active"] = "";
	$fieldLabelsusers["Russian"]["username"] = "Username";
	$fieldToolTipsusers["Russian"]["username"] = "";
	$placeHoldersusers["Russian"]["username"] = "";
	if (count($fieldToolTipsusers["Russian"]))
		$tdatausers[".isUseToolTips"] = true;
}


	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 1;

$tdatausers[".mainTableOwnerID"] = "id";
$tdatausers[".entityType"] = 0;
$tdatausers[".connId"] = "tramitadora_at_localhost";


$tdatausers[".strOriginalTableName"] = "users";

		 



$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".listAjax"] = false;
//	temporary
$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = true;

	$tdatausers[".locking"] = false;


$pages = $tdatausers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausers[".edit"] = true;
	$tdatausers[".afterEditAction"] = 1;
	$tdatausers[".closePopupAfterEdit"] = 1;
	$tdatausers[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatausers[".add"] = true;
$tdatausers[".afterAddAction"] = 1;
$tdatausers[".closePopupAfterAdd"] = 1;
$tdatausers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausers[".list"] = true;
}



$tdatausers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausers[".printFriendly"] = true;
}



$tdatausers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;





$tdatausers[".ajaxCodeSnippetAdded"] = false;

$tdatausers[".buttonsAdded"] = false;

$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;


$tdatausers[".badgeColor"] = "6B8E23";


$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "id";
$tdatausers[".googleLikeFields"][] = "fullname";
$tdatausers[".googleLikeFields"][] = "groupid";
$tdatausers[".googleLikeFields"][] = "username";
$tdatausers[".googleLikeFields"][] = "email";
$tdatausers[".googleLikeFields"][] = "active";



$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".geocodingEnabled"] = false;




$tdatausers[".isDisplayLoading"] = true;






$tdatausers[".pageSize"] = 10;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();


$tdatausers[".sqlHead"] = "SELECT id,  	fullname,  	last_name,  	groupid,  	modified_at,  	created_at,  	deleted_at,  	password,  	username,  	email,  	reset_token,  	reset_date,  	active";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatausers[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "id";
$tdatausers[".Keys"] = $tableKeysusers;


$tdatausers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["id"] = $fdata;
		$tdatausers[".searchableFields"][] = "id";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["fullname"] = $fdata;
		$tdatausers[".searchableFields"][] = "fullname";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","last_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["last_name"] = $fdata;
		$tdatausers[".searchableFields"][] = "last_name";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "supervisor";
	$edata["LookupValues"][] = "captura";
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "editor";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["groupid"] = $fdata;
		$tdatausers[".searchableFields"][] = "groupid";
//	modified_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "modified_at";
	$fdata["GoodName"] = "modified_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","modified_at");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "modified_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modified_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["modified_at"] = $fdata;
		$tdatausers[".searchableFields"][] = "modified_at";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","created_at");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["created_at"] = $fdata;
		$tdatausers[".searchableFields"][] = "created_at";
//	deleted_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "deleted_at";
	$fdata["GoodName"] = "deleted_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","deleted_at");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "deleted_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["deleted_at"] = $fdata;
		$tdatausers[".searchableFields"][] = "deleted_at";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","password");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["password"] = $fdata;
		$tdatausers[".searchableFields"][] = "password";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","username");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

		$edata["insertNull"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["username"] = $fdata;
		$tdatausers[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["email"] = $fdata;
		$tdatausers[".searchableFields"][] = "email";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","reset_token");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["reset_token"] = $fdata;
		$tdatausers[".searchableFields"][] = "reset_token";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","reset_date");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["reset_date"] = $fdata;
		$tdatausers[".searchableFields"][] = "reset_date";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","active");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
					//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers["active"] = $fdata;
		$tdatausers[".searchableFields"][] = "active";


$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$placeHolders["users"] = &$placeHoldersusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fullname,  	last_name,  	groupid,  	modified_at,  	created_at,  	deleted_at,  	password,  	username,  	email,  	reset_token,  	reset_date,  	active";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto8["m_sql"] = "fullname";
$proto8["m_srcTableName"] = "users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto10["m_sql"] = "last_name";
$proto10["m_srcTableName"] = "users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto12["m_sql"] = "groupid";
$proto12["m_srcTableName"] = "users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_at",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto14["m_sql"] = "modified_at";
$proto14["m_srcTableName"] = "users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_at",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto18["m_sql"] = "deleted_at";
$proto18["m_srcTableName"] = "users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto20["m_sql"] = "password";
$proto20["m_srcTableName"] = "users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto22["m_sql"] = "username";
$proto22["m_srcTableName"] = "users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto24["m_sql"] = "email";
$proto24["m_srcTableName"] = "users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto26["m_sql"] = "reset_token";
$proto26["m_srcTableName"] = "users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto28["m_sql"] = "reset_date";
$proto28["m_srcTableName"] = "users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto30["m_sql"] = "active";
$proto30["m_srcTableName"] = "users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "users";
$proto33["m_srcTableName"] = "users";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "fullname";
$proto33["m_columns"][] = "last_name";
$proto33["m_columns"][] = "groupid";
$proto33["m_columns"][] = "modified_at";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "deleted_at";
$proto33["m_columns"][] = "password";
$proto33["m_columns"][] = "username";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "reset_token";
$proto33["m_columns"][] = "reset_date";
$proto33["m_columns"][] = "active";
$proto33["m_columns"][] = "apikey";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "users";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "users";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
					
;

													

$tdatausers[".sqlquery"] = $queryData_users;



include_once(getabspath("include/users_events.php"));
$tableEvents["users"] = new eventclass_users;
$tdatausers[".hasEvents"] = true;

?>