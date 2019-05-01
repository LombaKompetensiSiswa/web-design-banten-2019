<?php
class saksi{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($nama_saksi,$alamat_saksi,$no_telepon,$id_partai,$flag){
		try{
		$stmt = $this->db->prepare("INSERT INTO saksi(nama_saksi,alamat_saksi,no_telepon,id_partai,flag) VALUES (:nama_saksi,:alamat_saksi,:no_telepon,:id_partai,:flag)");
		$stmt->bindparam(":nama_saksi",$nama_saksi);
		$stmt->bindparam(":alamat_saksi",$alamat_saksi);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":id_partai",$id_partai);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_saksi){
		$stmt = $this->db->prepare("UPDATE saksi SET saksi='0' WHERE id_saksi=:id_saksi");
		$stmt->bindparam(":id_saksi",$id_saksi);
		$stmt->execute();
		return true;
	}
	public function update($nama_saksi,$alamat_saksi,$no_telepon,$id_partai,$flag){
		try{
		$stmt = $this->db->prepare("UPDATE saksi SET nama_saksi=:nama_saksi,alamat_saksi=:alamat_saksi,no_telepon=:no_telepon,$id_partai=:id_partai,flag=:flag WHERE id_saksi=:id_saksi");
		$stmt->bindparam(":nama_saksi",$nama_saksi);
		$stmt->bindparam(":alamat_saksi",$alamat_saksi);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":id_partai",$id_partai);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_saksi",$id_saksi);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>