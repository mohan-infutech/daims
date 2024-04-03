<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administration_model extends CI_Model
{

    public function count()
    {
        // Replace 'administration' with your actual table name for administration details
        return $this->db->count_all('staffs');
    }

    public function all()
    {
        // Replace 'administration' with your actual table name for administration details
        $query = $this->db->get('staffs'); 
        return $query->result();
    }

    public function new($data = [])
    {
        // Replace 'administration' with your actual table name for administration details
        return $this->db->insert('staffs', $data); 
    }

    public function get($id = '')
    {
        // Replace 'administration' with your actual table name for administration details
        $query = $this->db->get_where('staffs', array('id' => $id)); 
        return $query->row();
    }

    public function delete($id = '')
    {
        // Replace 'administration' with your actual table name for administration details
        return $this->db->delete('staffs', array('id' => $id)); 
    }

    public function fetch($limit = 9, $page = 1)
    {
        // Ensure $limit and $page are integers
        $limit = (int)$limit;
        $page = (int)$page;

        $offset = ($page - 1) * $limit;
        $this->db->limit($limit, $offset);
        // Replace 'administration' with your actual table name for administration details
        $this->db->from('staffs');
        $q = $this->db->get();
        return $q->result();
    }
    
    public function fetchTypes($value='')
   {
   	$this->db->distinct('type');
   	$this->db->select('type');
   	$this->db->from('staffs');
      $q = $this->db->get();
      $arr = [];
      foreach ($q->result_array() as $key => $value) {
      	$arr[] = $value['type'];
      }
      return $arr;
   }
}
