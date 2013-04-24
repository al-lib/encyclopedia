<?php
   class Database_manager{
   	 public $server;
	 public $username;
	 public $password;
	 public $DB;
	 public $db_name;
	
	 public $db_state;
	 
	public function __construct(){
		 $this->server="localhost";
	     $this->username="snitch";
	     $this->password="search";
		 $this->db_name="enc";
		 
		 
	}
	 
   	public function connect(){
   		$myconn=new mysqli($this->server, $this->username, $this->password, $this->db_name);
		if ($myconn->errno)
		{
			$this->db_state="НЕ УДАЛОСЬ ПОДКЛЮЧИТЬСЯ: ".$myconn->error;
		}
		else 
		{
			$this->DB=$myconn;
			$this->db_state="Подключение установлено";
		}
		
   	}
	public function disconnect(){
		 $this->DB->close($this->DB);
   	}
	public function authorization($username, $userpass)
	{
		
	}
	public function get_option_list($selectbox_name){
	  $sql_query="SELECT * FROM ".$selectbox_name;	
	  $sql_result=$this->DB->query($sql_query);
	  if($sql_result)  {
	  	while ($current_record = mysqli_fetch_array($sql_result)) {
	  			$id_value=$current_record['id'];
				$displayed_value=$current_record['speccol'];
				
				echo("<option value=\"".$id_value."\">".$displayed_value."</option>");		  
		 }
	  }
	}
	
   public function add_record($array_rec) {
   	$Val="";
   	foreach ($array_rec as $key) {
		   $Val.="'".$key."', ";
	   }
   	$sql_insert="INSERT INTO ".$this->db_name." VALUES (".$Val.")";
	//$result=$this->DB->query($sql_insert);
	return $sql_insert;
       
   }	
 }
?>