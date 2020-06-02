<?php
	class Global_Model extends CI_Model
	{
		public function insertData($table, $data){
			$this->db->insert($table, $data);
			return true;
		}

		public function getAllData($table){
			$res = $this->db->get($table);
			return $res;
		}

		public function getDataByCondition($table, $condition){
			$this->db->where($condition);
			return $this->db->get($table);
		}

		public function updateData($table, $condition, $data){
			$this->db->where($condition);
			return $this->db->update($table, $data);
		}

		public function deleteData($table, $condition){
			$this->db->where($condition);
			return $this->db->delete($table, $data);
		}

		public function getDataByDesc($id){
			$query = "select * from detail_pengguna where id_pengguna = " . $id . " order by id_detail_pengguna desc limit 1";
			$result = $this->db->query($query);
			return $result;
		}
	}
?>