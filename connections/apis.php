<?php
require_once( getabspath('connections/rest.php') );

class RestManager
{
	protected $_tablesConnectionIds;
	protected $_connectionsData;
	protected $_connectionsIdByName = array();

	function __construct()
	{
		$this->_setConnectionsData();
//		$this->_setTablesConnectionIds();
	}

	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$this->_tablesConnectionIds = &$connectionsIds;
	}

	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

		$data = array();
		$data["connId"] = "rest";
		$data["connName"] = "Rest Api";

		$this->_connectionsIdByName["Rest Api"] = "rest";

		$data["url"] = "https://";
		$data["authType"] = "api";
				$data["apiKey"] = "";
		$data["keyLocation"] = 1;
		$data["keyParameter"] = "X-Auth-Token";
	
	/*
	if @conn.strCustomDBConnection
	MakeCustomDBConnection(@conn);
	endif
	*/
		$connectionsData["rest"] = $data;
		$this->_connectionsData = &$connectionsData;
	}

	public function getConnection( $id ) {
		return new RestConnection( $this->_connectionsData[ $id ] );
	}


}


?>