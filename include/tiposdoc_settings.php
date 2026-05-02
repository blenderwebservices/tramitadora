<?php
$tdatatiposdoc = array();
$tdatatiposdoc[".searchableFields"] = array();
$tdatatiposdoc[".ShortName"] = "tiposdoc";
$tdatatiposdoc[".OwnerID"] = "";
$tdatatiposdoc[".OriginalTable"] = "tiposdoc";


$tdatatiposdoc[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposdoc[".originalPagesByType"] = $tdatatiposdoc[".pagesByType"];
$tdatatiposdoc[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposdoc[".originalPages"] = $tdatatiposdoc[".pages"];
$tdatatiposdoc[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposdoc[".originalDefaultPages"] = $tdatatiposdoc[".defaultPages"];

//	field labels
$fieldLabelstiposdoc = array();
$fieldToolTipstiposdoc = array();
$pageTitlestiposdoc = array();
$placeHolderstiposdoc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposdoc["Spanish"] = array();
	$fieldToolTipstiposdoc["Spanish"] = array();
	$placeHolderstiposdoc["Spanish"] = array();
	$pageTitlestiposdoc["Spanish"] = array();
	$fieldLabelstiposdoc["Spanish"]["id"] = "Id";
	$fieldToolTipstiposdoc["Spanish"]["id"] = "";
	$placeHolderstiposdoc["Spanish"]["id"] = "";
	$fieldLabelstiposdoc["Spanish"]["name"] = "Tipo de Documento";
	$fieldToolTipstiposdoc["Spanish"]["name"] = "";
	$placeHolderstiposdoc["Spanish"]["name"] = "";
	$fieldLabelstiposdoc["Spanish"]["description"] = "Descripción";
	$fieldToolTipstiposdoc["Spanish"]["description"] = "";
	$placeHolderstiposdoc["Spanish"]["description"] = "";
	$fieldLabelstiposdoc["Spanish"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Spanish"]["updated_at"] = "";
	$placeHolderstiposdoc["Spanish"]["updated_at"] = "";
	$fieldLabelstiposdoc["Spanish"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Spanish"]["deleted_at"] = "";
	$placeHolderstiposdoc["Spanish"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Spanish"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Spanish"]["created_at"] = "";
	$placeHolderstiposdoc["Spanish"]["created_at"] = "";
	$fieldLabelstiposdoc["Spanish"]["active"] = "Activo";
	$fieldToolTipstiposdoc["Spanish"]["active"] = "";
	$placeHolderstiposdoc["Spanish"]["active"] = "";
	$fieldLabelstiposdoc["Spanish"]["template"] = "Plantilla";
	$fieldToolTipstiposdoc["Spanish"]["template"] = "";
	$placeHolderstiposdoc["Spanish"]["template"] = "";
	$pageTitlestiposdoc["Spanish"]["edit"] = "Tipo de Documento, Editar: [{%name}]";
	$pageTitlestiposdoc["Spanish"]["view"] = "Tipo de documento: {%name}";
	$pageTitlestiposdoc["Spanish"]["add"] = "Tipo de Documento, Añadir nuevo";
	$pageTitlestiposdoc["Spanish"]["print"] = "Tipo de Documento";
	if (count($fieldToolTipstiposdoc["Spanish"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelstiposdoc["Dutch"] = array();
	$fieldToolTipstiposdoc["Dutch"] = array();
	$placeHolderstiposdoc["Dutch"] = array();
	$pageTitlestiposdoc["Dutch"] = array();
	$fieldLabelstiposdoc["Dutch"]["id"] = "Id";
	$fieldToolTipstiposdoc["Dutch"]["id"] = "";
	$placeHolderstiposdoc["Dutch"]["id"] = "";
	$fieldLabelstiposdoc["Dutch"]["name"] = "Name";
	$fieldToolTipstiposdoc["Dutch"]["name"] = "";
	$placeHolderstiposdoc["Dutch"]["name"] = "";
	$fieldLabelstiposdoc["Dutch"]["description"] = "Description";
	$fieldToolTipstiposdoc["Dutch"]["description"] = "";
	$placeHolderstiposdoc["Dutch"]["description"] = "";
	$fieldLabelstiposdoc["Dutch"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Dutch"]["updated_at"] = "";
	$placeHolderstiposdoc["Dutch"]["updated_at"] = "";
	$fieldLabelstiposdoc["Dutch"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Dutch"]["deleted_at"] = "";
	$placeHolderstiposdoc["Dutch"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Dutch"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Dutch"]["created_at"] = "";
	$placeHolderstiposdoc["Dutch"]["created_at"] = "";
	$fieldLabelstiposdoc["Dutch"]["active"] = "Active";
	$fieldToolTipstiposdoc["Dutch"]["active"] = "";
	$placeHolderstiposdoc["Dutch"]["active"] = "";
	$fieldLabelstiposdoc["Dutch"]["template"] = "Template";
	$fieldToolTipstiposdoc["Dutch"]["template"] = "";
	$placeHolderstiposdoc["Dutch"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Dutch"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstiposdoc["English"] = array();
	$fieldToolTipstiposdoc["English"] = array();
	$placeHolderstiposdoc["English"] = array();
	$pageTitlestiposdoc["English"] = array();
	$fieldLabelstiposdoc["English"]["id"] = "Id";
	$fieldToolTipstiposdoc["English"]["id"] = "";
	$placeHolderstiposdoc["English"]["id"] = "";
	$fieldLabelstiposdoc["English"]["name"] = "Name";
	$fieldToolTipstiposdoc["English"]["name"] = "";
	$placeHolderstiposdoc["English"]["name"] = "";
	$fieldLabelstiposdoc["English"]["description"] = "Description";
	$fieldToolTipstiposdoc["English"]["description"] = "";
	$placeHolderstiposdoc["English"]["description"] = "";
	$fieldLabelstiposdoc["English"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["English"]["updated_at"] = "";
	$placeHolderstiposdoc["English"]["updated_at"] = "";
	$fieldLabelstiposdoc["English"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["English"]["deleted_at"] = "";
	$placeHolderstiposdoc["English"]["deleted_at"] = "";
	$fieldLabelstiposdoc["English"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["English"]["created_at"] = "";
	$placeHolderstiposdoc["English"]["created_at"] = "";
	$fieldLabelstiposdoc["English"]["active"] = "Active";
	$fieldToolTipstiposdoc["English"]["active"] = "";
	$placeHolderstiposdoc["English"]["active"] = "";
	$fieldLabelstiposdoc["English"]["template"] = "Template";
	$fieldToolTipstiposdoc["English"]["template"] = "";
	$placeHolderstiposdoc["English"]["template"] = "";
	if (count($fieldToolTipstiposdoc["English"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelstiposdoc["French"] = array();
	$fieldToolTipstiposdoc["French"] = array();
	$placeHolderstiposdoc["French"] = array();
	$pageTitlestiposdoc["French"] = array();
	$fieldLabelstiposdoc["French"]["id"] = "Id";
	$fieldToolTipstiposdoc["French"]["id"] = "";
	$placeHolderstiposdoc["French"]["id"] = "";
	$fieldLabelstiposdoc["French"]["name"] = "Name";
	$fieldToolTipstiposdoc["French"]["name"] = "";
	$placeHolderstiposdoc["French"]["name"] = "";
	$fieldLabelstiposdoc["French"]["description"] = "Description";
	$fieldToolTipstiposdoc["French"]["description"] = "";
	$placeHolderstiposdoc["French"]["description"] = "";
	$fieldLabelstiposdoc["French"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["French"]["updated_at"] = "";
	$placeHolderstiposdoc["French"]["updated_at"] = "";
	$fieldLabelstiposdoc["French"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["French"]["deleted_at"] = "";
	$placeHolderstiposdoc["French"]["deleted_at"] = "";
	$fieldLabelstiposdoc["French"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["French"]["created_at"] = "";
	$placeHolderstiposdoc["French"]["created_at"] = "";
	$fieldLabelstiposdoc["French"]["active"] = "Active";
	$fieldToolTipstiposdoc["French"]["active"] = "";
	$placeHolderstiposdoc["French"]["active"] = "";
	$fieldLabelstiposdoc["French"]["template"] = "Template";
	$fieldToolTipstiposdoc["French"]["template"] = "";
	$placeHolderstiposdoc["French"]["template"] = "";
	if (count($fieldToolTipstiposdoc["French"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelstiposdoc["German"] = array();
	$fieldToolTipstiposdoc["German"] = array();
	$placeHolderstiposdoc["German"] = array();
	$pageTitlestiposdoc["German"] = array();
	$fieldLabelstiposdoc["German"]["id"] = "Id";
	$fieldToolTipstiposdoc["German"]["id"] = "";
	$placeHolderstiposdoc["German"]["id"] = "";
	$fieldLabelstiposdoc["German"]["name"] = "Name";
	$fieldToolTipstiposdoc["German"]["name"] = "";
	$placeHolderstiposdoc["German"]["name"] = "";
	$fieldLabelstiposdoc["German"]["description"] = "Description";
	$fieldToolTipstiposdoc["German"]["description"] = "";
	$placeHolderstiposdoc["German"]["description"] = "";
	$fieldLabelstiposdoc["German"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["German"]["updated_at"] = "";
	$placeHolderstiposdoc["German"]["updated_at"] = "";
	$fieldLabelstiposdoc["German"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["German"]["deleted_at"] = "";
	$placeHolderstiposdoc["German"]["deleted_at"] = "";
	$fieldLabelstiposdoc["German"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["German"]["created_at"] = "";
	$placeHolderstiposdoc["German"]["created_at"] = "";
	$fieldLabelstiposdoc["German"]["active"] = "Active";
	$fieldToolTipstiposdoc["German"]["active"] = "";
	$placeHolderstiposdoc["German"]["active"] = "";
	$fieldLabelstiposdoc["German"]["template"] = "Template";
	$fieldToolTipstiposdoc["German"]["template"] = "";
	$placeHolderstiposdoc["German"]["template"] = "";
	if (count($fieldToolTipstiposdoc["German"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelstiposdoc["Italian"] = array();
	$fieldToolTipstiposdoc["Italian"] = array();
	$placeHolderstiposdoc["Italian"] = array();
	$pageTitlestiposdoc["Italian"] = array();
	$fieldLabelstiposdoc["Italian"]["id"] = "Id";
	$fieldToolTipstiposdoc["Italian"]["id"] = "";
	$placeHolderstiposdoc["Italian"]["id"] = "";
	$fieldLabelstiposdoc["Italian"]["name"] = "Name";
	$fieldToolTipstiposdoc["Italian"]["name"] = "";
	$placeHolderstiposdoc["Italian"]["name"] = "";
	$fieldLabelstiposdoc["Italian"]["description"] = "Description";
	$fieldToolTipstiposdoc["Italian"]["description"] = "";
	$placeHolderstiposdoc["Italian"]["description"] = "";
	$fieldLabelstiposdoc["Italian"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Italian"]["updated_at"] = "";
	$placeHolderstiposdoc["Italian"]["updated_at"] = "";
	$fieldLabelstiposdoc["Italian"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Italian"]["deleted_at"] = "";
	$placeHolderstiposdoc["Italian"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Italian"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Italian"]["created_at"] = "";
	$placeHolderstiposdoc["Italian"]["created_at"] = "";
	$fieldLabelstiposdoc["Italian"]["active"] = "Active";
	$fieldToolTipstiposdoc["Italian"]["active"] = "";
	$placeHolderstiposdoc["Italian"]["active"] = "";
	$fieldLabelstiposdoc["Italian"]["template"] = "Template";
	$fieldToolTipstiposdoc["Italian"]["template"] = "";
	$placeHolderstiposdoc["Italian"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Italian"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelstiposdoc["Japanese"] = array();
	$fieldToolTipstiposdoc["Japanese"] = array();
	$placeHolderstiposdoc["Japanese"] = array();
	$pageTitlestiposdoc["Japanese"] = array();
	$fieldLabelstiposdoc["Japanese"]["id"] = "Id";
	$fieldToolTipstiposdoc["Japanese"]["id"] = "";
	$placeHolderstiposdoc["Japanese"]["id"] = "";
	$fieldLabelstiposdoc["Japanese"]["name"] = "Name";
	$fieldToolTipstiposdoc["Japanese"]["name"] = "";
	$placeHolderstiposdoc["Japanese"]["name"] = "";
	$fieldLabelstiposdoc["Japanese"]["description"] = "Description";
	$fieldToolTipstiposdoc["Japanese"]["description"] = "";
	$placeHolderstiposdoc["Japanese"]["description"] = "";
	$fieldLabelstiposdoc["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Japanese"]["updated_at"] = "";
	$placeHolderstiposdoc["Japanese"]["updated_at"] = "";
	$fieldLabelstiposdoc["Japanese"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Japanese"]["deleted_at"] = "";
	$placeHolderstiposdoc["Japanese"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Japanese"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Japanese"]["created_at"] = "";
	$placeHolderstiposdoc["Japanese"]["created_at"] = "";
	$fieldLabelstiposdoc["Japanese"]["active"] = "Active";
	$fieldToolTipstiposdoc["Japanese"]["active"] = "";
	$placeHolderstiposdoc["Japanese"]["active"] = "";
	$fieldLabelstiposdoc["Japanese"]["template"] = "Template";
	$fieldToolTipstiposdoc["Japanese"]["template"] = "";
	$placeHolderstiposdoc["Japanese"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Japanese"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstiposdoc["Portuguese(Brazil)"] = array();
	$fieldToolTipstiposdoc["Portuguese(Brazil)"] = array();
	$placeHolderstiposdoc["Portuguese(Brazil)"] = array();
	$pageTitlestiposdoc["Portuguese(Brazil)"] = array();
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["id"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["name"] = "Name";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["name"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["name"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["description"] = "Description";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["description"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["description"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["updated_at"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["updated_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["deleted_at"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["created_at"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["created_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["active"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelstiposdoc["Portuguese(Brazil)"]["template"] = "Template";
	$fieldToolTipstiposdoc["Portuguese(Brazil)"]["template"] = "";
	$placeHolderstiposdoc["Portuguese(Brazil)"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Portuguese(Brazil)"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelstiposdoc["Portuguese(Standard)"] = array();
	$fieldToolTipstiposdoc["Portuguese(Standard)"] = array();
	$placeHolderstiposdoc["Portuguese(Standard)"] = array();
	$pageTitlestiposdoc["Portuguese(Standard)"] = array();
	$fieldLabelstiposdoc["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["id"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["id"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["name"] = "Name";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["name"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["name"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["description"] = "Description";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["description"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["description"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["updated_at"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["updated_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["deleted_at"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["created_at"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["created_at"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["active"] = "Active";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["active"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["active"] = "";
	$fieldLabelstiposdoc["Portuguese(Standard)"]["template"] = "Template";
	$fieldToolTipstiposdoc["Portuguese(Standard)"]["template"] = "";
	$placeHolderstiposdoc["Portuguese(Standard)"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Portuguese(Standard)"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelstiposdoc["Russian"] = array();
	$fieldToolTipstiposdoc["Russian"] = array();
	$placeHolderstiposdoc["Russian"] = array();
	$pageTitlestiposdoc["Russian"] = array();
	$fieldLabelstiposdoc["Russian"]["id"] = "Id";
	$fieldToolTipstiposdoc["Russian"]["id"] = "";
	$placeHolderstiposdoc["Russian"]["id"] = "";
	$fieldLabelstiposdoc["Russian"]["name"] = "Name";
	$fieldToolTipstiposdoc["Russian"]["name"] = "";
	$placeHolderstiposdoc["Russian"]["name"] = "";
	$fieldLabelstiposdoc["Russian"]["description"] = "Description";
	$fieldToolTipstiposdoc["Russian"]["description"] = "";
	$placeHolderstiposdoc["Russian"]["description"] = "";
	$fieldLabelstiposdoc["Russian"]["updated_at"] = "Updated At";
	$fieldToolTipstiposdoc["Russian"]["updated_at"] = "";
	$placeHolderstiposdoc["Russian"]["updated_at"] = "";
	$fieldLabelstiposdoc["Russian"]["deleted_at"] = "Deleted At";
	$fieldToolTipstiposdoc["Russian"]["deleted_at"] = "";
	$placeHolderstiposdoc["Russian"]["deleted_at"] = "";
	$fieldLabelstiposdoc["Russian"]["created_at"] = "Created At";
	$fieldToolTipstiposdoc["Russian"]["created_at"] = "";
	$placeHolderstiposdoc["Russian"]["created_at"] = "";
	$fieldLabelstiposdoc["Russian"]["active"] = "Active";
	$fieldToolTipstiposdoc["Russian"]["active"] = "";
	$placeHolderstiposdoc["Russian"]["active"] = "";
	$fieldLabelstiposdoc["Russian"]["template"] = "Template";
	$fieldToolTipstiposdoc["Russian"]["template"] = "";
	$placeHolderstiposdoc["Russian"]["template"] = "";
	if (count($fieldToolTipstiposdoc["Russian"]))
		$tdatatiposdoc[".isUseToolTips"] = true;
}


	$tdatatiposdoc[".NCSearch"] = true;



$tdatatiposdoc[".shortTableName"] = "tiposdoc";
$tdatatiposdoc[".nSecOptions"] = 0;

$tdatatiposdoc[".mainTableOwnerID"] = "";
$tdatatiposdoc[".entityType"] = 0;
$tdatatiposdoc[".connId"] = "tramitadora_at_localhost";


$tdatatiposdoc[".strOriginalTableName"] = "tiposdoc";

		 



$tdatatiposdoc[".showAddInPopup"] = false;

$tdatatiposdoc[".showEditInPopup"] = false;

$tdatatiposdoc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatiposdoc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatiposdoc[".listAjax"] = false;
//	temporary
$tdatatiposdoc[".listAjax"] = false;

	$tdatatiposdoc[".audit"] = false;

	$tdatatiposdoc[".locking"] = false;


$pages = $tdatatiposdoc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposdoc[".edit"] = true;
	$tdatatiposdoc[".afterEditAction"] = 1;
	$tdatatiposdoc[".closePopupAfterEdit"] = 1;
	$tdatatiposdoc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposdoc[".add"] = true;
$tdatatiposdoc[".afterAddAction"] = 1;
$tdatatiposdoc[".closePopupAfterAdd"] = 1;
$tdatatiposdoc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposdoc[".list"] = true;
}



$tdatatiposdoc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposdoc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposdoc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposdoc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposdoc[".printFriendly"] = true;
}



$tdatatiposdoc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposdoc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposdoc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposdoc[".isUseAjaxSuggest"] = false;

$tdatatiposdoc[".rowHighlite"] = true;





$tdatatiposdoc[".ajaxCodeSnippetAdded"] = false;

$tdatatiposdoc[".buttonsAdded"] = false;

$tdatatiposdoc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposdoc[".isUseTimeForSearch"] = false;


$tdatatiposdoc[".badgeColor"] = "4682B4";


$tdatatiposdoc[".allSearchFields"] = array();
$tdatatiposdoc[".filterFields"] = array();
$tdatatiposdoc[".requiredSearchFields"] = array();




$tdatatiposdoc[".tableType"] = "list";

$tdatatiposdoc[".printerPageOrientation"] = 0;
$tdatatiposdoc[".nPrinterPageScale"] = 100;

$tdatatiposdoc[".nPrinterSplitRecords"] = 40;

$tdatatiposdoc[".geocodingEnabled"] = false;










$tdatatiposdoc[".pageSize"] = 20;

$tdatatiposdoc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatiposdoc[".strOrderBy"] = $tstrOrderBy;

$tdatatiposdoc[".orderindexes"] = array();


$tdatatiposdoc[".sqlHead"] = "SELECT id,  	name,  	description,  	updated_at,  	deleted_at,  	created_at,  	active,  	template";
$tdatatiposdoc[".sqlFrom"] = "FROM tiposdoc";
$tdatatiposdoc[".sqlWhereExpr"] = "";
$tdatatiposdoc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposdoc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposdoc[".arrGroupsPerPage"] = $arrGPP;


$tableKeystiposdoc = array();
$tableKeystiposdoc[] = "id";
$tdatatiposdoc[".Keys"] = $tableKeystiposdoc;


$tdatatiposdoc[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","id");
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


	$tdatatiposdoc["id"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatatiposdoc["name"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatiposdoc["description"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "description";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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


	$tdatatiposdoc["updated_at"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "updated_at";
//	deleted_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "deleted_at";
	$fdata["GoodName"] = "deleted_at";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","deleted_at");
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


	$tdatatiposdoc["deleted_at"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "deleted_at";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","created_at");
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


	$tdatatiposdoc["created_at"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "created_at";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","active");
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


	$tdatatiposdoc["active"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "active";
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "tiposdoc";
	$fdata["Label"] = GetFieldLabel("tiposdoc","template");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "template";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 800;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatiposdoc["template"] = $fdata;
		$tdatatiposdoc[".searchableFields"][] = "template";


$tables_data["tiposdoc"]=&$tdatatiposdoc;
$field_labels["tiposdoc"] = &$fieldLabelstiposdoc;
$fieldToolTips["tiposdoc"] = &$fieldToolTipstiposdoc;
$placeHolders["tiposdoc"] = &$placeHolderstiposdoc;
$page_titles["tiposdoc"] = &$pageTitlestiposdoc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tiposdoc"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tiposdoc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposdoc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	description,  	updated_at,  	deleted_at,  	created_at,  	active,  	template";
$proto0["m_strFrom"] = "FROM tiposdoc";
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
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tiposdoc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "tiposdoc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto10["m_sql"] = "description";
$proto10["m_srcTableName"] = "tiposdoc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto12["m_sql"] = "updated_at";
$proto12["m_srcTableName"] = "tiposdoc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_at",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto14["m_sql"] = "deleted_at";
$proto14["m_srcTableName"] = "tiposdoc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto16["m_sql"] = "created_at";
$proto16["m_srcTableName"] = "tiposdoc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "tiposdoc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "tiposdoc",
	"m_srcTableName" => "tiposdoc"
));

$proto20["m_sql"] = "template";
$proto20["m_srcTableName"] = "tiposdoc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "tiposdoc";
$proto23["m_srcTableName"] = "tiposdoc";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name";
$proto23["m_columns"][] = "description";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "deleted_at";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "template";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "tiposdoc";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tiposdoc";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tiposdoc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposdoc = createSqlQuery_tiposdoc();


	
					
;

								

$tdatatiposdoc[".sqlquery"] = $queryData_tiposdoc;



$tableEvents["tiposdoc"] = new eventsBase;
$tdatatiposdoc[".hasEvents"] = false;

?>