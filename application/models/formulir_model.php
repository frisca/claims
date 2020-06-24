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

		public function getFormulirById($id){
			$query = "SELECT f.*, p.*, jf.*, pg.*, dp.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna pg on pg.id_pengguna = f.id_pengguna
					where f.id_formulir = " . $id;
			return $this->db->query($query);
		}

		public function getFormulirByDesc(){
			$query = "SELECT f.*, p.*, jf.*, pg.*, dp.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna pg on pg.id_pengguna = f.id_pengguna order by id_formulir desc limit 1";
			return $this->db->query($query);
		}

		public function getNotif(){
			$query = "SELECT f.id_formulir, f.id_jenis_formulir, f.id_pengguna, f.id_detail_pengguna, peg.nama,
					jf.jenis_formulir FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis 
					left join pengguna peg on peg.id_pengguna = f.id_pengguna
					where f.status = 0 order by f.id_formulir desc limit 3";
			return $this->db->query($query);
		}
	}
?>