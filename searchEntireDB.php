<?php

class searchEntireDB {
	
	protected $_query;
	protected $_sql;
	private   $_userName;
	private   $_passWord;
	private   $_dbName;
	protected $_tableName;
	protected $_connection;
	protected $_columnName;
	protected $_targetText;
	public $_finalResult;
	public $_reports;
	
	public function __construct($DB, $userName, $passWord, $columnName, $targetText) {
		$this->_dbName     = $DB;
		$this->_userName   = $userName;
		$this->_passWord   = $passWord;
		$this->_columnName    = $columnName;
		$this->_targetText = $targetText;
		
		try {
			$this->_connection = new PDO('mysql: host = localhost; dbname = ' . $this->_dbName, $this->_userName, $this->_passWord);
         $this->_connection -> exec("SET SESSION collation_connection = 'utf8_general_ci';");
			$this->_connection -> exec("SET CHARACTER SET 'utf8';");
			$this->_connection -> exec("set names utf8");
		}//try
		
		catch( Exception $e ) {
			die('Connection error...');
		}//catch
	
	searchEntireDB::searchDB();
	
	}// __construct()
	
	public function searchDB() {
		$this->_sql = 'SHOW TABLES FROM ' . $this->_dbName;
		$this->_query = $this->_connection->query($this->_sql);
		$this->_tableName = $this->_query->fetchAll();
		$tableNumber = count($this->_tableName);
		
		for ( $i = 0; $i <= $tableNumber - 1; $i++ ) {
			
			$sql2 = "SELECT * FROM " . $this->_dbName . "." . $this->_tableName[$i][0];
			$query2 = $this->_connection->query($sql2);
			$fetch = $query2->fetchAll();
			
			$tempDBName = $this->_tableName[$i][0];
			
			if ( empty($fetch) ) {

				$this->_reports['emptyDBs'][] = $tempDBName;
				
			}// if this DB is Empty
			else {
				$thisArrayIndexes = count($fetch);
				
				foreach ( $fetch as $key=>$value ) {
					if ( is_array($value) ) {

						foreach ( $value as $column=>$fieldValue ) {
							
							if ( $this->_columnName != NULL ) {

								if ( $column == $this->_columnName && $fieldValue == $this->_targetText ) {
									
									$this->_reports['result'][$tempDBName][$column] = $fieldValue;
									
									$this->_finalResult[] = array('DBName'=>$tempDBName, 'ColumnFoundMatch'=>$column, 'searchedFor'=>$fieldValue);
									
								}//Last layer
								
							}//if ( $this->_columnName != NULL
							
							else {
								if ( $fieldValue == $this->_targetText ) {
									
									if ( is_int($column) ) {
										continue;
									}//prevent including integer keys in report and result
									else {
									
										$this->_reports['result'][$tempDBName][$column] = $fieldValue;
										
										$this->_finalResult[] = array('DBName'=>$tempDBName, 'ColumnFoundMatch'=>$column, 'searchedFor'=>$fieldValue);
									
									}
									
								}//Last layer when ColumnName is Null
								
							}//IF $this->_columnName ( is )--> NULL
						
						}//foreach ( $value as $column=>$fieldValue
						
					}//if ( is_array($value
					
				}//oreach ( $fetch as $key=>$value
				
				$this->_reports['notEmpty'][] = $tempDBName;

			}//else
			
		}//for

		 //var_dump($this->_finalResult);
		 
		 return $this->_finalResult;
		 return $this->_reports;
	
	}//searchDB()
	
		
}//class searchEntireDb


?>
