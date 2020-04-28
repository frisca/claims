<?php
	class Global_Model extends CI_Model
	{
		public function inserData($table, $data){
			$this->db->insert($table, $data);
			return true;
		}

		public function getAllData(){
			$res = $this->db->get($table);
			return $res;
		}

		public function getDataByCondition($table, $condition){
			$this->db->where($condition);
			return $this->db->get($table);
		}
	}
?>