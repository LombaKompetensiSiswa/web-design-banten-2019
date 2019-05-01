<?php
class tps{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($nama_tps,$alamat_tps,$status,$flag){
		try{
		$stmt = $this->db->prepare("INSERT INTO tps(nama_tps,alamat_tps,status,flag) VALUES (:nama_tps,:alamat_tps,:status,:flag)");
		$stmt->bindparam(":nama_tps",$nama_tps);
		$stmt->bindparam(":alamat_tps",$alamat_tps);
		$stmt->bindparam(":status",$status);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_tps){
		$stmt = $this->db->prepare("UPDATE tps SET flag='0' WHERE id_tps=:id_tps");
		$stmt->bindparam(":id_tps",$id_tps);
		$stmt->execute();
		return true;
	}
	public function update($nama_tps,$alamat_tps,$status,$flag,$id_tps){
		try{
		$stmt = $this->db->prepare("UPDATE tps SET nama_tps=:nama_tps,alamat_tps=:alamat_tps,status=:status,flag=:flag WHERE id_tps=:id_tps");
		$stmt->bindparam(":nama_tps",$nama_tps);
		$stmt->bindparam(":alamat_tps",$alamat_tps);
		$stmt->bindparam(":status",$status);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_tps",$id_tps);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>