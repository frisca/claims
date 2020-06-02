<?php
	class Formulir_Model extends CI_Model
	{
		public function getListFormulir($id){
			$query = "SELECT f.*, p.*, jf.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					where f.id_pengguna = " . $id;
			return $this->db->query($query);
		}
	}
?>