<?php

class TaskModel extends CI_Model {

    public function addCart($data) {
        $this->db->insert('tasks', $data);
    }

    public function getTasks($state, $id) {
        $this->db->select('*');
        $this->db->from('tasks');
        $this->db->where('state', $state);
        $this->db->where('idUser', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function updateState($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tasks', $data);
    }
    
    public function delete ($id){
        $this->db->where('id',$id);
        $this->db->delete('tasks');
    }
    
    public function update($id , $data){
        $this->db->where('id',$id);
        $this->db->update('tasks',$data);
    }
    

}

?>