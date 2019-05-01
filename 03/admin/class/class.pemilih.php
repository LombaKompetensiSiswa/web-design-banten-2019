<?php
class pemilih{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($nama_pemilih,$alamat_pemilih,$no_telepon,$id_partai,$id_pelaksanaan,$status_suara,$flag){
		try{
		$stmt = $this->db->prepare("INSERT INTO pemilih(nama_pemilih,alamat_pemilih,no_telepon,id_partai,id_pelaksanaan,status_suara,flag) VALUES (:nama_pemilih,:alamat_pemilih,:no_telepon,:id_partai,:id_pelaksanaan,:status_suara,:flag)");
		$stmt->bindparam(":nama_pemilih",$nama_pemilih);
		$stmt->bindparam(":alamat_pemilih",$alamat_pemilih);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":id_partai",$id_partai);
		$stmt->bindparam(":id_pelaksanaan",$id_pelaksanaan);
		$stmt->bindparam(":status_suara",$status_suara);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_partai){
		$stmt = $this->db->prepare("UPDATE pemilih SET flag='0'  WHERE id_pemilih=:id_pemilih");
		$stmt->bindparam(":id_pemilih",$id_pemilih);
		$stmt->execute();
		return true;
	}
	public function update($nama_pemilih,$alamat_pemilih,$no_telepon,$id_partai,$id_tps,$flag,$id_pemilih){
		try{
		$stmt = $this->db->prepare("UPDATE pemilih SET nama_pemilih=:nama_pemilih,alamat_pemilih=:alamat_pemilih,no_telepon=:no_telepon,id_partai=:id_partai,$id_tps=:id_tps,flag=:flag WHERE id_pemilih=:id_pemilih");
		$stmt->bindparam(":nama_pemilih",$nama_pemilih);
		$stmt->bindparam(":alamat_pemilih",$alamat_pemilih);
		$stmt->bindparam(":no_telepon",$no_telepon);
		$stmt->bindparam(":id_partai",$id_partai);
		$stmt->bindparam(":id_tps",$id_tps);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_pemilih",$id_pemilih);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>