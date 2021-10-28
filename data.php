<?php 
class database {
	private $conn= null;
	private $host='localhost';
	private $user= 'root';
	private $pass='';
	private $data='qltintuc';
	private $result=null;

	private function connect(){
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->data)
		or die('ket noi that bai');
		$this->conn->query('SET NAME UTF8');
	}
	//PHUONG THUC SELECT DU LIEU
	public function select($sql){
		$this->connect();
		$this->result=$this->conn->query($sql);
	}
	public function command($sql){
		$this->connect();
		$this->result=$this->conn->query($sql);
	}
	public function fetch(){
		// var_dump(result);
		if (!$this->result) {
			trigger_error('Invalid query: ' . $this->conn->error);
		}
		if($this->result->num_rows > 0){
			$row= $this->result->fetch_assoc();	
		} else{
			$row = 0;
		}
		return $row;
	}
		// if(!empty($a))
		// 	return true;
		// else
		// 	return false;
	
	public function CheckNull($a){
		if(!empty($a))
			return true;
		else
			return false;
	}
	public function CheckNumber($a){
		if(is_numeric($a))
			return true;
		else
			return false;
	}
}
?>