<?php
class artikel{
	private $dbconfig;

	function __construct($dbconfig){
		$this->db = $dbconfig;
	}
	public function create($judul,$deskripsi,$isi,$publish_status,$flag){
		try{
		$stmt = $this->db->prepare("INSERT INTO artikel(judul,deskripsi,isi,publish_status,flag) VALUES(:judul,:deskripsi,:isi,:publish_status,:flag)");
		$stmt->bindparam(":judul",$judul);
		$stmt->bindparam(":deskripsi",$deskripsi);
		$stmt->bindparam(":isi",$isi);
		$stmt->bindparam(":publish_status",$publish_status);
		$stmt->bindparam(":flag",$flag);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
	public function delete($id_artikel){
		$stmt = $this->db->prepare("UPDATE artikel SET flag='0' WHERE id_artikel=:id_artikel");
		$stmt->bindparam(':id_artikel',$id_artikel);
		$stmt->execute();
		return true;
	}
	public function update($judul,$deskripsi,$isi,$publish_status,$flag,$id_artikel){
		try{
		$stmt = $this->db->prepare("UPDATE artikel SET judul=:judul,deskripsi=:deskripsi,isi=:isi,publish_status=:publish_status,flag=:flag WHERE id_artikel=:id_artikel");
		$stmt->bindparam(":judul",$judul);
		$stmt->bindparam(":deskripsi",$deskripsi);
		$stmt->bindparam(":isi",$isi);
		$stmt->bindparam(":publish_status",$publish_status);
		$stmt->bindparam(":flag",$flag);
		$stmt->bindparam(":id_artikel",$id_artikel);
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}
?>