<?php
	class Persyaratan_Model extends CI_Model
	{
		public function getLisPersyaratan(){
			$query = "SELECT p.*, jf.jenis_formulir, jf.id_jenis FROM persyaratan p LEFT join jenis_formulir jf on jf.id_jenis = p.id_jenis order by jf.jenis_formulir asc";
			return $this->db->query($query);
		}

		public function getListDetailPersyaratan($id){
			$query = "SELECT dp.* FROM detail_persyaratan dp 
					left join persyaratan p on p.id_persyaratan = dp.id_persyaratan
					where dp.id_persyaratan = " . $id . "
					order by dp.urutan asc";
			var_dump($query);exit();
			return $this->db->query($query);
		}
	}
?>