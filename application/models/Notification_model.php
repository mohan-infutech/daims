<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {

   public function count()
   {
      return $this->db->count_all('notifications');
   }

   public function all()
   {
      $query = $this->db->get('notifications'); 
      return $query->result();
   }

   public function new_notification($data = [])
   {
      return $this->db->insert('notifications', $data); 
   }

   public function get_notification($id = '')
   {
      $query = $this->db->get_where('notifications', array('id' => $id)); 
      return $query->row();
   }

   public function delete_notification($id = '')
   {
      return $this->db->delete('notifications', array('id' => $id)); 
   }

   public function fetch($limit=50)
   {
      $this->db->order_by('created_on', 'desc');
      $this->db->limit($limit);
      $query = $this->db->get('notifications'); 
      return $query->result_array();
   }
}
