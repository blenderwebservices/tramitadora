<?php
$tdataregistro = array();
$tdataregistro[".searchableFields"] = array();
$tdataregistro[".ShortName"] = "registro";
$tdataregistro[".OwnerID"] = "";
$tdataregistro[".OriginalTable"] = "registro";


$tdataregistro[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataregistro[".originalPagesByType"] = $tdataregistro[".pagesByType"];
$tdataregistro[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataregistro[".originalPages"] = $tdataregistro[".pages"];
$tdataregistro[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataregistro[".originalDefaultPages"] = $tdataregistro[".defaultPages"];

//	field labels
$fieldLabelsregistro = array();
$fieldToolTipsregistro = array();
$pageTitlesregistro = array();
$placeHoldersregistro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsregistro["Spanish"] = array();
	$fieldToolTipsregistro["Spanish"] = array();
	$placeHoldersregistro["Spanish"] = array();
	$pageTitlesregistro["Spanish"] = array();
	$fieldLabelsregistro["Spanish"]["id"] = "Id";
	$fieldToolTipsregistro["Spanish"]["id"] = "";
	$placeHoldersregistro["Spanish"]["id"] = "";
	$fieldLabelsregistro["Spanish"]["folio"] = "Folio";
	$fieldToolTipsregistro["Spanish"]["folio"] = "";
	$placeHoldersregistro["Spanish"]["folio"] = "Folio";
	$fieldLabelsregistro["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Spanish"]["fecha"] = "";
	$placeHoldersregistro["Spanish"]["fecha"] = "Fecha y Hora";
	$fieldLabelsregistro["Spanish"]["diasemana"] = "Dia de la Semana";
	$fieldToolTipsregistro["Spanish"]["diasemana"] = "";
	$placeHoldersregistro["Spanish"]["diasemana"] = "Dia de la semana";
	$fieldLabelsregistro["Spanish"]["texto"] = "Formato";
	$fieldToolTipsregistro["Spanish"]["texto"] = "";
	$placeHoldersregistro["Spanish"]["texto"] = "Area de Información";
	$fieldLabelsregistro["Spanish"]["importe"] = "Importe";
	$fieldToolTipsregistro["Spanish"]["importe"] = "";
	$placeHoldersregistro["Spanish"]["importe"] = "Importe total";
	$fieldLabelsregistro["Spanish"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Spanish"]["deleted_at"] = "";
	$placeHoldersregistro["Spanish"]["deleted_at"] = "";
	$fieldLabelsregistro["Spanish"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Spanish"]["created_at"] = "";
	$placeHoldersregistro["Spanish"]["created_at"] = "";
	$fieldLabelsregistro["Spanish"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Spanish"]["updated_at"] = "";
	$placeHoldersregistro["Spanish"]["updated_at"] = "";
	$fieldLabelsregistro["Spanish"]["tipo_de_documento"] = "Tipo de Documento";
	$fieldToolTipsregistro["Spanish"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Spanish"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Spanish"]["images_fs"] = "Imagenes";
	$fieldToolTipsregistro["Spanish"]["images_fs"] = "";
	$placeHoldersregistro["Spanish"]["images_fs"] = "";
	$fieldLabelsregistro["Spanish"]["documents_fs"] = "Documentos";
	$fieldToolTipsregistro["Spanish"]["documents_fs"] = "";
	$placeHoldersregistro["Spanish"]["documents_fs"] = "";
	$pageTitlesregistro["Spanish"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	$pageTitlesregistro["Spanish"]["add"] = "Añadir nuevo registro";
	$pageTitlesregistro["Spanish"]["view"] = "{%folio} - {%fecha}";
	$pageTitlesregistro["Spanish"]["print"] = "{%folio} - {%fecha}";
	if (count($fieldToolTipsregistro["Spanish"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Dutch")
{
	$fieldLabelsregistro["Dutch"] = array();
	$fieldToolTipsregistro["Dutch"] = array();
	$placeHoldersregistro["Dutch"] = array();
	$pageTitlesregistro["Dutch"] = array();
	$fieldLabelsregistro["Dutch"]["id"] = "Id";
	$fieldToolTipsregistro["Dutch"]["id"] = "";
	$placeHoldersregistro["Dutch"]["id"] = "";
	$fieldLabelsregistro["Dutch"]["folio"] = "Folio";
	$fieldToolTipsregistro["Dutch"]["folio"] = "";
	$placeHoldersregistro["Dutch"]["folio"] = "";
	$fieldLabelsregistro["Dutch"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Dutch"]["fecha"] = "";
	$placeHoldersregistro["Dutch"]["fecha"] = "";
	$fieldLabelsregistro["Dutch"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Dutch"]["diasemana"] = "";
	$placeHoldersregistro["Dutch"]["diasemana"] = "";
	$fieldLabelsregistro["Dutch"]["texto"] = "Texto";
	$fieldToolTipsregistro["Dutch"]["texto"] = "";
	$placeHoldersregistro["Dutch"]["texto"] = "";
	$fieldLabelsregistro["Dutch"]["importe"] = "Importe";
	$fieldToolTipsregistro["Dutch"]["importe"] = "";
	$placeHoldersregistro["Dutch"]["importe"] = "";
	$fieldLabelsregistro["Dutch"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Dutch"]["deleted_at"] = "";
	$placeHoldersregistro["Dutch"]["deleted_at"] = "";
	$fieldLabelsregistro["Dutch"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Dutch"]["created_at"] = "";
	$placeHoldersregistro["Dutch"]["created_at"] = "";
	$fieldLabelsregistro["Dutch"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Dutch"]["updated_at"] = "";
	$placeHoldersregistro["Dutch"]["updated_at"] = "";
	$fieldLabelsregistro["Dutch"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Dutch"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Dutch"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Dutch"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Dutch"]["images_fs"] = "";
	$placeHoldersregistro["Dutch"]["images_fs"] = "";
	$fieldLabelsregistro["Dutch"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Dutch"]["documents_fs"] = "";
	$placeHoldersregistro["Dutch"]["documents_fs"] = "";
	$pageTitlesregistro["Dutch"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Dutch"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsregistro["English"] = array();
	$fieldToolTipsregistro["English"] = array();
	$placeHoldersregistro["English"] = array();
	$pageTitlesregistro["English"] = array();
	$fieldLabelsregistro["English"]["id"] = "Id";
	$fieldToolTipsregistro["English"]["id"] = "";
	$placeHoldersregistro["English"]["id"] = "";
	$fieldLabelsregistro["English"]["folio"] = "Folio";
	$fieldToolTipsregistro["English"]["folio"] = "";
	$placeHoldersregistro["English"]["folio"] = "";
	$fieldLabelsregistro["English"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["English"]["fecha"] = "";
	$placeHoldersregistro["English"]["fecha"] = "";
	$fieldLabelsregistro["English"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["English"]["diasemana"] = "";
	$placeHoldersregistro["English"]["diasemana"] = "";
	$fieldLabelsregistro["English"]["texto"] = "Texto";
	$fieldToolTipsregistro["English"]["texto"] = "";
	$placeHoldersregistro["English"]["texto"] = "";
	$fieldLabelsregistro["English"]["importe"] = "Importe";
	$fieldToolTipsregistro["English"]["importe"] = "";
	$placeHoldersregistro["English"]["importe"] = "";
	$fieldLabelsregistro["English"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["English"]["deleted_at"] = "";
	$placeHoldersregistro["English"]["deleted_at"] = "";
	$fieldLabelsregistro["English"]["created_at"] = "Created At";
	$fieldToolTipsregistro["English"]["created_at"] = "";
	$placeHoldersregistro["English"]["created_at"] = "";
	$fieldLabelsregistro["English"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["English"]["updated_at"] = "";
	$placeHoldersregistro["English"]["updated_at"] = "";
	$fieldLabelsregistro["English"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["English"]["tipo_de_documento"] = "";
	$placeHoldersregistro["English"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["English"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["English"]["images_fs"] = "";
	$placeHoldersregistro["English"]["images_fs"] = "";
	$fieldLabelsregistro["English"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["English"]["documents_fs"] = "";
	$placeHoldersregistro["English"]["documents_fs"] = "";
	$pageTitlesregistro["English"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["English"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsregistro["French"] = array();
	$fieldToolTipsregistro["French"] = array();
	$placeHoldersregistro["French"] = array();
	$pageTitlesregistro["French"] = array();
	$fieldLabelsregistro["French"]["id"] = "Id";
	$fieldToolTipsregistro["French"]["id"] = "";
	$placeHoldersregistro["French"]["id"] = "";
	$fieldLabelsregistro["French"]["folio"] = "Folio";
	$fieldToolTipsregistro["French"]["folio"] = "";
	$placeHoldersregistro["French"]["folio"] = "";
	$fieldLabelsregistro["French"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["French"]["fecha"] = "";
	$placeHoldersregistro["French"]["fecha"] = "";
	$fieldLabelsregistro["French"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["French"]["diasemana"] = "";
	$placeHoldersregistro["French"]["diasemana"] = "";
	$fieldLabelsregistro["French"]["texto"] = "Texto";
	$fieldToolTipsregistro["French"]["texto"] = "";
	$placeHoldersregistro["French"]["texto"] = "";
	$fieldLabelsregistro["French"]["importe"] = "Importe";
	$fieldToolTipsregistro["French"]["importe"] = "";
	$placeHoldersregistro["French"]["importe"] = "";
	$fieldLabelsregistro["French"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["French"]["deleted_at"] = "";
	$placeHoldersregistro["French"]["deleted_at"] = "";
	$fieldLabelsregistro["French"]["created_at"] = "Created At";
	$fieldToolTipsregistro["French"]["created_at"] = "";
	$placeHoldersregistro["French"]["created_at"] = "";
	$fieldLabelsregistro["French"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["French"]["updated_at"] = "";
	$placeHoldersregistro["French"]["updated_at"] = "";
	$fieldLabelsregistro["French"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["French"]["tipo_de_documento"] = "";
	$placeHoldersregistro["French"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["French"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["French"]["images_fs"] = "";
	$placeHoldersregistro["French"]["images_fs"] = "";
	$fieldLabelsregistro["French"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["French"]["documents_fs"] = "";
	$placeHoldersregistro["French"]["documents_fs"] = "";
	$pageTitlesregistro["French"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["French"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="German")
{
	$fieldLabelsregistro["German"] = array();
	$fieldToolTipsregistro["German"] = array();
	$placeHoldersregistro["German"] = array();
	$pageTitlesregistro["German"] = array();
	$fieldLabelsregistro["German"]["id"] = "Id";
	$fieldToolTipsregistro["German"]["id"] = "";
	$placeHoldersregistro["German"]["id"] = "";
	$fieldLabelsregistro["German"]["folio"] = "Folio";
	$fieldToolTipsregistro["German"]["folio"] = "";
	$placeHoldersregistro["German"]["folio"] = "";
	$fieldLabelsregistro["German"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["German"]["fecha"] = "";
	$placeHoldersregistro["German"]["fecha"] = "";
	$fieldLabelsregistro["German"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["German"]["diasemana"] = "";
	$placeHoldersregistro["German"]["diasemana"] = "";
	$fieldLabelsregistro["German"]["texto"] = "Texto";
	$fieldToolTipsregistro["German"]["texto"] = "";
	$placeHoldersregistro["German"]["texto"] = "";
	$fieldLabelsregistro["German"]["importe"] = "Importe";
	$fieldToolTipsregistro["German"]["importe"] = "";
	$placeHoldersregistro["German"]["importe"] = "";
	$fieldLabelsregistro["German"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["German"]["deleted_at"] = "";
	$placeHoldersregistro["German"]["deleted_at"] = "";
	$fieldLabelsregistro["German"]["created_at"] = "Created At";
	$fieldToolTipsregistro["German"]["created_at"] = "";
	$placeHoldersregistro["German"]["created_at"] = "";
	$fieldLabelsregistro["German"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["German"]["updated_at"] = "";
	$placeHoldersregistro["German"]["updated_at"] = "";
	$fieldLabelsregistro["German"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["German"]["tipo_de_documento"] = "";
	$placeHoldersregistro["German"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["German"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["German"]["images_fs"] = "";
	$placeHoldersregistro["German"]["images_fs"] = "";
	$fieldLabelsregistro["German"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["German"]["documents_fs"] = "";
	$placeHoldersregistro["German"]["documents_fs"] = "";
	$pageTitlesregistro["German"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["German"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Italian")
{
	$fieldLabelsregistro["Italian"] = array();
	$fieldToolTipsregistro["Italian"] = array();
	$placeHoldersregistro["Italian"] = array();
	$pageTitlesregistro["Italian"] = array();
	$fieldLabelsregistro["Italian"]["id"] = "Id";
	$fieldToolTipsregistro["Italian"]["id"] = "";
	$placeHoldersregistro["Italian"]["id"] = "";
	$fieldLabelsregistro["Italian"]["folio"] = "Folio";
	$fieldToolTipsregistro["Italian"]["folio"] = "";
	$placeHoldersregistro["Italian"]["folio"] = "";
	$fieldLabelsregistro["Italian"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Italian"]["fecha"] = "";
	$placeHoldersregistro["Italian"]["fecha"] = "";
	$fieldLabelsregistro["Italian"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Italian"]["diasemana"] = "";
	$placeHoldersregistro["Italian"]["diasemana"] = "";
	$fieldLabelsregistro["Italian"]["texto"] = "Texto";
	$fieldToolTipsregistro["Italian"]["texto"] = "";
	$placeHoldersregistro["Italian"]["texto"] = "";
	$fieldLabelsregistro["Italian"]["importe"] = "Importe";
	$fieldToolTipsregistro["Italian"]["importe"] = "";
	$placeHoldersregistro["Italian"]["importe"] = "";
	$fieldLabelsregistro["Italian"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Italian"]["deleted_at"] = "";
	$placeHoldersregistro["Italian"]["deleted_at"] = "";
	$fieldLabelsregistro["Italian"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Italian"]["created_at"] = "";
	$placeHoldersregistro["Italian"]["created_at"] = "";
	$fieldLabelsregistro["Italian"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Italian"]["updated_at"] = "";
	$placeHoldersregistro["Italian"]["updated_at"] = "";
	$fieldLabelsregistro["Italian"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Italian"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Italian"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Italian"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Italian"]["images_fs"] = "";
	$placeHoldersregistro["Italian"]["images_fs"] = "";
	$fieldLabelsregistro["Italian"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Italian"]["documents_fs"] = "";
	$placeHoldersregistro["Italian"]["documents_fs"] = "";
	$pageTitlesregistro["Italian"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Italian"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsregistro["Japanese"] = array();
	$fieldToolTipsregistro["Japanese"] = array();
	$placeHoldersregistro["Japanese"] = array();
	$pageTitlesregistro["Japanese"] = array();
	$fieldLabelsregistro["Japanese"]["id"] = "Id";
	$fieldToolTipsregistro["Japanese"]["id"] = "";
	$placeHoldersregistro["Japanese"]["id"] = "";
	$fieldLabelsregistro["Japanese"]["folio"] = "Folio";
	$fieldToolTipsregistro["Japanese"]["folio"] = "";
	$placeHoldersregistro["Japanese"]["folio"] = "";
	$fieldLabelsregistro["Japanese"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Japanese"]["fecha"] = "";
	$placeHoldersregistro["Japanese"]["fecha"] = "";
	$fieldLabelsregistro["Japanese"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Japanese"]["diasemana"] = "";
	$placeHoldersregistro["Japanese"]["diasemana"] = "";
	$fieldLabelsregistro["Japanese"]["texto"] = "Texto";
	$fieldToolTipsregistro["Japanese"]["texto"] = "";
	$placeHoldersregistro["Japanese"]["texto"] = "";
	$fieldLabelsregistro["Japanese"]["importe"] = "Importe";
	$fieldToolTipsregistro["Japanese"]["importe"] = "";
	$placeHoldersregistro["Japanese"]["importe"] = "";
	$fieldLabelsregistro["Japanese"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Japanese"]["deleted_at"] = "";
	$placeHoldersregistro["Japanese"]["deleted_at"] = "";
	$fieldLabelsregistro["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Japanese"]["created_at"] = "";
	$placeHoldersregistro["Japanese"]["created_at"] = "";
	$fieldLabelsregistro["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Japanese"]["updated_at"] = "";
	$placeHoldersregistro["Japanese"]["updated_at"] = "";
	$fieldLabelsregistro["Japanese"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Japanese"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Japanese"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Japanese"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Japanese"]["images_fs"] = "";
	$placeHoldersregistro["Japanese"]["images_fs"] = "";
	$fieldLabelsregistro["Japanese"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Japanese"]["documents_fs"] = "";
	$placeHoldersregistro["Japanese"]["documents_fs"] = "";
	$pageTitlesregistro["Japanese"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Japanese"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsregistro["Portuguese(Brazil)"] = array();
	$fieldToolTipsregistro["Portuguese(Brazil)"] = array();
	$placeHoldersregistro["Portuguese(Brazil)"] = array();
	$pageTitlesregistro["Portuguese(Brazil)"] = array();
	$fieldLabelsregistro["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["folio"] = "Folio";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["folio"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["folio"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["fecha"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["fecha"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["diasemana"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["diasemana"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["texto"] = "Texto";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["texto"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["texto"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["importe"] = "Importe";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["importe"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["importe"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["deleted_at"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["deleted_at"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["created_at"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["created_at"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["updated_at"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["updated_at"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["images_fs"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["images_fs"] = "";
	$fieldLabelsregistro["Portuguese(Brazil)"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Portuguese(Brazil)"]["documents_fs"] = "";
	$placeHoldersregistro["Portuguese(Brazil)"]["documents_fs"] = "";
	$pageTitlesregistro["Portuguese(Brazil)"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Portuguese(Brazil)"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelsregistro["Portuguese(Standard)"] = array();
	$fieldToolTipsregistro["Portuguese(Standard)"] = array();
	$placeHoldersregistro["Portuguese(Standard)"] = array();
	$pageTitlesregistro["Portuguese(Standard)"] = array();
	$fieldLabelsregistro["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipsregistro["Portuguese(Standard)"]["id"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["id"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["folio"] = "Folio";
	$fieldToolTipsregistro["Portuguese(Standard)"]["folio"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["folio"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Portuguese(Standard)"]["fecha"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["fecha"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Portuguese(Standard)"]["diasemana"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["diasemana"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["texto"] = "Texto";
	$fieldToolTipsregistro["Portuguese(Standard)"]["texto"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["texto"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["importe"] = "Importe";
	$fieldToolTipsregistro["Portuguese(Standard)"]["importe"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["importe"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Portuguese(Standard)"]["deleted_at"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["deleted_at"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Portuguese(Standard)"]["created_at"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["created_at"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Portuguese(Standard)"]["updated_at"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["updated_at"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Portuguese(Standard)"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Portuguese(Standard)"]["images_fs"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["images_fs"] = "";
	$fieldLabelsregistro["Portuguese(Standard)"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Portuguese(Standard)"]["documents_fs"] = "";
	$placeHoldersregistro["Portuguese(Standard)"]["documents_fs"] = "";
	$pageTitlesregistro["Portuguese(Standard)"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Portuguese(Standard)"]))
		$tdataregistro[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Russian")
{
	$fieldLabelsregistro["Russian"] = array();
	$fieldToolTipsregistro["Russian"] = array();
	$placeHoldersregistro["Russian"] = array();
	$pageTitlesregistro["Russian"] = array();
	$fieldLabelsregistro["Russian"]["id"] = "Id";
	$fieldToolTipsregistro["Russian"]["id"] = "";
	$placeHoldersregistro["Russian"]["id"] = "";
	$fieldLabelsregistro["Russian"]["folio"] = "Folio";
	$fieldToolTipsregistro["Russian"]["folio"] = "";
	$placeHoldersregistro["Russian"]["folio"] = "";
	$fieldLabelsregistro["Russian"]["fecha"] = "Fecha";
	$fieldToolTipsregistro["Russian"]["fecha"] = "";
	$placeHoldersregistro["Russian"]["fecha"] = "";
	$fieldLabelsregistro["Russian"]["diasemana"] = "Diasemana";
	$fieldToolTipsregistro["Russian"]["diasemana"] = "";
	$placeHoldersregistro["Russian"]["diasemana"] = "";
	$fieldLabelsregistro["Russian"]["texto"] = "Texto";
	$fieldToolTipsregistro["Russian"]["texto"] = "";
	$placeHoldersregistro["Russian"]["texto"] = "";
	$fieldLabelsregistro["Russian"]["importe"] = "Importe";
	$fieldToolTipsregistro["Russian"]["importe"] = "";
	$placeHoldersregistro["Russian"]["importe"] = "";
	$fieldLabelsregistro["Russian"]["deleted_at"] = "Deleted At";
	$fieldToolTipsregistro["Russian"]["deleted_at"] = "";
	$placeHoldersregistro["Russian"]["deleted_at"] = "";
	$fieldLabelsregistro["Russian"]["created_at"] = "Created At";
	$fieldToolTipsregistro["Russian"]["created_at"] = "";
	$placeHoldersregistro["Russian"]["created_at"] = "";
	$fieldLabelsregistro["Russian"]["updated_at"] = "Updated At";
	$fieldToolTipsregistro["Russian"]["updated_at"] = "";
	$placeHoldersregistro["Russian"]["updated_at"] = "";
	$fieldLabelsregistro["Russian"]["tipo_de_documento"] = "Tipo De Documento";
	$fieldToolTipsregistro["Russian"]["tipo_de_documento"] = "";
	$placeHoldersregistro["Russian"]["tipo_de_documento"] = "";
	$fieldLabelsregistro["Russian"]["images_fs"] = "Images Fs";
	$fieldToolTipsregistro["Russian"]["images_fs"] = "";
	$placeHoldersregistro["Russian"]["images_fs"] = "";
	$fieldLabelsregistro["Russian"]["documents_fs"] = "Documents Fs";
	$fieldToolTipsregistro["Russian"]["documents_fs"] = "";
	$placeHoldersregistro["Russian"]["documents_fs"] = "";
	$pageTitlesregistro["Russian"]["edit"] = "Folio [{%folio}] - [{%fecha}]";
	if (count($fieldToolTipsregistro["Russian"]))
		$tdataregistro[".isUseToolTips"] = true;
}


	$tdataregistro[".NCSearch"] = true;



$tdataregistro[".shortTableName"] = "registro";
$tdataregistro[".nSecOptions"] = 0;

$tdataregistro[".mainTableOwnerID"] = "";
$tdataregistro[".entityType"] = 0;
$tdataregistro[".connId"] = "tramitadora_at_localhost";


$tdataregistro[".strOriginalTableName"] = "registro";

		 



$tdataregistro[".showAddInPopup"] = false;

$tdataregistro[".showEditInPopup"] = false;

$tdataregistro[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataregistro[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataregistro[".listAjax"] = false;
//	temporary
$tdataregistro[".listAjax"] = false;

	$tdataregistro[".audit"] = true;

	$tdataregistro[".locking"] = false;


$pages = $tdataregistro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataregistro[".edit"] = true;
	$tdataregistro[".afterEditAction"] = 1;
	$tdataregistro[".closePopupAfterEdit"] = 1;
	$tdataregistro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataregistro[".add"] = true;
$tdataregistro[".afterAddAction"] = 1;
$tdataregistro[".closePopupAfterAdd"] = 1;
$tdataregistro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataregistro[".list"] = true;
}



$tdataregistro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataregistro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataregistro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataregistro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataregistro[".printFriendly"] = true;
}



$tdataregistro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataregistro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataregistro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataregistro[".isUseAjaxSuggest"] = true;

$tdataregistro[".rowHighlite"] = true;





$tdataregistro[".ajaxCodeSnippetAdded"] = false;

$tdataregistro[".buttonsAdded"] = false;

$tdataregistro[".addPageEvents"] = false;

// use timepicker for search panel
$tdataregistro[".isUseTimeForSearch"] = false;


$tdataregistro[".badgeColor"] = "CFAE83";


$tdataregistro[".allSearchFields"] = array();
$tdataregistro[".filterFields"] = array();
$tdataregistro[".requiredSearchFields"] = array();

$tdataregistro[".googleLikeFields"] = array();
$tdataregistro[".googleLikeFields"][] = "texto";
$tdataregistro[".googleLikeFields"][] = "tipo_de_documento";
$tdataregistro[".googleLikeFields"][] = "images_fs";
$tdataregistro[".googleLikeFields"][] = "documents_fs";



$tdataregistro[".tableType"] = "list";

$tdataregistro[".printerPageOrientation"] = 0;
$tdataregistro[".nPrinterPageScale"] = 100;

$tdataregistro[".nPrinterSplitRecords"] = 40;

$tdataregistro[".geocodingEnabled"] = false;




$tdataregistro[".isDisplayLoading"] = true;






$tdataregistro[".pageSize"] = 20;

$tdataregistro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataregistro[".strOrderBy"] = $tstrOrderBy;

$tdataregistro[".orderindexes"] = array();


$tdataregistro[".sqlHead"] = "SELECT id,  folio,  fecha,  diasemana,  texto,  importe,  deleted_at,  created_at,  updated_at,  tiposdoc_id AS tipo_de_documento,  images_fs,  documents_fs";
$tdataregistro[".sqlFrom"] = "FROM registro";
$tdataregistro[".sqlWhereExpr"] = "(isnull(deleted_at) = True)";
$tdataregistro[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataregistro[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataregistro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataregistro[".arrGroupsPerPage"] = $arrGPP;

$tdataregistro[".highlightSearchResults"] = true;

$tableKeysregistro = array();
$tableKeysregistro[] = "id";
$tdataregistro[".Keys"] = $tableKeysregistro;


$tdataregistro[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","id");
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


	$tdataregistro["id"] = $fdata;
		$tdataregistro[".searchableFields"][] = "id";
//	folio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "folio";
	$fdata["GoodName"] = "folio";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","folio");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "folio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folio";

	
	
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


		$edata["strEditMask"] = "a999999";

	



		$edata["IsRequired"] = true;

		$edata["insertNull"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=7";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "[A-Z]{1}[0-9]{6}";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "El valor es invalido", "messageType" => "Text");
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


	$tdataregistro["folio"] = $fdata;
		$tdataregistro[".searchableFields"][] = "folio";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","fecha");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Dia de la semana no permitido", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataregistro["fecha"] = $fdata;
		$tdataregistro[".searchableFields"][] = "fecha";
//	diasemana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "diasemana";
	$fdata["GoodName"] = "diasemana";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","diasemana");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "diasemana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diasemana";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 1;

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 2;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "diasemana";
		$fdata["filterFormat"] = "Interval list";
		$fdata["showCollapsed"] = false;

	
	
		//intervals' settings
	$fdata["showWithNoRecords"] = 0;
	$fdata["filterIntervals"] =  array();

		//interval settings
		$intervalData = array();
		$intervalData["lowerLimitType"] = 2;
		$intervalData["upperLimitType"] = 2;

				$intervalData["remainder"] = false;
				$intervalData["noLimits"] = false;

		$intervalData["intervalLabelNameType"] = "Text";
		$intervalData["intervalLabelText"] = "1 - 7";
				$intervalData["lowerLimit"] = "1";
				$intervalData["upperLimit"] = "7";
				$intervalData["lowerUsesExpression"] = false;
				$intervalData["upperUsesExpression"] = false;
				$intervalData["caseSensetive"] = true;
		$intervalData["index"] = 1;

		$fdata["filterIntervals"][] = $intervalData;

	
//end of Filters settings


	$tdataregistro["diasemana"] = $fdata;
		$tdataregistro[".searchableFields"][] = "diasemana";
//	texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "texto";
	$fdata["GoodName"] = "texto";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","texto");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "texto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "texto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistro["texto"] = $fdata;
		$tdataregistro[".searchableFields"][] = "texto";
//	importe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "importe";
	$fdata["GoodName"] = "importe";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","importe");
	$fdata["FieldType"] = 14;

	
	
	
										

		$fdata["strField"] = "importe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "importe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataregistro["importe"] = $fdata;
		$tdataregistro[".searchableFields"][] = "importe";
//	deleted_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "deleted_at";
	$fdata["GoodName"] = "deleted_at";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","deleted_at");
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


	$tdataregistro["deleted_at"] = $fdata;
		$tdataregistro[".searchableFields"][] = "deleted_at";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","created_at");
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


	$tdataregistro["created_at"] = $fdata;
		$tdataregistro[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","updated_at");
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


	$tdataregistro["updated_at"] = $fdata;
		$tdataregistro[".searchableFields"][] = "updated_at";
//	tipo_de_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo_de_documento";
	$fdata["GoodName"] = "tipo_de_documento";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","tipo_de_documento");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "tiposdoc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiposdoc_id";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tiposdoc";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"texto", 'lookupF'=>"template");
	$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataregistro["tipo_de_documento"] = $fdata;
		$tdataregistro[".searchableFields"][] = "tipo_de_documento";
//	images_fs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "images_fs";
	$fdata["GoodName"] = "images_fs";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","images_fs");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "images_fs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "images_fs";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files_images";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 3;
	$vdata["maxImages"] = 10;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "tipo_de_documento";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
			$edata["acceptFileTypesHtml"] = ".bmp";
						$edata["acceptFileTypes"] .= "|jpeg";
			$edata["acceptFileTypesHtml"] .= ",.jpeg";
						$edata["acceptFileTypes"] .= "|jpg";
			$edata["acceptFileTypesHtml"] .= ",.jpg";
						$edata["acceptFileTypes"] .= "|png";
			$edata["acceptFileTypesHtml"] .= ",.png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 10;

	
	
	
	
	
	
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


	$tdataregistro["images_fs"] = $fdata;
		$tdataregistro[".searchableFields"][] = "images_fs";
//	documents_fs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "documents_fs";
	$fdata["GoodName"] = "documents_fs";
	$fdata["ownerTable"] = "registro";
	$fdata["Label"] = GetFieldLabel("registro","documents_fs");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "documents_fs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documents_fs";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "files_documents";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
							$edata["acceptFileTypes"] = "cdr";
			$edata["acceptFileTypesHtml"] = ".cdr";
						$edata["acceptFileTypes"] .= "|doc";
			$edata["acceptFileTypesHtml"] .= ",.doc";
						$edata["acceptFileTypes"] .= "|docx";
			$edata["acceptFileTypesHtml"] .= ",.docx";
						$edata["acceptFileTypes"] .= "|pdf";
			$edata["acceptFileTypesHtml"] .= ",.pdf";
						$edata["acceptFileTypes"] .= "|ppt";
			$edata["acceptFileTypesHtml"] .= ",.ppt";
						$edata["acceptFileTypes"] .= "|pptx";
			$edata["acceptFileTypesHtml"] .= ",.pptx";
						$edata["acceptFileTypes"] .= "|rtf";
			$edata["acceptFileTypesHtml"] .= ",.rtf";
						$edata["acceptFileTypes"] .= "|txt";
			$edata["acceptFileTypesHtml"] .= ",.txt";
						$edata["acceptFileTypes"] .= "|xls";
			$edata["acceptFileTypesHtml"] .= ",.xls";
						$edata["acceptFileTypes"] .= "|xlsx";
			$edata["acceptFileTypesHtml"] .= ",.xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 10;

		$edata["maxFileSize"] = 20000;

		$edata["maxTotalFilesSize"] = 20000;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 200;

			
	
	
	
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


	$tdataregistro["documents_fs"] = $fdata;
		$tdataregistro[".searchableFields"][] = "documents_fs";


$tables_data["registro"]=&$tdataregistro;
$field_labels["registro"] = &$fieldLabelsregistro;
$fieldToolTips["registro"] = &$fieldToolTipsregistro;
$placeHolders["registro"] = &$placeHoldersregistro;
$page_titles["registro"] = &$pageTitlesregistro;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["registro"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["registro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_registro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  folio,  fecha,  diasemana,  texto,  importe,  deleted_at,  created_at,  updated_at,  tiposdoc_id AS tipo_de_documento,  images_fs,  documents_fs";
$proto0["m_strFrom"] = "FROM registro";
$proto0["m_strWhere"] = "(isnull(deleted_at) = True)";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "isnull(deleted_at) = True";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$proto3=array();
$proto3["m_functiontype"] = "SQLF_CUSTOM";
$proto3["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "deleted_at"
));

$proto3["m_arguments"][]=$obj;
$proto3["m_strFunctionName"] = "isnull";
$obj = new SQLFunctionCall($proto3);

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= True";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto7["m_sql"] = "id";
$proto7["m_srcTableName"] = "registro";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "folio",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto9["m_sql"] = "folio";
$proto9["m_srcTableName"] = "registro";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto11["m_sql"] = "fecha";
$proto11["m_srcTableName"] = "registro";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "diasemana",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto13["m_sql"] = "diasemana";
$proto13["m_srcTableName"] = "registro";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "texto",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto15["m_sql"] = "texto";
$proto15["m_srcTableName"] = "registro";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "importe",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto17["m_sql"] = "importe";
$proto17["m_srcTableName"] = "registro";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_at",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto19["m_sql"] = "deleted_at";
$proto19["m_srcTableName"] = "registro";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto21["m_sql"] = "created_at";
$proto21["m_srcTableName"] = "registro";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto23["m_sql"] = "updated_at";
$proto23["m_srcTableName"] = "registro";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "tiposdoc_id",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto25["m_sql"] = "tiposdoc_id";
$proto25["m_srcTableName"] = "registro";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "tipo_de_documento";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "images_fs",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto27["m_sql"] = "images_fs";
$proto27["m_srcTableName"] = "registro";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "documents_fs",
	"m_strTable" => "registro",
	"m_srcTableName" => "registro"
));

$proto29["m_sql"] = "documents_fs";
$proto29["m_srcTableName"] = "registro";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "registro";
$proto32["m_srcTableName"] = "registro";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id";
$proto32["m_columns"][] = "folio";
$proto32["m_columns"][] = "fecha";
$proto32["m_columns"][] = "diasemana";
$proto32["m_columns"][] = "texto";
$proto32["m_columns"][] = "importe";
$proto32["m_columns"][] = "deleted_at";
$proto32["m_columns"][] = "created_at";
$proto32["m_columns"][] = "updated_at";
$proto32["m_columns"][] = "tiposdoc_id";
$proto32["m_columns"][] = "images_fs";
$proto32["m_columns"][] = "documents_fs";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "registro";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "registro";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="registro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_registro = createSqlQuery_registro();


	
					
;

												

$tdataregistro[".sqlquery"] = $queryData_registro;



$tableEvents["registro"] = new eventsBase;
$tdataregistro[".hasEvents"] = false;

?>