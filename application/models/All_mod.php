<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_mod extends CI_Model {

	// List all your items
	public function mengambil($table, $where = NULL, $limit = NULL, $like = NULL)
	{
		if ($like != NULL) {
			$this->db->like($like);
		}
		if ($limit != NULL) {
			$this->db->limit($limit);
		}
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}

	public function mencari($table, $where, $like)
	{
		if ($where != NULL) {
			$this->db->where($where);
		}
		if ($like != NULL) {
			$this->db->like($like);
		}
		return $this->db->get($table);
	}

	public function mencariNilaiMaksimum($table, $field = NULL, $alias = NULL, $where = NULL)
	{
		if ($field != NULL) {
			$this->db->select_max($field, $alias);
		}
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}

	public function mencariTotal($table, $field, $alias, $where = NULL)
	{
		$this->db->select('sum(' . $field . ') as ' . $alias );
		if ($where != NULL) {
			$this->db->where($where);
		}
		return $this->db->get($table);
	}

	public function menghitung($table, $where = NULL)
	{
		if ($where != NULL) {
			$this->db->where($where);
		}
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	// Add a new item
	public function menambah($table, $data)
	{
		if ($this->db->insert($table, $data)) {
			return [
				'status' => 'berhasil',
				'nilai' => $this->db->insert_id()
			];
		} else {
			return [
				'status' => 'gagal'
			];
		}
	}

	//Update one item
	public function update($table, $where, $data )
	{
		$this->db->where($where);
		if ($this->db->update($table, $data)) {
			return [
				'status' => 'berhasil'
			];
		} else {
			return [
				'status' => 'gagal'
			];
		}
	}

	//Delete one item
	public function delete($table, $data)
	{
		$this->db->where($data);
		if ($this->db->delete($table)) {
			return [
				'status' => 'berhasil'
			];
		} else {
			return [
				'status' => 'gagal'
			];
		}
	}
}

/* End of file Mod_semua_bisa.php */
/* Location: ./application/models/Mod_semua_bisa.php */
