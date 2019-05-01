<?php
class partai{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($nama_partai,$alamat_partai,$no_telepon,$flag){
		try{
		$stmt = $this->db->prepare("INSERT INTO partai(nama_partai,alamat_partai,no_telepon,flag) VALUES(:nama_partai,:alamat_partai,:no_telepon,:flag)");
		$stmt->bindparam(":nama_partai",$nama_partai);
		$stmt->bindparam(":alamat_partai",$alamat_partai);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_partai){
		$stmt = $this->db->prepare("UPDATE partai SET flag='0'  WHERE id_partai=:id_partai");
		$stmt->bindparam(':id_partai',$id_partai);
		$stmt->execute();
		return true;
	}
	public function update($nama_partai,$alamat_partai,$no_telepon,$flag,$id_partai){
		try{
		$stmt = $this->db->prepare("UPDATE partai SET nama_partai=:nama_partai,alamat_partai=:alamat_partai,no_telepon=:no_telepon,flag=:flag WHERE id_partai=:id_partai");
		$stmt->bindparam(":nama_partai",$nama_partai);
		$stmt->bindparam(":alamat_partai",$alamat_partai);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_partai",$id_partai);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>