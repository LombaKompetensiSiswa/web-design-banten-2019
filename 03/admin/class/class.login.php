<?php
class login{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function login($username,$password){
		try{
		$stmt = $this->db->prepare("SELECT * FROM petugas WHERE username=:username LIMIT 1");
		$stmt->execute(array(":username" => $username));
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount() > 0){
			if(password_verify($data['username'], $username)){
				$_SESSION['user_session'] = $data['id_petugas'];
				redirect("dashboard.php");
			}
		}
	}catch(PDOException $e){
		return $e->getMessage();
	}

	}
	public function register($username,$password,$status,$flag){
		try{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			$stmt = $this->db->prepare("INSERT INTO petugas(username,password,status,flag) VALUES (:username,:password,:status,:flag)");
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":password",$new_password);
			$stmt->bindparam(":status",$status);
			$stmt->bindparam(":flag",$flag);
			$stmt->execute();
			return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function is_loggedin(){
		if(isset($_SESSION['user_session'])){
			return true;
		}
	}
	public function redirect(){
		return $url;
	}
	public function logout(){
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}

}
?>