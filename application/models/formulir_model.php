<?php
	class Formulir_Model extends CI_Model
	{
		public function getListFormulirById($id){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna
					where f.status = 1 and f.id_pengguna = " . $id;
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
					where f.status = 1  and f.read = 0 order by f.id_formulir desc limit 3";
			return $this->db->query($query);
		}

		public function getNotifUser($id){
			$query = "SELECT f.id_formulir, f.status, f.id_jenis_formulir, f.id_pengguna, f.id_detail_pengguna, peg.nama,
					jf.jenis_formulir FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis 
					left join detail_pengguna dp on dp.id_pengguna = f.id_detail_pengguna
					left join pengguna peg on peg.id_pengguna = f.id_pengguna
					where (f.status = 2 or f.status = 3) and f.read = 0  and peg.id_pengguna = " . $id . " order by f.id_formulir desc limit 3";
			return $this->db->query($query);
		}

		public function getListFormulir(){
			$query = "SELECT f.*, p.*, jf.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis";
			return $this->db->query($query);
		}

		public function getListFormulirProses(){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna
					where f.status = 1";
			return $this->db->query($query);
		}

		public function getListFormulirProsesDetailById($id){
			// $query = "SELECT f.*, p.*, pd.* FROM formulir f 
			// 	    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
			// 		left join persyaratan p on p.id_jenis = jf.id_jenis
			// 		left join formulir_dt fd on fd.id_formulir = f.id_formulir
			// 		left join detail_persyaratan pd on pd.id_persyaratan = p.id_persyaratan
			// 		where fd.id_formulir = " . $id . " order by pd.urutan asc ";
			$query = "SELECT fd.files as files_formulir, fd.id_formulir_dt, fd.status as status_formulir_dt, f.*, dp.* FROM formulir_dt fd
			left join formulir f on fd.id_formulir = f.id_formulir
			left join persyaratan p on p.id_jenis = f.id_jenis_formulir
			left join detail_persyaratan dp on dp.id_detail_persyaratan = fd.id_detail_persyaratan
			where fd.id_formulir = " . $id . " GROUP by fd.id_formulir_dt ";
			// var_dump($query);exit();
			return $this->db->query($query);
		}

		public function getCountFormulirDt($id){
			$query = "select count(*) as total from formulir_dt where status = 1 and id_formulir = " . $id;
			return $this->db->query($query);
		}

		public function getListFormulirReject(){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna where f.status = 3";
			return $this->db->query($query);
		}

		public function getListFormulirRejectById($id){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna where f.status = 3 and u.id_pengguna = " . $id;
			return $this->db->query($query);
		}

		public function getListFormulirRejectDetailById($id){
			// $query = "SELECT f.*, p.*, pd.* FROM formulir f 
			// 	    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
			// 		left join persyaratan p on p.id_jenis = jf.id_jenis
			// 		left join formulir_dt fd on fd.id_formulir = f.id_formulir
			// 		left join detail_persyaratan pd on pd.id_persyaratan = p.id_persyaratan
			// 		where fd.id_formulir = " . $id . " order by pd.urutan asc ";
			$query = "SELECT fd.files as files_formulir, fd.id_formulir_dt, fd.status as status_formulir_dt,
					 f.*, dp.* FROM formulir_dt fd
					left join formulir f on fd.id_formulir = f.id_formulir
					left join persyaratan p on p.id_jenis = f.id_jenis_formulir
					left join detail_persyaratan dp on dp.id_detail_persyaratan = fd.id_detail_persyaratan
					where fd.status = 1 and fd.id_formulir = " . $id . " GROUP by fd.id_formulir_dt ";
			// var_dump($query);exit();
			return $this->db->query($query);
		}

		public function getListFormulirApprove(){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna where f.status = 2";
			return $this->db->query($query);
		}

		public function getListFormulirApproveById($id){
			$query = "SELECT f.*, p.*, jf.*, u.* FROM formulir f 
				    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
					left join persyaratan p on p.id_jenis = jf.id_jenis
					left join detail_pengguna dp on dp.id_detail_pengguna = f.id_detail_pengguna
					left join pengguna u on u.id_pengguna = dp.id_pengguna where f.status = 2 and u.id_pengguna = " . $id;
			return $this->db->query($query);
		}

		public function getListFormulirApproveDetailById($id){
			// $query = "SELECT f.*, p.*, pd.* FROM formulir f 
			// 	    left join jenis_formulir jf on jf.id_jenis = f.id_jenis_formulir
			// 		left join persyaratan p on p.id_jenis = jf.id_jenis
			// 		left join formulir_dt fd on fd.id_formulir = f.id_formulir
			// 		left join detail_persyaratan pd on pd.id_persyaratan = p.id_persyaratan
			// 		where fd.id_formulir = " . $id . " order by pd.urutan asc ";
			$query = "SELECT fd.files as files_formulir, fd.id_formulir_dt, fd.status as status_formulir_dt,
					 f.*, dp.* FROM formulir_dt fd
					left join formulir f on fd.id_formulir = f.id_formulir
					left join persyaratan p on p.id_jenis = f.id_jenis_formulir
					left join detail_persyaratan dp on dp.id_detail_persyaratan = fd.id_detail_persyaratan
					where fd.status = 1 and fd.id_formulir = " . $id . " GROUP by fd.id_formulir_dt ";
			// var_dump($query);exit();
			return $this->db->query($query);
		}
	}
?>