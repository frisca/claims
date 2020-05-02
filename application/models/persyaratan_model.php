<?php
	class Persyaratan_Model extends CI_Model
	{
		public function getLisPersyaratan(){
			$query = "SELECT p.*, jf.jenis_formulir, jf.id_jenis FROM persyaratan p LEFT join jenis_formulir jf on jf.id_jenis = p.id_jenis order by jf.jenis_formulir asc";
			return $this->db->query($query);
		}
	}
?>