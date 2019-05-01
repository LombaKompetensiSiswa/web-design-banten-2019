<?php
class pelaksanaan{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($id_tps,$tgl_pelaksanaan,$flag){
		try{
		$stmt->bindparam(":judul",$judul);
		$stmt = $this->db->prepare("INSERT INTO pelaksanaan(id_tps,tgl_pelaksanaan,flag) VALUES(:id_tps,:tgl_pelaksanaan,:flag)");
		$stmt->bindparam(":id_tps",$id_tps);
		$stmt->bindparam(":tgl_pelaksanaan",$tgl_pelaksanaan);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_pelaksanaan){
		$stmt = $this->db->prepare("UPDATE pelaksanaan SET flag='0' WHERE id_pelaksanaan=:id_pelaksanaan");
		$stmt->bindparam(':id_pelaksanaan',$id_pelaksanaan);
		$stmt->execute();
		return true;
	}
	public function update($id_tps,$tgl_pelaksanaan,$flag,$id_pelaksanaan){
		try{
		$stmt = $this->db->prepare("UPDATE pelaksanaan SET id_tps=:id_tps,tgl_pelaksanaan=:tgl_pelaksanaan,flag=:flag WHERE id_pelaksanaan=:id_pelaksanaan");
		$stmt->bindparam(":id_tps",$id_tps);
		$stmt->bindparam(":tgl_pelaksanaan",$tgl_pelaksanaan);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_pelaksanaan",$id_pelaksanaan);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>