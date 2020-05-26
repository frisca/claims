<?php
	class Jawaban_Pertanyaan_Model extends CI_Model
	{
		public function getLisJawabanPertanyaan($id){
			$query = "SELECT p.*, jp.* FROM jawaban_pertanyaan jp LEFT join pertanyaan p on p.id_pertanyaan = jp.hasil where jp.id_pertanyaan = " . $id;
			return $this->db->query($query);
		}

		public function getPertanyaanByDesc(){
			$query = "SELECT p.* FROM pertanyaan p order by urutan asc limit 1";
			return $this->db->query($query);
		}
	}
?>