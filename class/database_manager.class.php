<?php
   class Database_manager{
   	 public $server;
	 public $username;
	 public $password;
	 public $set_connection;
	 public $db_name;

	 public $db_state;
	 
	public function __construct(){
		 $this->server="localhost";
	     $this->username="snitch";
	     $this->password="search";
		 $this->db_name="enc";
		 
	}
	 
   	public function connect(){
   		$this->set_connection=mysqli::__construct($this->server, $this->username, $this->password, $this->db_name);
		if (mysqli_errno($this->set_connection))
		{
			$this->db_state="НЕ УДАЛОСЬ ПОДКЛЮЧИТЬСЯ: ".mysqli::$error($this->set_connection);
		}
		else 
		{
			$this->db_state="Подключение установлено";
		}
		
   	}
	public function disconnect(){
		  mysqli::close($this->set_connection);
   	}
	public function authorization($username, $userpass)
	{
		
	}
	public function get_option_list($selectbox_name)
	{
	  $sql_query="SELECT * FROM ".$selectbox_name;	
	  $sql_result=mysqli_query($sql_query);
	  if($sql_result)
	  {
	  	while ($current_record = mysqli_fetch_array($sql_result)) {
	  			$id_value=$current_record['id'];
				$displayed_value=$current_record['speccol'];
				
				echo("<option value=\"".$id_value."\">".$displayed_value."</option>");		  
		  }
	  }
	  
	}
   }
?>