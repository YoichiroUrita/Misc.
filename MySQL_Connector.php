<?php
//Y.Urita 2018/11/18
class mysql_connector{
	private $host='';//host name (localhost)
	private $dbname='';//data base name
	private $charset='utf8';//database default is utf8
	private $user='';//user name
	private $passwd='';//password

	public $pdo;
	public $statement;
	
	function __construct(){
		$dsn='mysql:host='.$this->host.';'
		.'dbname='.$this->dbname.';'
		.'charset='.$this->charset;
		$this->pdo=new PDO($dsn,$this->user,$this->passwd);
	}
	
	function __destruct(){
		$this->pdo=null;
	}
	
	public function Query($_sql){
		try{
			$this->statement=$this->pdo->query($_sql);
			return $this->statement->fetchAll(PDO::PARAM_STR);
		}
		catch(PDOException $e)
		{
			exit("query failure".$e->getMessage());
		}
	}
	
	public function Prepare($_sql){
		try{
			$this->statement=$this->pdo->prepare($_sql);
			return true;
		}
		catch(PDOException $e)
		{
			exit("prepare failure".$e->getMessage());
		}
	}
	
	public function BindValue($_param,$_value,$_data_type=PDF::PARAM_STR){
		try{
			$this->statement->bindValue($_param,$_value,$_data_type);
			return true;
		}
		catch(PDOException $e)
		{
			exit("prepare failure".$e->getMessage());
		}
	}
	
	public function Execute($_param_ary=null){
		try{
			if($_param_ary==""){
				$this->statement->execute();
			}
			else
			{
				$this->statement->execute($_param_ary);
			}
			return $this->statement;
		} 
		catch(PDOException $e)
		{
			exit("execute failure".$e->getMessage());
		}
	}
	
	public function Fetch(){
		try{
			$result=$this->statement->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
		catch(PDOException $e)
		{
			exit("fetch failure".$e->getMessage());
		}
	}
	
	public function FetchAll(){
		try{
			$result=$this->statement->fetchAll();
			return $result;
		}
		catch(PDOException $e)
		{
			exit("fetch failure".$e->getMessage());
		}
	}
	
	public function ExFetch($_param_ary=null,$_fetchAll=PDO::FETCH_ASSOC){
		try{
			$isErr;
			if($_param_ary=="")
			{
				$isErr=$this->statement->execute();
			}
			else
			{
				$isErr=$this->statement->execute($_param_ary);
			}
			
			if(!$isErr)
			{
				echo $this->statement->debugDumpParams();
			}
			
			$result=$this->statement->fetchAll($_fetchAll);
			return $result;
		}
		catch(PDOException $e)
		{
			echo $this->statement->debugDumpParams();
			exit("execute failure".$e->getMessage());
		}
	}
	
	//How to use: after bindvalue
	public function Debug(){
		try{
			return $this->statement->debugDumpParams();
		}
		catch(PDOException $e)
		{
			exit("execute failure".$e->getMessage());
		}
	}	
}

?>
